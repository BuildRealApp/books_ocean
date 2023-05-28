<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/price_rangs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
<header>
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="d-flex justify-content-between align-items-center flex-sm">
                                <div class="header-info-left d-flex align-items-center">

                                    <div class="logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>

                                    <form action="#" class="form-box">
                                        <input type="text" name="Search" placeholder="Search book by author or publisher">
                                        <div class="search-icon">
                                            <i class="ti-search"></i>
                                        </div>
                                    </form>
                                </div>
                                <div class="header-info-right d-flex align-items-center">
                                    <ul>
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Track Order</a></li>
                                        <li class="shopping-card">
                                            <a href="cart.html"><img src="assets/img/icon/cart.svg" alt=""></a>
                                        </li>
                                        <li><a href="login.html" class="btn header-btn">Sign in</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12">

                            <div class="logo2">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>

                            <div class="main-menu text-center d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="categories.html">Categories</a></li>
                                        <li><a href="contact.html">Shop</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contect</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<footer>
    <div class="footer-wrappper section-bg">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-3 col-lg-5 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">

                                <div class="footer-logo mb-25">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p>Get the breathing space now, and we’ll extend your term at the other end year for go.</p>
                                    </div>
                                </div>

                                <div class="footer-social">
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Book Category</h4>
                                <ul>
                                    <li><a href="#">History</a></li>
                                    <li><a href="#">Horror - Thriller</a></li>
                                    <li><a href="#">Love Stories</a></li>
                                    <li><a href="#">Science Fiction</a></li>
                                    <li><a href="#">Business</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>&nbsp;</h4>
                                <ul>
                                    <li><a href="#">Biography</a></li>
                                    <li><a href="#">Astrology</a></li>
                                    <li><a href="#">Digital Marketing</a></li>
                                    <li><a href="#">Software Development</a></li>
                                    <li><a href="#">Ecommerce</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Site Map</h4>
                                <ul class="mb-20">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://booksocean.com" style="color: black" target="_blank" rel="nofollow noopener">BookOcean</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>


<script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>

<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>

<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/price_rangs.js') }}"></script>

<script src="{{ asset('assets/js/contact.js') }}"></script>
<script src="{{ asset('assets/js/jquery.form.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/mail-script.js') }}"></script>
<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
