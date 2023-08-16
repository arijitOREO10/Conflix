<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="page401.css" />
    <link rel="Website Icon" type="png" href="images/2.png">


    <title>plan detail</title>
</head>

<body>
    <section class="container-table margin-inline">
        <div class="plan-head">
            <center>
                <h1>Choose the plan that’s right for you</h1>
            </center>
        </div>


        <div class="toggler" onclick="month()" >
            <span id="month" class="month active">Monthly</span>
            <span id="year" class="year">Yearly</span>
        </div>


        <div class="table-res">


            <div class="text-absolute">
                <p>Monthly price</p>
                <p>Video quality</p>
                <p>Resolution</p>
                <p>Devices you can use to watch</p>
            </div>

            <div class="tab-hidden hide">
                <input class="tab-input-none" type="radio" name="radiotab" id="tab-1" />

                <div class="label">
                    <label class="tab-label text-table-head" for="tab-1"></label>
                </div>

                <div class="content-list hide">
                    <p class="text-content-1">Monthly price</p>
                    <p class="text-content-1">Video quality</p>
                    <p class="text-content-1">Resolution</p>
                    <p class="text-content-1">Devices you can use to watch</p>
                </div>
            </div>

            <div>
                <input class="tab-input" type="radio" name="radiotab" id="tab-2" />

                <div class="label" onclick="testm()">
                    <label class="tab-label text-table-head" for="tab-2" id="mob">Mobile</label>
                </div>

                <div class="content-list">
                    <p class="text-content pricemonth">₹100</p>
                    <p class="text-content priceyear">₹1000</p>
                    <p class="text-content">Good</p>
                    <p class="text-content">480p</p>
                    <div class="device-list">

                        <span class="text-icon-1">Phone</span>
                    </div>
                    <br>
                    <div class="device-list">

                        <span class="text-icon-1">Tablet</span>
                    </div>
                </div>
            </div>

            <div>
                <input class="tab-input" type="radio" name="radiotab" id="tab-3" />

                <div class="label" onclick="basicm()">
                    <label class="tab-label text-table-head" for="tab-3">Basic</label>
                </div>

                <div class="content-list">
                    <p class="text-content pricemonth">₹200</p>
                    <p class="text-content priceyear">₹2000</p>
                    <p class="text-content">Good</p>
                    <p class="text-content">720p</p>
                    <div class="device-list">

                        <span class="text-icon-1">Phone</span>
                    </div>
                    <br>
                    <div class="device-list">

                        <span class="text-icon-1">Tablet</span>
                    </div>
                    <br>
                    <div class="device-list">

                        <span class="text-icon-1">Computer</span>
                    </div>
                    <br>
                    <div class="device-list">

                        <span class="text-icon-1">TV</span>
                    </div>
                </div>
            </div>

            <div>
                <input class="tab-input" type="radio" name="radiotab" id="tab-4" />

                <div class="label" onclick="standardm()">
                    <label class="tab-label text-table-head" for="tab-4">Standard</label>
                </div>

                <div class="content-list">
                    <p class="text-content pricemonth">₹500</p>
                    <p class="text-content priceyear">₹5000</p>
                    <p class="text-content">Better</p>
                    <p class="text-content">1080p</p>
                    <div class="device-list">

                        <span class="text-icon-1">Phone</span>
                    </div>
                    <br>
                    <div class="device-list">

                        <span class="text-icon-1">Tablet</span>
                    </div>
                    <br>
                    <div class="device-list">

                        <span class="text-icon-1">Computer</span>
                    </div>
                    <br>
                    <div class="device-list">

                        <span class="text-icon-1">TV</span>
                    </div>
                </div>
            </div>

            <div>
                <input class="tab-input" type="radio" name="radiotab" id="tab-5" checked />

                <div class="label" onclick="Premiumm()">
                    <label class="tab-label text-table-head" for="tab-5">Premium</label>
                </div>

                <div class="content-list">
                    <p class="text-content pricemonth">₹700</p>
                    <p class="text-content priceyear">₹7000</p>
                    <p class="text-content">Best</p>
                    <p class="text-content">4K+HDR</p>
                    <div class="device-list">

                        <span class="text-icon-1">Phone</span>
                    </div>
                    <br>
                    <div class="device-list">

                        <span class="text-icon-1">Tablet</span>
                    </div>
                    <br>
                    <div class="device-list">

                        <span class="text-icon-1">Computer</span>
                    </div>
                    <br>

                    <div class="device-list">

                        <span class="text-icon-1">TV</span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <form action="">
            <button class="btn-plan margin-inline margin-top-3" type="submit" value="submit">Next</button>
        </form>



        <script>
            let month = document.getElementsByClassName("month")[0];
            let year = document.getElementsByClassName('year')[0];
            let monthAmount = document.getElementsByClassName('pricemonth');
            let yearAmount = document.getElementsByClassName('priceyear');

            // let mob=document.getElementById("mob");
            function testm() {
                window.location.assign('https://buy.stripe.com/test_28o7tF9oU2tr1IQ6oo');
            }

            function basicm() {
                window.location.assign('https://buy.stripe.com/test_4gw8xJ58E4Bzafm9AB');
            }

            function standardm() {
                window.location.assign('https://buy.stripe.com/test_14keW79oUd852MU5km');
            }

            function Premiumm() {
                window.location.assign('https://buy.stripe.com/test_4gw29lgRmd8587e4gj');
            }

            year.onclick = () => {

                year.classList.add('active');

                month.classList.remove('active');
                for (var i = 0; i < monthAmount.length; i++) {
                    monthAmount[i].style.display = "none";
                }
                for (var i = 0; i < yearAmount.length; i++) {
                    yearAmount[i].style.display = "block";
                }



            }

            month.onclick = () => {


                year.classList.remove('active');
                month.classList.add('active');

                for (var i = 0; i < monthAmount.length; i++) {
                    monthAmount[i].style.display = "block";
                }
                for (var i = 0; i < yearAmount.length; i++) {
                    yearAmount[i].style.display = "none";
                }
            };
        </script>

        <div class="line">

        </div>

        </footer>
</body>

</html>