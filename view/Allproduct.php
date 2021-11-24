<?php

require_once '../Controllers/product_controller.php';

$products = select_all_products_controller();
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

    <!-- Owl Carousel File -->
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">

    <!-- CSS File -->
    <link rel="stylesheet" type="text/css" href="../styles/style.css">



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
                                    <li><a href="#">Products</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                                <ul class="navbar_user">
                                    <li><a href="../Logout/login.php"><i class="fa fa-sign-out" arial-hidden="true"></i></a></li>
                                    <li><a href="login.php"><i class="fa fa-user" arial-hidden="true"></i></a></li>
                                    <li class="checkout">
                                        <a href="cart.php">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            <span id="checkout_item" class="checkout_items"><?php print_r(getTotalItemsInCart())?></span>
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
    
        <div class="best_sellers">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="section_title new_arrivals_title">
                            <h2>All Products</h2>
                        </div>
                    </div>
                </div>
                <!-- slide 1-->

                <!-- <div class="row">-->
                <div class="row">
                    <div class="col">
                        <div class="product_slider_container">
                            <div class="owl-carousel owl-theme product_slider">
                                <?php
                                foreach ($products as $product) {
                                ?>
                                    <div class="owl-item product_slider_item">
                                        <div class="product-item men">
                                            <div class="product discount product_filter">
                                                <div class="product_image">
                                                 <a href="singleproduct.php?productid=<?php echo $product['product_id']?>"><img src="<?php echo "../admin" . $product['product_image']; ?>" alt="product_image" width="200" height="200"></a>
                                                </div>
                                                <div class="favorite favorite_left"></div>

                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="#"><?php echo $product['product_title']; ?></a></h6>
                                                    <div class="product_price"><?php echo "GHS" . " " . $product['product_price']; ?></div>
                                                    <div class="red_button add_to_cart_button"><a href="../Action/add_to_cart.php?productid=<?php echo $product['product_id']?>">Add to Cart</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php
                                };
                                ?>

                            </div>
                            </div>
                            </div>

                            </div>
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
    </div>





    <?php if (isset($c_id)) : ?>

        <div>
            <div class="customer_id" data-flashdata="<?php echo $c_id; ?>"></div>

        </div>

    <?php endif; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $("a[data-item-id=stand-out]").click(function(e) {
            e.preventDefault();

            var p_Id = $(this).attr("data-id");
            console.log("The id of this product is " + p_Id);

            const c_id = $('.customer_id').data('flashdata');

            console.log("The id of this customer is " + c_id);

            var ip_add = window.localStorage.getItem('user_ip');

            var data = {
                p_id: p_Id,
                c_id: c_id,
                ip_add: ip_add,
                submit: "cart"
            };

            console.log(data);

            $.ajax({
                url: '../actions/add_to_cart.php',
                method: 'POST',
                // contentType: 'application/json',
                dataType: 'Json',
                data: data,
                success: function(response, textStatus, jqXHR) {
                    // window.location.href = "../actions/add_to_cart.php";

                    // var oJsonResponse = JSON.stringify(response);
                    console.log(response);

                    if (response['check'] != 'product exists' && response['message'] == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Product added to cart',
                            text: 'click to proceed to cart',
                            showCancelButton: true,
                            confirmButtonText: 'OK',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "../views/cart.php"
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'info',
                            title: 'Product already exist in cart',
                            text: 'Proceed to increase the quantity',
                            showCancelButton: true,
                            confirmButtonText: 'OK',
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "../views/cart.php"
                            }
                        });
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert(textStatus, errorThrown);
                }
            });


        });
    </script>
    

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
                            <input id="newsletter_email" type="email" placeholder="Your Email" required="required" data-error="valid email is required">
                            <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="submit">Subscribe</button>
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