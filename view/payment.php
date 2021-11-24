<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Cool Shop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- font Awesome Cdn -->
    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Owl Carousel File -->
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">

    <!-- CSS File -->
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/payment.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <div class="super_container">


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
                                    <li><a href="../Logout/login.php"><i class="fa fa-sign-out" arial-hidden="true"></i></a></li>
                                    <li><a href="../Login/login.php"><i class="fa fa-user" arial-hidden="true"></i></a></li>
                                    <li class="checkout">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span id="checkout_item" class="checkout_items"></span>
                                        </a>
                                    </li>
                                </ul>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		<br>
		<br>
		<br>
		<br>
		<br>
<br>
<?php
require('../Controllers/cart_controller.php');
$amt = getTotalItemAmountInCart();
$amount = $amt['amount'];

?>
<!-- form -->
<div id="page-main">
    <div id="form">
    <h2>Payment Form</h2>
    <div id="form-area">
        <form id="form">
            <div class="field-group">
			<label for="email">Email</label>
			<input type="email" id="email-address" required />
            </div>

            <div class="field-group">
			<label for="amount">Amount</label>
			<input type="tel" value=<?php echo $amount?> id="amount" required />
            </div>
			<div class="form-submit">
            <button id="next" type="submit" name="btn" value="submit" onclick="payWithPaystack()">Pay</button>
			</div>
		</form>
    </div>
</div>
<br>
<p>All payment details are encrypted. Be rest assured that your details are safe.<p>

	
<!-- PAYSTACK INLINE SCRIPT -->
<script src="https://js.paystack.co/v1/inline.js"></script> 

<script>
const paymentForm = document.getElementById('form');
paymentForm.addEventListener("submit", payWithPaystack, false);

// PAYMENT FUNCTION
function payWithPaystack(e) {
	e.preventDefault();
	let handler = PaystackPop.setup({
		key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
		email: document.getElementById("email-address").value,
		amount: document.getElementById("amount").value * 100,
		currency:'GHS',
		onClose: function(){
		alert('Window closed.');
		},
		callback: function(response){
			window.location = `../Action/process_payment.php?email=${document.getElementById("email-address").value}&amount=${document.getElementById("amount").value}&reference=${response.reference}`
		}
	});
	handler.openIframe();
}

</script>

</body>
</html>




