<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Akame - Hair Salon HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo get_template_directory_uri();?>/./img/core-img/favicon.ico">

    <?php wp_head(); ?>
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="loader"></div>
</div>
<!-- /Preloader -->

<!-- Header Area Start -->
<header class="header-area">
    <!-- Top Header Area Start -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-5">
                    <div class="top-header-content">
                        <p>Welcome to hair salon!</p>
                    </div>
                </div>
                <div class="col-7">
                    <div class="top-header-content text-right">
                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> Mon-Sat: 8.00 to 17.00 <span class="mx-2"></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Call us: (+12)-345-6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header Area End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="akameNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="<?php echo get_template_directory_uri();?>/./img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="./index.html">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./index.html">- Home</a></li>
                                        <li><a href="./about.html">- About Us</a></li>
                                        <li><a href="./service.html">- Services</a></li>
                                        <li><a href="./portfolio.html">- Portfolio</a></li>
                                        <li><a href="./blog.html">- Blog</a></li>
                                        <li><a href="./single-blog.html">- Blog Details</a></li>
                                        <li><a href="./contact.html">- Contact</a></li>
                                        <li><a href="#">- Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                                <li><a href="#">- Dropdown Item</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="./portfolio.html">Portfolio</a></li>
                                <li><a href="./service.html">Services</a></li>
                                <li><a href="./about.html">About Us</a></li>
                                <li><a href="./blog.html">Blog</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>

                            <!-- Cart Icon -->
                            <div class="cart-icon ml-5 mt-4 mt-lg-0">
                                <a href="#"><i class="icon_cart"></i></a>
                            </div>

                            <!-- Book Icon -->
                            <div class="book-now-btn ml-5 mt-4 mt-lg-0 ml-md-4">
                                <a href="#" class="btn akame-btn">Book Now</a>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->