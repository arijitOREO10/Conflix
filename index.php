<html>
    <head>
        <link rel="stylesheet" href="fp1.css">
        <title>
            Create Account

        </title>
        <link rel="Website Icon" type="png" href="2.png">
    </head>
    <body bgcolor="#1D4B8F ">
        <?php
require 'config.php';
     if (!empty($_SESSION["id"])) {
         header("Location: signup.php");
     }
     if (isset($_REQUEST["sub"])) {
        $name = $_REQUEST["name"];
        $email = $_REQUEST["email"];
        $pass = $_REQUEST["pass"]; 
        $Cpass = $_REQUEST["Cpass"]; 
        $duplicate = mysqli_query($conn, "SELECT * FROM signup WHERE email = '$email'");
        if (mysqli_num_rows($duplicate) > 0) {
            echo
            "<script> alert('Username or Email Has Already Taken'); </script>";
        } else {
            if ($pass == $Cpass) {
                $query = "INSERT INTO signup(name,email,pass,Cpass) VALUES('$name','$email','$pass','$Cpass')";
                mysqli_query($conn, $query);
                echo
                "<script> alert('Registration Successful'); </script>";
                header("Location: login.php");
            } else {
                echo
                "<script> alert('Password Does Not Match'); </script>";
            }
        }
    }
    ?>
        <form action="" method="post">
        <div class="x">
            <center>
            <h2>Create Account</h2>
        </center>
        <br>

         <p>
     <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Arijit Chakraborty" name="name" required>
    <br>

    <label ><b>Email</b></label>
    <input type="email" placeholder="arijit@richpanel.com" name="email" required>
    <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder=".............." name="pass" required>
    <br>
    <label for="psw"><b>Confirm Password</b></label>
    <input type="password" placeholder=".............." name="Cpass" required>
    <br>

    <input type="checkbox" value="lsRememberMe" > <label for="rememberMe">Remember me</label>
    <br>
    <button type="submit" name="sub">Sign Up</button>
             <p2>
             Already have an account?<a href="page2.php">Login</a>
             </p2>
         </p>
         

        </div>
        </form>
    </body>
    
</html>