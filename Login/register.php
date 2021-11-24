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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
		<!-- Owl Carousel File -->
		<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">

		<!-- CSS File -->
		<link rel="stylesheet" type="text/css" href="../styles/style.css">
		<!--<link rel="stylesheet" type="text/css" href="styles/style1.css">-->
		<link rel="stylesheet" type="text/css" href="../styles/style2.css">

		<!-- Script: jQuery && Parsley-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="http://parsleyjs.org/dist/parsley.js"></script>

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
										<li><a href="../product.php">Products</a></li>
										<li><a href="../about.php">About Us</a></li>
										<li><a href="../contact.php">Contact</a></li>
									</ul>
									<ul class="navbar_user">
										<li><a href="#"><i class="fa fa-search" arial-hidden="true"></i></a></li>
										<li><a href="login.php"><i class="fa fa-user" arial-hidden="true"></i></a></li>
										<li class="checkout">
											<a href="#">
												<i class="fa fa-shopping-cart" aria-hidden="true"></i>
												<span id="checkout_item" class="checkout_items"></span>
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
						<li class="menu_item"><a href="index.php">Home</a></li>
						<li class="menu_item"><a href="product.php">Products</a></li>
						<li class="menu_item"><a href="about.php">About Us</a></li>
						<li class="menu_item"><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>

		</div>	
		<br>
       <!--
		<div class="body1">
			<div class="signup-box">
				<h1>Sign Up</h1>
				<h4>Create an account</h4>
				<form action="" method="post" id="validate_form" >
					<label>Full Name</label>
					<input type="text" name="name" placeholder="Name" id="name" required pattern="/^[a-zA-Z]+$/"/>
					<label>Email</label>
					<input type="text" name="email" id="email" placeholder="Email" />
					<label>Password</label>
					<input type="password"  name="password" id="password" minlength="6" maxlength="18" placeholder="" required/>
					<label>Confirm Password</label>
					<input type="password" name="confirm_password" id="confirm_password" placeholder="" required
							data-parsley-error-message="Password not matched!"/>
					<label>Country</label>
					<input type="text" name="country" placeholder="Country" />
					<label>City</label>
					<input type="text" name="city" placeholder="City" />
					<label>Contact</label>
					<input type="text" placeholder="Contact" />
					<input type="text" name="add_btn"  id="submit"value="Submit" />
				</form>

				<p>
					By clicking the Sign Up button,you agree to our <br />
					<a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
				</p>
			</div>
			<p class="para-2">
			   Already have an account? <a href="login.php">Login here</a>
			</p>
        </div>
        -->
	<div class="container">  
    <br />  
    <br />
   <br />
   <div class="table-responsive">  
    <div class="box">
	<h4>SIGN UP</h4>
     <form action="../Action/registerprocess.php" id="validate_form" method="post">
        <div class="form-group">
         <label>Full Name</label>
         <input type="text" name="full_name" id="full_name" placeholder="Enter Full Name" required data-parsley-pattern="/(^[A-Za-z]{3,16})([ ]{0,1})([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})?([ ]{0,1})?([A-Za-z]{3,16})/" data-parsley-trigger="keyup" class="form-control" />
        </div>
      <div class="form-group">
       <label for="email">Email</label>
       <input type="text" name="email" id="email" placeholder="Email" required data-parsley-type="email" data-parsley-pattern="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,10})+$/" data-parsley-trigger="keyup" class="form-control" />
      </div>

      <div class="form-group">
       <label for="password">Password</label>
       <input type="password" name="password" id="password" placeholder="Password" required data-parsley-length="[8, 16]" data-parsley-trigger="keyup" class="form-control" />
      </div>

      <div class="form-group">
       <label for="cpassword">Confirm Password</label>
       <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password"data-parsley-equalto="#password" data-parsley-trigger="keyup" required class="form-control" />
      </div>

	  <div class="form-group">
       <label for="contact">Contact</label>
       <input type="text" id="contact" name="contact" placeholder="Contact" required data-parsley-pattern="/\+?\d{6,15}$/" data-parsley-trigger="keyup" class="form-control" />
      </div>

	  <div class="row">
		<div class="col-xs-6">
		<div class="form-group">
			<label for="country">Country</label>
			<input type="text" id="country" name="country" placeholder="Country" required data-parsley-trigger="keyup" class="form-control" />
		</div>
		</div>
		
		<div class="col-xs-6">
	    <div class="form-group">
       		<label for="country">City</label>
       		<input type="text" id="city" name="city" placeholder="City" required data-parsley-trigger="keyup" class="form-control" />
	    </div>
	    <div>
      </div>
    </div>
    <div class="col-xs-6">
    <div class="form-group">
       <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success" />
    </div>
    </div>
	
    <div class="checkbox">
        <label><p>Already have an account? <a style="color: #49c1a2" href="login.php">Login here</a></p></label>
    </div>
    </form>
    </div>
   </div> 
</div> 
  	</body>
</html>

<!--Activating parsley js-->
<script>
$(document).ready(function(){
	$('#validate_form').parsley();
});  
</script>
