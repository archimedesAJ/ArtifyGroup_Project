<?php
require('../Database/core.php');
if (check_login()) {
  // code...
  
}else{
    header("Location: ../Login/login.php");
}
?>

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
    <link rel="stylesheet" type="text/css" href="../styles/checkout.css">


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
                                    <li><a href="../Logout/logout.php"><i class="fa fa-sign-out" arial-hidden="true"></i></a></li>
                                    <li><a href="../Login/login.php"><i class="fa fa-user" arial-hidden="true"></i></a></li>
                                    <li class="checkout">
                                       <!-- <a href="#">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span id="checkout_item" class="checkout_items"></span>
                                        </a>-->
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

        <div class="cart_section">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cart_container">
                    <div class="cart_title">Order Details</div>
                    <div class="cart_items">
                        <ul class="cart_list">
                            <li class="cart_item clearfix">
                            <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                            <div class="cart_item_name cart_info_col">
                                <div class="cart_item_title">PRODUCTS</div>
                            </div>
                            <div class="cart_item_quantity cart_info_col">
                                <div class="cart_item_title">QUANTITY</div>
                            </div>
                            <div class="cart_item_price cart_info_col">
                                <div class="cart_item_title">PRICE</div>
                            </div>
                            <div class="cart_item_price cart_info_col">
                                <div class="cart_item_title">ORDER DATE</div>
                            </div>
                            <div class="cart_item_total cart_info_col">
                                <div class="cart_item_title">SUB TOTAL</div>
                            </div>
                            </div>    
                            </li>
                        </ul>   
                    </div>




                    <div class="cart_items">
                        <ul class="cart_list">
                            <li class="cart_item clearfix">
                              <?php
                              require('../Controllers/cart_controller.php');
                              $cart = get_Cartitem();
                            ?>
                                <?php
                                    foreach($cart as $value){
                                        $total = $value['product_price']*$value['qty'];
                                      ?>
                                    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                    <div class="cart_item_name cart_info_col">
                                        <!--<div class="cart_item_title">PRODUCTS</div>-->
                                    <div class="cart_item_text"><?php echo $value['product_title']?></div>
                                    </div>

                                    <div class="cart_item_quantity cart_info_col">
                                        <!-- <div class="cart_item_title">QUANTITY</div>-->
                                        <div class="cart_item_text"><?php echo $value['qty']?></div>
                                    </div>
                                    <div class="cart_item_price cart_info_col">
                                         <!--<div class="cart_item_title">PRICE</div>-->
                                        <div class="cart_item_text"><?php echo "GHS"." ".$value['product_price']?></div>
                                    </div>

                                    <div class="cart_item_price cart_info_col">
                                          <!--<div class="cart_item_title">ORDER DATE</div>-->
                                        <div class="cart_item_text"><?php echo date('Y/m/d');?></div>
                                    </div>

                                    <div class="cart_item_total cart_info_col">
                                         <!--<div class="cart_item_title">SUB TOTAL</div>-->
                                        <div class="cart_item_text"><?php echo "GHS"." ".$total ?></div>
                                    </div>
                                    </div>
                        <?php
                         }
                        ?>
                        </div>
                    </li>
                    </ul>
                    </div>
                    <?php
		            $amt = getTotalItemAmountInCart();
		            ?>
                    <div class="order_total">
                        <div class="order_total_content text-md-right">
                            <div class="order_total_title">ORDER TOTAL:</div>
                            <div class="order_total_amount"><?php echo "GHS"." ". $amt['amount']?></div>
                        </div>
                    </div>
                    <div class="cart_buttons"> <button type="button" class="button cart_button_clear"><a href="cart.php" style="color: gray">Back to Cart</a></button> <button type="button" class="button cart_button_checkout"><a href="payment.php"> Make Payment</a></button> </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <!-- jquery JS File -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!-- Isotope JS File -->
    <script src="../plugins/Isotope/isotope.pkgd.min.js"></script>
    <!-- Owl Carousel JS File -->
    <script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <!-- Javascript File -->
    <script src="../js/custom.js"></script>



</body>

</html>