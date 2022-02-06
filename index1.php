<?php
include("php/dbconnect.php");


?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Portal</title>


    <link href="css/bootstrap.css" rel="stylesheet" />

    <link href="css/font-awesome.css" rel="stylesheet" />

    <link href="css/basic.css" rel="stylesheet" />

    <link href="css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>


        <div id="" class="container">
            <div>
                <div class="row">
                    <div class="col-md-10">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <h2 style="text-color:white;"> Welcome to <strong>PAYMENT BILLING SYSTEM</strong> </h2>

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">

				  <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="student1.php">
                                <i class="fa fa-users fa-5x"></i>
                                <h5>Students</h5>
                            </a>
                        </div>
                    </div>




                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="fees1.php">
                                <i class="fa fa-usd fa-5x"></i>
                                <h5>Take Fees</h5>
                            </a>
                        </div>
                    </div>


					 <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="report1.php">
                                <i class="fa fa-file-text fa-5x"></i>
                                <h5>Fees details</h5>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-4">
                        <a href="home.html" class="btn btn-danger" style="width:200px;margin:20px;padding:20px;font-size:2rem;"><i class="fa fa-power-off "></i> Logout</a>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <div id="footer-sec" style="position:absolute;bottom:0px;width:100%;">
       SS INSTITUTION |
    </div>

   <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/custom1.js"></script>



</body>
</html>
