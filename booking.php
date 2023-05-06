<!DOCTYPE html>
<html lang="en">
<head>
<title>Taxi Cab Transportation Category Flat Bootstrap Responsive Website Template | Booking :: W3layouts</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Taxi Cab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	
	<!-- Stylesheet -->
	<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="css/jquery-ui.css" />

	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>
<!-- whatsapp icon -->
<a target="_blank" href="https://api.whatsapp.com/send?phone=918160425590&text=Hi, I am interested in your product/service. Please provide more details." class="whatsapp-button"><i class="fab fa-whatsapp"></i></a>

<!--/banner-->
<div class="top-bar_sub_w3layouts container-fluid">
		<div class="row">
			
			<div class="col-md-4 col-sm-6 log-icons mt-2">
				<p class="py-2"><i class="fas fa-phone"></i> Call Taxi : 12(00) 123 1234</p>
			</div>
			
			<div class="col-md-4 col-sm-6 logo">
				<a class="navbar-brand" href="index.php">
					<i class="fas fa-taxi"></i> Taxi Cab</a>
			</div>
			
			
			<div class="col-md-4 top-forms mt-md-3 mt-2 mb-md-0 mb-3">
				<span class="mx-lg-4 mx-md-2  mx-1">
					<a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
						<i class="fas fa-lock"></i> Sign In</a>
				</span>
				<span>
					<a href="#" data-toggle="modal" data-target="#exampleModal1" >
						<i class="fas fa-user"></i> Register</a>
				</span>
			</div>
		</div>
	</div>
	
	<div class="banner" id="home">
		<!-- header -->
		<header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item">
							<a class="nav-link ml-lg-0" href="index.html">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.php">Services</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="booking.php">Booking</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Dropdown
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item text-center" href="about.html">About</a>
								<a class="dropdown-item text-center" href="services.html">Services</a>

							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
	</div>
	<!-- //banner -->
	<!-- Booking -->
<section class="bookingform py-5">
	<div class="container py-md-5 py-3">
		<h1 class="heading text-capitalize text-center">Booking form</h1>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row">
			<div class="col-lg-6 book-appointment p-sm-5 py-5 px-4">
				<h2>Personal Details</h2>
				<div class="book-agileinfo-form">
					<form action="#" method="post">
						<div class="row main-agile-sectns">
							<div class="col-md-6 agileits-btm-spc form-text1">
								<input type="text" name="Name" placeholder="Full Name" required="">
							</div>
							<div class="col-md-6 agileits-btm-spc form-text2">
								<input type="text" name="Phone no" placeholder="Phone number" required="">
							</div>
						</div>
						<div class="row ">
							<div class="col-md-6 agileits-btm-spc form-text1">
								<input type="email" name="email" placeholder="Email" required="">
							</div>
							<div class="col-md-6">
								<div class="agileits-btm-spc">
									<select id="cab" onchange="change_country(this.value)" class="frm-field required sect">
										<option value="">Select Cab</option>
										<option value="">Mini</option>
										<option value="">Sedan</option>
										<option value="">Elite</option>
									</select>
								</div>
							</div>
						</div>
						<div class="clear"></div>
						<h2 class="sub-head-w3ls">Booking Details</h2>
						<div class="row main-agile-sectns">
							<div class="col-md-6 agileits-btm-spc form-text1">
								<input id="datepicker" name="Text" type="text" placeholder="Pick-up Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
									required="">
							</div>
							<div class="col-md-6 agileits-btm-spc form-text2">
								<input type="text" id="timepicker" name="Time" class="timepicker form-control" placeholder="Pick-up Time" value="">
							</div>
						</div>
						<div class="row main-agile-sectns">
							<div class="col-md-6 agileits-btm-spc form-text1">
								<input type="text" name="Pick-up Location" placeholder="Pick-up Location" required="">
							</div>
							<div class="col-md-6 agileits-btm-spc form-text2">
								<input type="text" name="Drop-off Location" placeholder="Drop-off Location" required="">
							</div>
						</div>

						<div class="main-agile-sectns">
							<div class="agileits-btm-spc">
								<select id="passengers" onchange="change_country(this.value)" class="frm-field required sect">
									<option value="">No.of Passengers</option>
									<option value="">1</option>
									<option value="">2</option>
									<option value="">3</option>         
									<option value="">4</option>
									<option value="">5</option>
								</select>
							</div>
							<div class="agileits-btm-spc form-text2">
								<select id="direction" onchange="change_country(this.value)" class="frm-field required">
									<option value="">Direction</option>
									<option value="">One Way</option>
									<option value="">Return</option>       
								</select>
							</div>
						</div>
						<input type="submit" value="Book Now">
						<input type="reset" value="Reset">
					</form>
				</div>
			</div>
			<div class="col-lg-6 mt-md-5">
				<img src="images/car1.png" alt="" class="img-fluid" />
				<img src="images/car2.png" alt="" class="img-fluid" />
			</div>
		</div>
	</div>
</section>	
<!-- //Booking -->
</body>
</html>
	
<?php
include "footer.php";
?>