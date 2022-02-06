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
		<div class="signup-bg set-bg" data-setbg="img/bg.jpg"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="signup-warp">
						<div class="section-title text-white text-left">
							<h2>Enter data of an Employee</h2>
							<p>New Employeer's entry can be done from here. Fill all the details carefully.</p>
						</div>
						<form class="signup-form" method="POST" action="signup-suc-emp.php">	
							<input type="text" placeholder="Employee Name" name="username">
							<input type="password" placeholder="Your Password" style="
								height: 57px;
								width: 100%;
								padding: 0 30px;
								margin-bottom: 27px;
								float: left;
								border: none;
								font-size: 14px;
								font-weight: 500;
								background: #edf4f6;"
							name="password">
							<input type="text" placeholder="Phone no" name="phone">
							<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GENDER: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="gender" placeholder="Male"> Male
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="gender" placeholder="female"> Female </p>
							<input type="text" name="branch" placeholder="Branch">
							<input type="text" name="course" placeholder="Qualification">
							<input type="submit" value="Upload" class="site-btn">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</html>