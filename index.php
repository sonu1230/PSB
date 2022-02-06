<?php
include("php/dbconnect.php");

?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin portal</title>


    <link href="css/bootstrap.css" rel="stylesheet" />

    <link href="css/font-awesome.css" rel="stylesheet" />

    <link href="css/basic.css" rel="stylesheet" />

    <link href="css/custom.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>

<?php
include("php/header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                        <h2 class="text-white"> Welcome to <strong>Payment Billing System</strong> </h2>

                    </div>
                </div>

                <div class="row">

				  <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="student.php">
                                <i class="fa fa-users fa-5x"></i>
                                <h5>Students</h5>
                            </a>
                        </div>
                    </div>




                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="employee.php">
                                <i class="fa fa-users fa-5x"></i>
                                <h5>Employee</h5>
                            </a>
                        </div>
                    </div>


					 <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="branch.php">
                                <i class="fa fa-university fa-5x"></i>
                                <h5>Branches</h5>
                            </a>
                        </div>
                    </div>


                </div>



            </div>
           
        </div>
            </div>
    

    <div id="footer-sec">
       School Fees Payment System | Brought To You By : <a href="http://code-projects.org/" target="_blank">Code-Projects</a>
    </div>

   <script src="js/jquery-1.10.2.js"></script>
    
    <script src="js/bootstrap.js"></script>
    
    <script src="js/jquery.metisMenu.js"></script>
       
    <script src="js/custom1.js"></script>



</body>
</html>
