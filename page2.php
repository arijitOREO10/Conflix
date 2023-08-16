<html>
    <head>
        <link rel="stylesheet" href="page201.css">
        <title>
            Login 

        </title>
          <link rel="Website Icon" type="png" href="2.png">
    </head>
    <body bgcolor="#1D4B8F ">
        <?php
    require 'config.php';
    if (!empty($_SESSION["id"])) {
        header("Location: index.php");
    }
    if (isset($_REQUEST["subl"])) {
        $email = $_REQUEST["email"];
        $pass = $_REQUEST["pass"];
        $result = mysqli_query($conn, "SELECT * FROM signup WHERE email = '$email'");
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) > 0) {
            if ($pass == $row['pass']) {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header("Location:page4.php");
            } else {
                echo
                "<script> alert('Wrong Password'); </script>";
            }
        } else {
            echo
            "<script> alert('User Not Registered'); </script>";
        }
    }
    ?>
        <form action=""  method="post">
        <div class="x">
            <center>
            <h2>Login to your Account</h2>
        </center>
        <br>

         <p>
     
    <label f><b>Email</b></label>
    <input type="email" placeholder="arijit@richpanel.com" name="email" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder=".............." name="pass" required>
    <br>
    <input type="checkbox" value="lsRememberMe" > <label for="rememberMe">Remember me</label>
    <br>
    <button type="submit" name="subl">Login</button>
             <p2>
             New to MyApp?<a href="fp.php">Sign Up</a>
             </p2>
         </p>
         

        </div>
        </form>
        
    </body>
    
</html>