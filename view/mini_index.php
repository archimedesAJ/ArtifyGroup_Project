<?php

session_start();
require('./settings/core.php');
require __DIR__.'/controllers/session.php';


?>




<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Cool Shop</title>
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
		<link rel="stylesheet" type="text/css" href="styles/style.css">

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
										<li><a href="#">Home</a></li>
										<li><a href="view/Allproduct.php">Products</a></li>
										<li><a href="view/about.php">About Us</a></li>
										<li><a href="view/contact.php">Contact</a></li>
										
									</ul>
									<ul class="navbar_user">
										<li>
											
										 <a href="#"><i class="fa fa-search" arial-hidden="true"></i></a>
										</li>
										<li><a href="Login/login.php"><i class="fa fa-user" arial-hidden="true"></i></a></li>
										<li class="checkout">
											<a href="view/cart.php">
												<i class="fa fa-shopping-cart" aria-hidden="true"></i>
												<span id="checkout_item" class="checkout_items"><?= Session::getCartCount() ?></span>
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
						<li class="menu_item"><a href="#">Home</a></li>
						<li class="menu_item"><a href="view/Allproduct.php">Products</a></li>
						<li class="menu_item"><a href="view/about.php">About Us</a></li>
						<li class="menu_item"><a href="view/contact.php">Contact</a></li>
						<li class="menu_item"><a href="admin/login.php">Admin</a></li>
					</ul>
				</div>
			</div>
			
			<!-- Slider -->
			<div class="main_slider" style="background-image: url(sample/art.jpg);">
				<div class="container fill_hight">
					<div class="row align-items-center fill_hight">
						<div class="col">
							<div class="main_slider_content">
								<h6>Enriching Ghana's Culture</h6>
								<h2>Home of Affordable aesthetic arts and paintings</h2>
								<div class="red_button shop_now_button"><a href="#">Shop now</a></div>
							</div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Banner -->

			<div class="banner">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="banner_item align-item-center" style="background-image: url(sample/art9.PNG);">
								<div class="banner_category">
									<a href="#">Most Loved Artwork</a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="banner_item align-item-center" style="background-image: url(sample/art11.PNG);">
								<div class="banner_category">
									<a href="#">Art of the week</a>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="banner_item align-item-center" style="background-image: url(sample/art27.PNG);">
								<div class="banner_category">
									<a href="#">Most reviewed art</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<!-- New Arrivals -->
			<div class="new_arrivals">
				<div class="container">

					<div class="row">
						<div class="col text-center">
							<div class="section-title new_arrivals_title">
								<h2>New Arrivals</h2>
							</div>
						</div>
					</div>

					<div class="row align-items-center">
						<div class="col text-center">
							<div class="new_arrivals_sorting">

								<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
									<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" 
										data-filter="*">all</li>
									<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" 
										data-filter=".gallery">Gallery</li>
									<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" 
										data-filter=".center">Aburi Art Center</li>
									<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" 
										data-filter=".museum">Museum</li>

								</ul>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows"}'>

								
								
								<div class="product-item gallery">
									<div class="product product_filter">
										<div class="product_image">
											<img src="sample/art17.PNG" alt="product_3">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="#">Power</a></h6>
											<div class="product_price">GHC 1500</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
									</div>
								</div>

								
								<!-- Product 3-->
								<div class="product-item center">
									<div class="product product_filter">
										<div class="product_image">
											<img src="sample/art31.PNG" alt="product_7">
										</div>
										<div class="favorite"></div>
										
										<div class="product_info">
											<h6 class="product_name"><a href="#">Meaning</a></h6>
											<div class="product_price">GHC 600</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
									</div>
								</div>

								<!-- Product 5-->
								<div class="product-item center">
									<div class="product product_filter">
										<div class="product_image">
											<img src="sample/art30.PNG" alt="product_1">
										</div>
										<div class="favorite"></div>

										<div class="product_info">
											<h6 class="product_name"><a href="#">Diaspora</a></h6>
											<div class="product_price">GHC 180</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
									</div>
								</div>


									<!-- Product 4-->
								<div class="product-item museum">
									<div class="product product_filter">
										<div class="product_image">
											<img src="sample/art32.PNG" alt="product_8">
										</div>
										<div class="favorite"></div>
										
										<div class="product_info">
											<h6 class="product_name"><a href="#">Through The Eye</a></h6>
											<div class="product_price">GHC 6000</div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
									</div>
								</div>

								<!-- Product 2-->
								<div class="product-item museum">
									<div class="product discount product_filter">
										<div class="product_image">
											<img src="sample/art33.PNG" alt="product_6">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
											<span>-%30</span>
										</div>
										<div class="product_info">
											<h6 class="product_name"><a href="#">Proud African Woman</a></h6>
											<div class="product_price">GHC 3000<span> GHC 5000</span></div>
										</div>
										<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- Deal of the week  timestamp:1:20:20-->
			
			<div class="deal_ofthe_week">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="deal_ofthe_week_img">
								<img src="sample/art10.PNG" alt="">
							</div>
						</div>
						<div class="col-lg-6 text-right deal_ofthe_week_col">
							<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
								<div class="section_title">
									<h2>Deal Of The Week</h2>
								</div>
								<ul class="timer">
									<li class="d-inline-flex flex-column justify-content-center align-items-center">
										<div id="day" class="timer_num">03</div>
										<div class="timer_unit">Day</div>
									</li>
									<li class="d-inline-flex flex-column justify-content-center align-items-center">
										<div id="hour" class="timer_num">15</div>
										<div class="timer_unit">Hours</div>
									</li>
									<li class="d-inline-flex flex-column justify-content-center align-items-center">
										<div id="minute" class="timer_num">45</div>
										<div class="timer_unit">Minutes</div>
									</li>
									<li class="d-inline-flex flex-column justify-content-center align-items-center">
										<div id="second" class="timer_num">23</div>
										<div class="timer_unit">Second</div>
									</li>
								</ul>
	
								<div class="red_button deal_ofthe_week_button"><a href="#">Add to Cart</a></div>
							</div>
						</div>	
					</div>
					
				</div>
			</div>

			<!-- Featured--> 

			<div class="best_sellers">
				<div class="container">
					<div class="row">
						<div class="col text-center">
							<div class="section_title new_arrivals_title">
								<h2>Our Featured Arts and Painting</h2>
							</div>
						</div>
					</div>	
				
					<div class="row">
						<div class="col">
							<div class="product_slider_container">
								<div class="owl-carousel owl-theme product_slider">

									<!-- slide 1-->
									<div class="owl-item product_slider_item">
										<div class="product-item men">
											<div class="product discount product_filter">
												<div class="product_image">
													<img src="sample/art6.PNG" alt="product_1">
												</div>
												<div class="favorite favorite_left"></div>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
													<span>sale</span>
												</div>
												<div class="product_info">
													<h6 class="product_name"><a href="#">Paint of Donald Trump</a></h6>
													<div class="product_price">Ghc9000<span> GHC10,000</span></div>
													<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
												</div>
												
											</div>
										</div>
									</div>

									<!-- Slide 2-->
									<div class="owl-item product_slider_item">
										<div class="product-item women">
											<div class="product product_filter">
												<div class="product_image">
													<img src="sample/art3.PNG" alt="product_2">
												</div>
												<div class="favorite"></div>
												<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
													<span>New</span>
												</div>
												<div class="product_info">
													<h6 class="product_name"><a href="#">Egyptian Stylist Potrait</a></h6>
													<div class="product_price">GHC 20000</div>
													<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
												</div>
												
											</div>
										</div>
									</div>

									<!-- slide 3-->
									<div class="owl-item product_slider_item">
										<div class="product-item women">
											<div class="product product_filter">
												<div class="product_image">
													<img src="sample/art5.PNG" alt="product_3">
												</div>
												<div class="favorite"></div>
												<div class="product_info">
													<h6 class="product_name"><a href="#">Multi-Colored Painting</a></h6>
													<div class="product_price">GHC 15000</div>
													<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
												</div>
												
											</div>
										</div>
									</div>

									<!-- slide 4-->
									<div class="owl-item product_slider_item">
										<div class="product-item accessories">
											<div class="product product_filter">
												<div class="product_image">
													<img src="sample/art7.PNG" alt="product_4">
												</div>
												<div class="favorite favorite_left"></div>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
													<span>Sale</span>
												</div>
												<div class="product_info">
													<h6 class="product_name"><a href="#">Dispersed color paint</a></h6>
													<div class="product_price">GHC 40000</div>
													<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
												</div>
												
											</div>
										</div>
									</div>


									<!-- slide 5-->
									<div class="owl-item product_slider_item">
										<div class="product-item accessories">
											<div class="product product_filter">
												<div class="product_image">
													<img src="sample/art22.PNG" alt="product_4">
												</div>
												<div class="favorite favorite_left"></div>
												<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
													<span>Reserved</span>
												</div>
												<div class="product_info">
													<h6 class="product_name"><a href="#">Dispersed color paint</a></h6>
													<div class="product_price">Concealed For Auction</div>
													<div class="red_button add_to_cart_button"><a href="#">Add to Cart</a></div>
												</div>
												
											</div>
										</div>
									</div>

								
									
								<!-- slider navigation timestamp:1:48:40-->
								<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
									<i class="fa fas-chevron-left" aria-hidden="true"></i>
								</div>
								<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
									<i class="fa fas-chevron-right" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Benefit -->
			
			<div class="benefit">
				<div class="container">
					<div class="row benefit_row">
						<div class="col-lg-3 benefit_col">
							<div class="benefit_item d-flex flex-row align-items-center">
								<div class="benefit_icon">
									<i class="fa fa-truck" aria-hidden="true"></i>
								</div>
								<div class="benefit_content">
									<h6>Free Shipping</h6>
									<p>Use Promo code</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 benefit_col">
							<div class="benefit_item d-flex flex-row align-items-center">
								<div class="benefit_icon">
									<i class="fa fa-undo" aria-hidden="true"></i>
								</div>
								<div class="benefit_content">
									<h6>45 days return</h6>
									<p>Return Warranty</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 benefit_col">
							<div class="benefit_item d-flex flex-row align-items-center">
								<div class="benefit_icon">
									<i class="fa fa-money" aria-hidden="true"></i>
								</div>
								<div class="benefit_content">
									<h6>Cash on Delivery</h6>
									<p>Visa Mastercard, Momo, Paypal</p>
								</div>
							</div>
						</div>

						<div class="col-lg-3 benefit_col">
							<div class="benefit_item d-flex flex-row align-items-center">
								<div class="benefit_icon">
									<i class="fa fa-clock-o" aria-hidden="true"></i>
								</div>
								<div class="benefit_content">
									<h6>Operation Hours</h6>
									<p>8AM - 9PM</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

	
			
			<div class="blogs">
				<div class="container">
					<div class="row">
						<div class="col text-center">
							<div class="section_title">
								<h2>Customer Review</h2>
							</div>
						</div>
					</div>
					<div class="row blogs_container">
						<div class="col-lg-4 blog_item_col">
							<div class="blog_item">
								<div class="blog_background" style="background-image:url(sample/Old.jpg)"></div>
								<div class="blog_content d-flex flex-column align-items-center justify-items-center">
									<h4 class="blog-title">Quality arts and paintings, yet affordable. Will always choose Artify</h4>
									<span class="blog-meta">-By Dave Bryson</span>
								
								</div>
							</div>
						</div>

						<div class="col-lg-4 blog_item_col">
							<div class="blog_item">
								<div class="blog_background" style="background-image:url(sample/lady.jpg)"></div>
								<div class="blog_content d-flex flex-column align-items-center justify-items-center">
									<h4 class="blog-title">Wow! I loved the art. I am satisfied with my choice</h4>
									<span class="blog-meta">-By Hannah Smith</span>
									
								</div>
							</div>
						</div>

						<div class="col-lg-4 blog_item_col">
							<div class="blog_item">
								<div class="blog_background" style="background-image:url(sample/boy.jpg)"></div>
								<div class="blog_content d-flex flex-column align-items-center justify-items-center">
									<h4 class="blog-title">Just as quality as I ordered. My hall now looks glamorous and stunning!</h4>
									<span class="blog-meta">-By Vanessa Bedzra  </span>
									
								</div>
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