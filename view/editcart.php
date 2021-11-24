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

    <!-- Owl Carousel File -->
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">

    <!-- CSS File -->
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/cart.css">


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
                                    <li><a href="#"><i class="fa fa-search" arial-hidden="true"></i></a></li>
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

    <div class="container mt-5 mb-5">
      <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-2">
                <h4>Shopping cart</h4>
                <div class="d-flex flex-row align-items-center pull-right"><span class="mr-1">Sort by:</span><span class="mr-1 font-weight-bold">Price</span><i class="fa fa-angle-down"></i></div>
            </div>
            <hr>
            <?php
           require('../Controllers/cart_controller.php');
           $cart = get_Cartitem();
           ?>
           <?php
            foreach($cart as $value){
            $total = $value['product_price']*$value['qty'];
            ?>
            <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                <div class="mr-1"><img class="rounded" src="<?php echo "../admin" . $value['product_image']; ?>" width="70"></div>
                <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold"><?php echo $value['product_title']?></span>
                    <div class="d-flex flex-row product-desc">
                        <div class="size mr-1"><span class="text-grey">Size:</span><span class="font-weight-bold">&nbsp;M</span></div>
                        <div class="color"><span class="text-grey">Color:</span><span class="font-weight-bold">&nbsp;Grey</span></div>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center qty">
                    <h5 class="text-grey"><?php echo "GHS". " ".$value['product_price']?></h5>
                </div>
                <div class="d-flex flex-row align-items-center qty">
                <form method='post' action='../Action/manage_cart.php'>
                    <input type='number' name='qty' style="width: 20%" value="<?php echo $value['qty']?>">
                    <input type='hidden' name='p_id' value="<?php echo $value['p_id']?>">
                    <button type='submit' class='btn-success' name='update_cart'><i class="fas fa-check"></i></button>
                </form>
                </div>
            
                <div>
                    <h5 class="text-black bold"><?php echo "GHS". " ".$total?></h5>
                </div>
                <!--<div class="d-flex align-items-center"><a href="editcart.php?product_id=<?php echo $value['p_id']?>"><i class="fas fa-edit mb-1 text-primary"></i></a></div>-->
                <div class="d-flex align-items-center"><a href="../Action/remove_from_cart.php?removeProd_ID=<?php echo $value['p_id']?>"><i class="fa fa-trash mb-1 text-danger"></i></a></div>
            </div>
            <br>
            <br>
            <!--<a href="all_product.php" class="btn btn-lg btn-warning cart_button_checkout">Continue Shopping </a>-->
            <!--<a href="payment.php" class="btn btn-lg btn-primary cart_button_checkout center ">Proceed to CheckOut </a>-->
            <?php
            };
            ?>
        </div>
    </div>
</div>
<br>
<br>

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