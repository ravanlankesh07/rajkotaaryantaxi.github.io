<!DOCTYPE html>
<html lang="en">
<head>
<title>Rajkot Aaryan Taxi</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	<meta name="keywords" content="Taxi Service, Taxi Service In Rajkot, Rajkot Taxi Services" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<style>
        .whatsapp-button {
  position: fixed;
  bottom: 15px;
  right: 15px;
  z-index: 99;
  background-color: #25d366;
  border-radius: 50px;
  color: #ffffff;
  text-decoration: none;
  width: 50px;
  height: 50px;
  font-size: 30px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  -webkit-box-shadow: 0px 0px 25px -6px rgba(0, 0, 0, 1);
  -moz-box-shadow: 0px 0px 25px -6px rgba(0, 0, 0, 1);
  box-shadow: 0px 0px 25px -6px rgba(0, 0, 0, 1);
  animation: effect 5s infinite ease-in;
}

@keyframes effect {
  20%,
  100% {
    width: 50px;
    height: 50px;
    font-size: 30px;
  }
  0%,
  10% {
    width: 55px;
    height: 55px;
    font-size: 35px;
  }
  5% {
    width: 50px;
    height: 50px;
    font-size: 30px;
  }
}

        .my-float {
            margin-top: 16px;
        }
    </style>
    
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
	<script src="https://kit.fontawesome.com/1cf483120b.js" crossorigin="anonymous"></script>

</head>
<body>
    <!--/banner-->
	<div class="top-bar_sub_w3layouts container-fluid">
		<div class="row">
			
			<div class="col-md-4 col-sm-6 log-icons mt-2">
				<p class="py-2"><i class="fas fa-phone"></i> <a href="tel:+918160425590"> Call US : +91 81604 25590</a></p>
			</div>
			
			<div class="col-md-4 col-sm-6 logo">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo.png" height="80" width="80">
					</a>
			</div>
			
			
			<div class="col-md-4 col-sm-6 log-icons mt-2">
				<p class="py-2"><i class="fas fa-envelope"></i><a href="mailto:rajkotaaryantaxi@gmail.com">Email : rajkotaaryantaxi@gmail.com</a></p>
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
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.php">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
		<!-- banner-text -->

        <!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 2,
						nav: false
					},
					1000: {
						items: 3,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->

	<!--slider-->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			// Slideshow 1
			$("#slider1").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 500,
				namespace: "centered-btns"
			});
		});
	</script>
	<!--//slider-->

	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->
</body>
</html>