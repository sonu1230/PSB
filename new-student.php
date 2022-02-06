<!DOCTYPE html>
<html lang="en">
<head>
	<title>SS INSTITUTION</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
	<link href="img/favicon.ico" rel="shortcut icon"/>


	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">


	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>

</head>
<body>

	<section class="signup-section spad">
		<div class="signup-bg set-bg" data-setbg="img/signup-bg.jpg"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2>Enter data of a Student</h2>
							<p>New Student entry can be done from here. Fill all the details carefully.</p>
						</div>

						<form class="signup-form" method="POST" action="signup-suc.php">
							<input type="text" placeholder="Id" name="id">	
							<input type="text" placeholder="Student name" name="username">
							<input type="text" placeholder="Course" style="
								height: 57px;
								width: 100%;
								padding: 0 30px;
								margin-bottom: 27px;
								float: left;
								border: none;
								font-size: 14px;
								font-weight: 500;
								background: #edf4f6;"
							name="course">
							<input type="text"  style="
								height: 57px;
								width: 100%;
								padding: 0 30px;
								margin-bottom: 27px;
								float: left;
								border: none;
								font-size: 14px;
								font-weight: 500;
								background: #edf4f6;" placeholder="Phone" name="phone">
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; GENDER: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="gender" placeholder="Male"> Male
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="gender" placeholder="female"> Female </p>
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; FEES: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="paid"> Paid
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="paid"> Not Paid </p>
							<input type="text" name="branch" placeholder="Branch">
							<input type="submit" value="Upload" class="site-btn">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</html>