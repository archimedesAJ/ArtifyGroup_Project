
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
        <link rel="stylesheet" type="text/css" href="../styles/style1.css">




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
										<li><a href="contact.php">Contact</a></li>
									</ul>
									<ul class="navbar_user">
										<li><a href="../Logout/logout.php"><i class="fa fa-sign-out" arial-hidden="true"></i></a></li>
										<li><a href="login.php"><i class="fa fa-user" arial-hidden="true"></i></a></li>
										<li class="checkout">
											<a href="cart.php">
												<i class="fa fa-shopping-cart" aria-hidden="true"></i>
												<span id="checkout_item" class="checkout_items"><?php print_r(getTotalItemsInCart())?></span>
											</a>
										</li>
									</ul>
								

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
						<li class="menu_item"><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>
			
			<!-- Slider -->
			<div class="main_slider" style="background-image: url(../sample/art35.jpg);">
				<div class="container fill_hight">
					<div class="row align-items-center fill_hight">
						<div class="col">

						</div>
					</div>
				</div>

			</div>
            
            <div class="about-section">
        <div class="inner-width">
          <h4>Quality arts and Products at affordable prices</h4>
          <div class="border"></div>
          <div class="about-section-row">
            <div class="about-section-col">
              <div class="about">
                <ul>
                    <li><b>Quality Painting</b></li>
                    <li><b>Crafts</b></li>
                    <li><b>Quality View</b></li>
                    <li><b>Fine Texture</b></li>
                    <li><b>Extraordinary Colors</b></li>
                    <li><b>Elegant design</b></li>
                </ul>

              
              </div>
            </div>
            <div class="about-section-col">
              <div class="skills">
                <ol>
                    <li class=""><a href="#">We can design art based on your specification</a></li>
                    <li class=""><a href="#">Your payment data is well encrypted</a></li>
                    <li class=""><a href="#">We offer discounts and giveaways</a></li>
                    <li class=""><a href="#">You support our local artist anytime you buy from us</a></li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
          
            <div class="wrapper">
                <h1>Our Team</h1>
                <div class="our_team">
                    <div class="team_member">
						<div class="icon">
							<i class="fa fa-car"></i>
						</div>
                    <h3>Timely Delivery</h3>
                    <p>We deliver all products at right time and right place.</p>
                    </div>
                    <div class="team_member">
                      <div class="icon">
					    <i class="fa fa-gift"></i>
                    </div>
                    <h3>Best Offers</h3>
                    <p>We have got great offers for customers and offices that buy in bulk</p>
                   </div>
                    <div class="team_member">
                    	<div class="icon">
					   		<i class="fa fa-diamond"></i>
                    </div>
                    <h3>Quality Arts</h3>
                    <p>Our products are of high quality and always designed to suit the customers' need</p>
                    </div>
                    <div class="team_member">
                    <div class="icon">
						<i class="fa fa-lock"></i>
                    </div>
                    <h3>Secure Payments</h3>
                    <p>Your payment details are highly encrypted to safeguard from being hacked</p>
                </div>  
                </div>
            </div>
			<div class="container">
			       <div class="section_title">
						<h2>Meet our Team</h2>
					</div>

				<div class="profiles">
				<div class="profile">
					<img src="../sample/img1.jpg" class="profile-img">

					<p class="user-name">Abraham Abbey </p>
					<h5></h5>
					
				</div>
				<div class="profile">
					<img src="../sample/img2.jpg" class="profile-img">

					<p class="user-name">Vanessa Bedzra</p>
					<h5></h5>
					
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

		<!-- Footer  timestamp-->

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