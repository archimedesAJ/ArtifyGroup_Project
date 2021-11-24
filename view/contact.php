<?php
require_once '../Controllers/product_controller.php';
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Contact</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Colo Shop Template">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- font Awesome Cdn -->
		<script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>

		<!-- Bootstrap cdn -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
			integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

		<!-- Owl Carousel File -->
		<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">

		<!-- CSS File -->
		<link rel="stylesheet" type="text/css" href="../styles/style.css">


	</head>

	<body>

		<div class="super_container">

			<!-- Header -->

			<header class="header trans_300">

				<!-- main Navigation -->

				<div class="main_nav_container">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-right">
								<div class="logo_container">
									<a href="#">Artify <span>Shop</span></a>
								</div>
								<nav class="navbar">
									<ul class="navbar_menu">
										<li><a href="../index.php">Home</a></li>
										<li><a href="Allproduct.php">Products</a></li>
										<li><a href="about.php">About Us</a></li>
										<li><a href="#">Contact</a></li>
									</ul>
									<ul class="navbar_user">
										<li><a href="../Logout/logout.php"><i class="fa fa-sign-out" arial-hidden="true"></i></a></li>
										<li><a href="../Login/login.php"><i class="fa fa-user" arial-hidden="true"></i></a></li>
										<li class="checkout">
											<a href="#">
												<i class="fa fa-shopping-cart" aria-hidden="true"></i>
												<span id="checkout_item" class="checkout_items"><?php print_r(getTotalItemsInCart())?></span>
											</a>
										</li>
									</ul>
									<!--hamburger 2:33:10-->

									<div class="hamburger_container">
										<i class="fa fa-bars" aria-hidden="true"></i>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="fs_menu_overlay"></div>
			<div class="hamburger_menu">
				<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
				<div class="hamburger_menu_content text-right">
					<ul class="menu_top_nav">
						<li class="menu_item"><a href="../index.php">Home</a></li>
						<li class="menu_item"><a href="product.php">Products</a></li>
						<li class="menu_item"><a href="about.php">About Us</a></li>
						<li class="menu_item"><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
			
			<!-- Slider -->
			<div class="main_slider" style="background-image: url(../sample/art34.jpg);">
				<div class="container fill_hight">
					<div class="row align-items-center fill_hight">
						<div class="col">
							<div class="main_slider_content">
								<h6>Contact Us</h6>
								<h2>We would be very glad to get in touch with you!</h2>
							
							</div>
						</div>
					</div>
				</div>

			</div>

            <div class="deal_ofthe_week">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
                        <div><i class="fas fa-map-marker-alt"></i>Ashesi University, Berekuso, Ghana</div>
                            <div><i class="fas fa-envelope"></i>info.artify@outlook.com</div>
                            <div><i class="fas fa-phone"></i>+233245176247</div>
                            <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 9:00 PM</div>                       
							
						</div>
						<div class="col-lg-6 text-right deal_ofthe_week_col">
							<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
								<div class="section_title">
									<h4>Send us a message</h4>
                                </div>
                                <form method="post" action="#" name="myform"  >

                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Full Name" id="name" name="name" >
                                        
                                    </div>

                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email" id="email" name="email" >
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    
                                    <div class="form-group">
                                       <textarea class="form-control" id="desc" placeholder="Type your message" rows="5" cols="50"></textarea>
                                    </div>
                                    <input type="submit" id="btn" value="Submit" name="submitbtn">
                                </form>
                            </div>
                        </div> 
                    </div>       
                </div>
            </div>

			<!-- Newsletter  timestamp=2:10:55-->
			
			<div class="newsletter">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="newsletter_text d-flex flex-column justify-content-center 
								align-items-lg-start align-items-md-center text-center">
								<h4>Artify Shop</h4>
								<p>Subscribe to Our Newsletter</p>
							</div>
						</div>
						<div class="col-lg-6">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row fex-column flex-xs-column 
								align-items-center justify-content-lg-end justify-content-center">
									<input id="newsletter_email" type="email" placeholder="Your Email" required="required"
									data-error="valid email is required">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300"
									value="submit">Subscribe</button>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer  timestamp=2:22:11-->

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="footer_nav_container d-flex flex-sm-row flex-column 
						align-items-center justify-content-lg-start justify-content-center text-center">
							<ul class="footer_nav">
								<li><a href="#">Blog</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="footer_nav-container">
							<div class="cr">©2021 All Right Reserved.
								
							</a></div>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- Bootstrap JS CDN -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
			integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
			crossorigin="anonymous"></script>
		<!-- jquery JS File -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<!-- Isotope JS File -->
		<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
		<!-- Owl Carousel JS File -->
		<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
		<!-- Javascript File -->
		<script src="js/custom.js"></script>
	</body>

</html>