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
    <link rel="icon" href="./img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

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
                        <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a>

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
                                    <li><a href="./index.html">Home</a></li>
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
                                    <li class="active"><a href="./portfolio.html">Portfolio</a></li>
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
    
    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Portfolio</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Portfolio Area Start -->
    <section class="akame-portfolio section-padding-0-80 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-menu text-center mb-50">
                        <button class="btn active" data-filter="*">All</button>
                        <button class="btn" data-filter=".haircuts">Haircuts</button>
                        <button class="btn" data-filter=".coloring">Coloring</button>
                        <button class="btn" data-filter=".barber">Barber</button>
                        <button class="btn" data-filter=".shaving">Shaving</button>
                        <button class="btn" data-filter=".hairstyle">Hairstyle</button>
                        <button class="btn" data-filter=".massage">Massages</button>
                    </div>
                </div>
            </div>

            <div class="row akame-portfolio-area">
                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item haircuts mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/18.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/18.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item haircuts mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/19.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/19.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item coloring mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/20.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/20.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item coloring mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/21.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/21.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item barber mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/22.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/22.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item barber mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/23.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/23.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item shaving mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/24.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/24.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item shaving mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/25.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/25.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item hairstyle mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/26.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/26.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item hairstyle mb-30 wow fadeInUp" data-wow-delay="200ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/27.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/27.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item massage mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/28.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/28.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>

                <!-- Single Portfolio Item -->
                <div class="col-12 col-sm-6 col-lg-4 akame-portfolio-item massage mb-30 wow fadeInUp" data-wow-delay="800ms">
                    <div class="akame-portfolio-single-item">
                        <img src="img/bg-img/29.jpg" alt="">

                        <!-- Overlay Content -->
                        <div class="overlay-content d-flex align-items-center justify-content-center">
                            <div class="overlay-text text-center">
                                <h4>Hairstyle</h4>
                                <p>Consectetur adipisicing elit sed doe</p>
                            </div>
                        </div>

                        <!-- Thumbnail Zoom -->
                        <a href="img/bg-img/29.jpg" class="thumbnail-zoom"><i class="icon_search"></i></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="view-all-btn mt-30 text-center">
                        <a href="portfolio.html" class="btn akame-btn">View All Work</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Area End -->

    <!-- Border -->
    <div class="container">
        <div class="border-top"></div>
    </div>

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>

                        <p class="mb-30">We would love to serve you and let you enjoy your culinary experience. Excepteur sint occaecat cupidatat non proident.</p>

                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Opening times</h4>

                        <!-- Open Times -->
                        <div class="open-time">
                            <p>Monday: Friday: 10.00 - 23.00</p>
                            <p>Saturday: 10.00 - 19.00</p>
                        </div>

                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="col-12 col-md-4 col-xl-3">
                    <div class="single-footer-widget mb-80">

                        <!-- Widget Title -->
                        <h4 class="widget-title">Contact Us</h4>

                        <!-- Contact Address -->
                        <div class="contact-address">
                            <p>Tel: (+12) 345 678 910</p>
                            <p>E-mail: Hello.colorlib@gmail.com</p>
                            <p>Address: Iris Watson, P.O. Box 283 8562 Fusce Rd, NY</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- All JS Files -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/akame.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>