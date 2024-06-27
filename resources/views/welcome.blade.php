<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/favicon/2.png" />
    <meta name="theme-color" content="#e22454" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Voxo" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/2.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CV Pro">
    <meta name="keywords" content="cvpro">
    <meta name="author" content="cvpro">
    <link rel="icon" href="assets/im/logotransparent.png" type="image/x-icon" />
    <title>@yield('title')</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css">
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo4.css">
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo6.css">


</head>

<body class="theme-color2 light ltr">

<!-- header start -->

<header class="header-style-2" id="home">
    <div class="main-header navbar-searchbar">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="brand-logo">
                                <a href="{{route('index')}}">
                                    <svg class="svg-icon">
                                        <use class="fill-color" xlink:href="assets/svg/icons.svg#logo"></use>
                                    </svg>
                                    <img src="assets/images/logo.png" class="img-fluid blur-up lazyloaded" alt="logo" style="width: 40%;">
                                </a>
                            </div>
                        </div>
                        <nav>
                            <div class="main-navbar">
                                <div id="mainnav">
                                    <div class="toggle-nav">
                                        <i class="fa fa-bars sidebar-bar"></i>
                                    </div>
                                    <ul class="nav-menu" style="right: -410px;">
                                        <li class="back-btn d-xl-none">
                                            <div class="close-btn">
                                                Menu
                                                <span class="mobile-back"><i class="fa fa-angle-left"></i>
                                                    </span>
                                            </div>
                                        </li>
                                        <li class="home-menu">
                                            <a href="{{route('index')}}" class="nav-link menu-title"><h3>Home</h3></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="javascript:void(0)" class="nav-link menu-title"><h3>Sports</h3></a>
                                            <ul class="nav-submenu menu-content">


                                                @foreach(\App\Models\Cat::get() as $cat)
                                                    <li class="dropdown"><a href="{{ route('categories',$cat->categories) }}">{{ $cat->categories }}</a></li>
                                                @endforeach

                                                {{--                                                    <a href="shop-no-sidebar.html">Shop No Sidebar</a>--}}
                                                {{--                                                </li>--}}
                                                {{--                                                <li>--}}
                                                {{--                                                    <a href="shop-right-sidebar.html">Shop Right Sidebar</a>--}}
                                                {{--                                                </li>--}}
                                                {{--                                                <li>--}}
                                                {{--                                                    <a href="shop-top-filter.html">Shop Top Filter</a>--}}
                                                {{--                                                </li>--}}
                                                {{--                                                <li>--}}
                                                {{--                                                    <a href="shop-with-category.html">Shop With Category <span class="tren-budge">New</span></a>--}}
                                                {{--                                                </li>--}}
                                            </ul>
                                        </li>
                                        <li class="ratio_40">
                                            <a href= "{{route('about')}}" class="nav-link menu-title">
                                                <div class="gradient-title"><h3>About Us</h3></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="menu-right">
                            <ul>
                                @if (Route::has('login'))
                                    <div class="top-right links">
                                        @auth
                                            <li class="onhover-dropdown wislist-dropdown">
                                                <div class="cart-media">
                                                    <div class="cart-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart pe-2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>                                                        <span class="label label-theme rounded-pill">0</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="onhover-dropdown wislist-dropdown">
                                                <a href="{{ route('dashboard') }}">
                                                    <div class="cart-media">
                                                        <div class="cart-icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <a href="{{ route('dashboard') }}">
                                                <button type="button" class="rounded-3 btn btn-solid-default btn-spacing">
                                                    <span>Logout</span>
                                                </button>
                                            </a>
                                        @else
                                            <a href="{{ route('login') }}">
                                                <button type="button" class="btn rounded-3 btn-solid-default btn-spacing">
                                                    <span>Login</span>
                                                </button>
                                            </a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}">
                                                    <button type="button" class="rounded-3 btn btn-solid-default btn-spacing">
                                                        <span>Register</span>
                                                    </button>
                                                </a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif

                            </ul>
                        </div>
                        <div class="search-full">
                            <div class="input-group">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search font-light"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                    </span>
                                <input type="text" class="form-control search-type" placeholder="Search here..">
                                <span class="input-group-text close-search">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x font-light"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    </span>
                            </div>
                            <div class="search-suggestion">
                                <ul class="custom-scroll">
                                    <li>
                                        <div class="product-cart media">
                                            <img src="assets/images/electronics/product/1.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            <div class="media-body">
                                                <a href="javascript:void(0)">
                                                    <h6 class="mb-1">New Smart Watch 4 ERT2</h6>
                                                </a>
                                                <ul class="rating p-0">
                                                    <li>
                                                        <i class="fas fa-star theme-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star theme-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star theme-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                </ul>
                                                <p class="mb-0 mt-1">$28.00</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-cart media">
                                            <img src="assets/images/electronics/product/5.jpg" class="img-fluid blur-up lazyloaded" alt="">
                                            <div class="media-body">
                                                <a href="javascript:void(0)">
                                                    <h6 class="mb-1">Powermatic 900 W Juicer</h6>
                                                </a>
                                                <ul class="rating m-0 p-0">
                                                    <li>
                                                        <i class="fas fa-star theme-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star theme-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star theme-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star theme-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star theme-color"></i>
                                                    </li>
                                                </ul>
                                                <p class="mb-0 mt-1">$35.00</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->

{{--<!-- mobile fix menu start -->--}}
{{--<div class="mobile-menu d-sm-none">--}}
{{--    <ul>--}}
{{--        <li>--}}
{{--            <a href="{{route('index')}}" class="active">--}}
{{--                <i data-feather="home"></i>--}}
{{--                <span>Home</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="javascript:void(0)" class="">--}}
{{--                <i data-feather="align-justify"></i>--}}
{{--                <span>Resume</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="#">--}}
{{--                <i data-feather="shopping-bag"></i>--}}
{{--                <span>Cart</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="wishlist.html">--}}
{{--                <i data-feather="heart"></i>--}}
{{--                <span>Wishlist</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <a href="user-dashboard.html">--}}
{{--                <i data-feather="user"></i>--}}
{{--                <span>Account</span>--}}
{{--            </a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</div>--}}
{{--<!-- mobile fix menu end -->--}}

@yield('content')

<!-- footer start -->
<footer class="footer-sm-space">
    <div class="main-footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="footer-contact">
                        <div class="brand-logo">
                            <a href="{{route('index')}}" class="footer-logo">
                                <svg class="svg-icon">
                                    <use class="fill-color" xlink:href="assets/svg/icons.svg#logo"></use>
                                </svg>
                                <img src="assets/images/logo.png" width="20%" class="img-fluid blur-up lazyload" alt="logo">
                            </a>
                        </div>
                        <ul class="contact-lists">
                            <li>
                                    <span>
                                        <b>phone:</b>
                                        <span class="font-light"> +237 6XX-XXX-XXX</span>
                                    </span>

                            </li>
                            <li>
                                    <span>
                                        <b>Address:</b>
                                        <span class="font-light"> Street, town, City, Region, Country</span>
                                    </span>
                            </li>
                            <li>
                                    <span>
                                        <b>Email:</b>
                                        <span class="font-light"> infos@cvpro.com</span>
                                    </span>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <div class="footer-title">
                            <h3>Categories</h3>
                        </div>
                        <div class="footer-content">
                            <ul>
                                <li>
                                    <a href="#" class="font-dark">Resume</a>
                                </li>
                                <li>
                                    <a href="#" class="font-dark">Cover letters</a>
                                </li>
                                <li>
                                    <a href="#" class="font-dark">Pricing</a>
                                </li>
                                <li>
                                    <a href="#" class="font-dark">About Us</a>
                                </li>
                                <li>
                                    <a href="#" class="font-dark">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6 d-none d-sm-block">
                    <div class="footer-newsletter">
                        <h3>Who are we?</h3>
                        <p class="font-dark mb-0">Mission statement or short text about cv pro. Keep up to date with our latest news and special offers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container ">
            <p class="mb-0 font-dark text-center">© 2024, CV PRO. Made with heart by LAAF-TECHNOMIND</p>

        </div>
    </div>
</footer>
<!-- footer end -->




{{--<!-- Newsletter modal start -->--}}
{{--<div class="modal fade newletter-modal" id="newsletter">--}}
{{--    <div class="modal-dialog modal-dialog-centered">--}}
{{--        <div class="modal-content ">--}}
{{--            <div class="modal-header">--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}

{{--            <div class="modal-body">--}}
{{--                <img src="assets/images/newletter-icon.png" class="img-fluid blur-up lazyload" alt="">--}}
{{--                <div class="modal-title">--}}
{{--                    <h2 class="tt-title">Sign up for our Newsletter!</h2>--}}
{{--                    <p class="font-light">Never miss any new updates or products we reveal, stay up to date.</p>--}}
{{--                    <p class="font-light">Oh, and it's free!</p>--}}

{{--                    <div class="input-group mb-3">--}}
{{--                        <input placeholder="Email" class="form-control" type="text">--}}
{{--                    </div>--}}

{{--                    <div class="cancel-button text-center">--}}
{{--                        <button class="btn default-theme w-100" data-bs-dismiss="modal"--}}
{{--                                type="button">Submit</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Newsletter modal end -->--}}

<!-- Coockie Section Start -->
{{--<div class="cookie-bar-section">--}}
{{--    <img src="assets/images/cookie.png" alt="">--}}
{{--    <div class="content">--}}
{{--        <h3>Cookies Consent</h3>--}}
{{--        <p class="font-light">This website use cookies to ensure you get the best experience on our website.</p>--}}
{{--        <div class="cookie-buttons">--}}
{{--            <button class="btn btn-solid-default" id="button">I understand</button>--}}
{{--            <a href="javascript:void(0)" class="btn default-light1">Learn more</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Coockie Section End -->



<!-- tap to top Section Start -->
<div class="tap-to-top">
    <a href="{{route('index')}}#home">
        <i class="fas fa-chevron-up"></i>
    </a>
</div>
<!-- tap to top Section End -->

<div class="bg-overlay"></div>

<!-- latest jquery-->
<script src="assets/js/jquery-3.5.1.min.js"></script>

<!-- Bootstrap js-->
<script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

<!-- feather icon js-->
<script src="assets/js/feather/feather.min.js"></script>

<!-- lazyload js-->
<script src="assets/js/lazysizes.min.js"></script>

<!-- Slick js-->
<script src="assets/js/slick/slick.js"></script>
<script src="assets/js/slick/slick-animation.min.js"></script>
<script src="assets/js/slick/custom_slick.js"></script>

<!-- newsletter js -->
<script src="assets/js/newsletter.js"></script>

<!-- add to cart modal resize -->
<script src="assets/js/cart_modal_resize.js"></script>

<!-- Add To Home js -->
<script src="assets/js/pwa.js"></script>

<!-- add to cart modal resize -->
<script src="assets/js/cart_modal_resize.js"></script>

<!-- feather icon js-->
<script src="assets/js/timer1.js"></script>

<!-- notify js -->
<script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

<!-- script js -->
<script src="assets/js/theme-setting.js"></script>
<script src="assets/js/script.js"></script>

</body>

</html>
