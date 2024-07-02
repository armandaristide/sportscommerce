<html lang="en"><head>
    <link rel="manifest" href="manifest.json">
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/favicon/2.png">
    <meta name="theme-color" content="#e22454">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Voxo">
    <meta name="msapplication-TileImage" content="assets/images/favicon/2.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voxo">
    <meta name="keywords" content="Voxo">
    <meta name="author" content="Voxo">
    <link rel="icon" href="assets/images/favicon/2.png" type="image/x-icon">
    <title>@yield('title')</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

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



    <link rel="icon" href="assets/images/favicon/3.png" type="image/x-icon" />

    <!-- Theme css -->

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{('assets/css/demo2.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo4.css">
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo6.css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- Icon Start -->
    <link rel="icon" href="assets/images/shoes/png/001-hotel-service.png">

    <link rel="stylesheet" href="assets/css/vendors/ion.rangeSlider.min.css" />

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">



    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick/slick-theme.css">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo3.css">
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/demo2.css">
    <link id="color-link" rel="stylesheet" type="text/css" href="assets/css/prod.css">
</head>

<body class="theme-color2 light ltr" style="">


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
                                    <img src="assets/images/logo.png" class="img-fluid blur-up lazyloaded" alt="logo" style="width: 35%;">
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
                                            <a href="{{route('index')}}" class="nav-link menu-title">
                                                <div class="{{ request()->is('/') ? 'gradient-title' : '' }}">
                                                    <h3>Home</h3>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="javascript:void(0)" class="nav-link menu-title">
                                                    <div class="{{ request()->is('categories_*') ? 'gradient-title' : '' }}">
                                                        <h3> Sports</h3>
                                                    </div></a>
                                            <ul class="nav-submenu menu-content">


                                                @foreach(\App\Models\Cat::get() as $cat)
                                                    <li class="dropdown"><a href="{{ route('categories',$cat->categories) }}"><div class="{{ request()->is('categories_'.$cat->categories) ? 'gradient-title' : '' }}">{{ $cat->categories }}</div></a></li>
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
                                                <div class="{{ request()->is('about_us') ? 'gradient-title' : '' }}"><h3>About Us</h3></div>
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

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <li class="onhover-dropdown wislist-dropdown">
                                                        <div class="cart-media">
                                                            <a href={{route('cart')}}>  <div class="cart-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart pe-2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>  <span class="label label-theme rounded-pill">{{count($carts)}}</span>
                                                                </div></a>

                                                        </div>
                                                    </li>
                                                </div>
                                                <div class="col-md-4">
                                                    <li class="onhover-dropdown wislist-dropdown">

                                                        <a href="{{ route('dashboard') }}">
                                                            <div class="cart-media">
                                                                <div class="cart-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>                                                        </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                        <button type="button" class="rounded-3 btn btn-solid-default btn-spacing">
                                                            <span>{{ __('Logout') }}</span>
                                                        </button>

                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>

                                            </div>
                                        </div>

                                        @else
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="{{ route('login') }}">
                                                            <button type="button" class="btn rounded-3 btn-solid-default btn-spacing">
                                                                <span>Login</span>
                                                            </button>
                                                        </a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        @if (Route::has('register'))
                                                            <a href="{{ route('register') }}">
                                                                <button type="button" class="rounded-3 btn btn-solid-default btn-spacing">
                                                                    <span>Register</span>
                                                                </button>
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
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

<!-- mobile fix menu start -->
<div class="mobile-menu d-sm-none">
    <ul>
        <li>
            <a href="{{route('index')}}" class="active">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="toggle-category">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify"><line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line></svg>
                <span>Category</span>
            </a>
        </li>
        <li>
            <a href="cart.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                <span>Cart</span>
            </a>
        </li>
        <li>
            <a href="wishlist.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                <span>Wishlist</span>
            </a>
        </li>
        <li>
            <a href="user-dashboard.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <span>Account</span>
            </a>
        </li>
    </ul>
</div>
<!-- mobile fix menu end -->


@yield('content')

<!-- footer start -->
<footer class="footer-sm-space" style="margin-top: 30px">
    <div class="sub-footer" style="background-color: #f2f3f5">
        <div class="container">
            <div class="row gy-3">
                <div class="col-md-3">
                    <ul>
                        <li>
                            <a href="{{route('index')}}">
                                <img src="assets/images/logo.png" style="width: 30%" class="img-fluid blur-up lazyload" alt="payment icon"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 text-left">
                    <p style="color: black"><strong>© 2024 Created by team 2</strong></p>
                </div>
                <div class="col-md-7">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <p><strong><a style="color: black" href="{{route('index')}}">Home</a></strong></p>
                            </div>
                            <div class="col-md-3">
                                <p><strong><a style="color: black" href="{{route('index')}}">Categories</a></strong></p>
                            </div>
                            <div class="col-md-2">
                                <p><strong><a style="color: black"  href="{{route('about')}}">About Us</a></strong></p>
                            </div>
                            <div class="col-md-4">
                                <p><strong><a style="color: black" href="{{route('index')}}">Terms and Conditions</a></strong></p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- Quick view modal start -->
<div class="modal fade quick-view-modal" id="quick-view">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="quick-view-image">
                            <div class="quick-view-slider ratio_2 slick-initialized slick-slider" id="slider0"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 0px;"><div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 1500ms ease 0s;"><div><div class="bg-size blur-up lazyload" style="width: 100%; display: block; background-image: url(&quot;assets/images/fashion/product/front/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                    <img src="assets/images/fashion/product/front/4.jpg" class="img-fluid bg-img blur-up lazyload" alt="product" style="display: none;">
                                                </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 1000; opacity: 1; transition: opacity 1500ms ease 0s;" tabindex="-1"><div><div class="bg-size blur-up lazyload" style="width: 100%; display: block; background-image: url(&quot;assets/images/fashion/product/front/5.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                    <img src="assets/images/fashion/product/front/5.jpg" class="img-fluid bg-img blur-up lazyload" alt="product" style="display: none;">
                                                </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 1500ms ease 0s;" tabindex="-1"><div><div class="bg-size blur-up lazyload" style="width: 100%; display: block; background-image: url(&quot;assets/images/fashion/product/front/6.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                    <img src="assets/images/fashion/product/front/6.jpg" class="img-fluid bg-img blur-up lazyload" alt="product" style="display: none;">
                                                </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 0px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 1500ms ease 0s;" tabindex="-1"><div><div class="bg-size blur-up lazyload" style="width: 100%; display: block; background-image: url(&quot;assets/images/fashion/product/front/7.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                                                    <img src="assets/images/fashion/product/front/7.jpg" class="img-fluid bg-img blur-up lazyload" alt="product" style="display: none;">
                                                </div></div></div></div></div></div>
                            <div class="quick-nav slick-initialized slick-slider slick-vertical" id="sliderNav0"><div class="slick-list draggable" style="height: 0px;"><div class="slick-track" style="opacity: 1; height: 0px; transform: translate3d(0px, 0px, 0px); transition: transform 500ms ease 0s;"><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" tabindex="-1" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                    <img src="assets/images/fashion/product/front/5.jpg" class="img-fluid blur-up lazyload" alt="product">
                                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                    <img src="assets/images/fashion/product/front/6.jpg" class="img-fluid blur-up lazyload" alt="product">
                                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                    <img src="assets/images/fashion/product/front/7.jpg" class="img-fluid blur-up lazyload" alt="product">
                                                </div></div></div><div class="slick-slide" data-slick-index="0" aria-hidden="true" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                    <img src="assets/images/fashion/product/front/4.jpg" class="img-fluid blur-up lazyload" alt="product">
                                                </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                    <img src="assets/images/fashion/product/front/5.jpg" class="img-fluid blur-up lazyload" alt="product">
                                                </div></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                    <img src="assets/images/fashion/product/front/6.jpg" class="img-fluid blur-up lazyload" alt="product">
                                                </div></div></div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 0px;" tabindex="-1"><div><div style="width: 100%; display: inline-block;">
                                                    <img src="assets/images/fashion/product/front/7.jpg" class="img-fluid blur-up lazyload" alt="product">
                                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" tabindex="-1" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                    <img src="assets/images/fashion/product/front/4.jpg" class="img-fluid blur-up lazyload" alt="product">
                                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                    <img src="assets/images/fashion/product/front/5.jpg" class="img-fluid blur-up lazyload" alt="product">
                                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" tabindex="-1" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                    <img src="assets/images/fashion/product/front/6.jpg" class="img-fluid blur-up lazyload" alt="product">
                                                </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" tabindex="-1" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                    <img src="assets/images/fashion/product/front/7.jpg" class="img-fluid blur-up lazyload" alt="product">
                                                </div></div></div></div></div></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-right">
                            <h2 class="mb-2">Men's Hoodie t-shirt</h2>
                            <ul class="rating mt-1">
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
                                <li class="font-light">(In stock)</li>
                            </ul>
                            <div class="price mt-3">
                                <h3>$20.00</h3>
                            </div>
                            <div class="color-types">
                                <h4>colors</h4>
                                <ul class="color-variant mb-0">
                                    <li class="bg-half-light selected"></li>
                                    <li class="bg-light1"></li>
                                    <li class="bg-blue1"></li>
                                    <li class="bg-black1"></li>
                                </ul>
                            </div>
                            <div class="size-detail">
                                <h4>size</h4>
                                <ul class="">
                                    <li class="selected">S</li>
                                    <li>M</li>
                                    <li>L</li>
                                    <li>XL</li>
                                </ul>
                            </div>
                            <div class="product-details">
                                <h4>product details</h4>
                                <ul>
                                    <li>
                                        <span class="font-light">Style :</span> Hoodie
                                    </li>
                                    <li>
                                        <span class="font-light">Catgory :</span> T-shirt
                                    </li>
                                    <li>
                                        <span class="font-light">Tags:</span> summer, organic
                                    </li>
                                </ul>
                            </div>
                            <div class="product-btns">
                                <a href="cart.html" class="btn btn-solid-default btn-sm">Add to cart</a>
                                <a href="product-left-sidebar.html" class="btn btn-solid-default btn-sm">View
                                    details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quick view modal end -->

<!-- Cart Successful Start -->
<div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="modal-contain">
                    <div>
                        <div class="modal-messages">
                            <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                            you cart.
                        </div>
                        <div class="modal-product">
                            <div class="modal-contain-img">
                                <img src="assets/images/fashion/instagram/4.jpg" class="img-fluid blur-up lazyload" alt="">
                            </div>
                            <div class="modal-contain-details">
                                <h4>Premier Cropped Skinny Jean</h4>
                                <p class="font-light my-2">Yellow, Qty : 3</p>
                                <div class="product-total">
                                    <h5>TOTAL : <span>$1,140.00</span></h5>
                                </div>
                                <div class="shop-cart-button mt-3">
                                    <a href="shop-left-sidebar.html" class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                        SHOPPING</a>
                                    <a href="cart.html" class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                        CART</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ratio_asos mt-4">
                    <div class="container">
                        <div class="row m-0">
                            <div class="col-sm-12 p-0">
                                <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider slick-initialized slick-slider"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/fashion/product/front/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/1.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-details text-center">
                                                                <div class="rating-details d-block text-center">
                                                                    <span class="font-light grid-content">B&amp;Y Jacket</span>
                                                                </div>
                                                                <div class="main-price mt-0 d-block text-center">
                                                                    <h3 class="theme-color">$78.00</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/fashion/product/front/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-details text-center">
                                                                <div class="rating-details d-block text-center">
                                                                    <span class="font-light grid-content">B&amp;Y Jacket</span>
                                                                </div>
                                                                <div class="main-price mt-0 d-block text-center">
                                                                    <h3 class="theme-color">$78.00</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/fashion/product/front/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/3.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-details text-center">
                                                                <div class="rating-details d-block text-center">
                                                                    <span class="font-light grid-content">B&amp;Y Jacket</span>
                                                                </div>
                                                                <div class="main-price mt-0 d-block text-center">
                                                                    <h3 class="theme-color">$78.00</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 0px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/fashion/product/front/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/4.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="product-details text-center">
                                                                <div class="rating-details d-block text-center">
                                                                    <span class="font-light grid-content">B&amp;Y Jacket</span>
                                                                </div>
                                                                <div class="main-price mt-0 d-block text-center">
                                                                    <h3 class="theme-color">$78.00</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart Successful End -->


<!-- Coockie Section Start -->
<div class="cookie-bar-section hide">
    <img src="assets/images/cookie.png" alt="">
    <div class="content">
        <h3>Cookies Consent</h3>
        <p class="font-light">This website use cookies to ensure you get the best experience on our website.</p>
        <div class="cookie-buttons">
            <button class="btn btn-solid-default" id="button">I understand</button>
            <a href="javascript:void(0)" class="btn default-light1">Learn more</a>
        </div>
    </div>
</div>
<!-- Coockie Section End -->


<!-- tap to top Section Start -->
<div class="tap-to-top">
    <a href="#home">
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

<!-- Add To Home js -->
<script src="assets/js/pwa.js"></script>

<!-- Slick js-->
<script src="assets/js/slick/slick.js"></script>
<script src="assets/js/slick/slick-animation.min.js"></script>
<script src="assets/js/slick/custom_slick.js"></script>

<!-- newsletter js -->
<script src="assets/js/newsletter.js"></script>


<!-- timer js -->
<script src="assets/js/timer.js"></script>

<!-- sticky cart bottom js-->
<script src="assets/js/check-box-select.js"></script>
<script src="assets/js/prod.js"></script>

<!-- Zoom Js -->
<script src="assets/js/jquery.elevatezoom.js"></script>
<script src="assets/js/zoom-filter.js"></script>

<!--Plugin JavaScript file-->
<script src="assets/js/ion.rangeSlider.min.js"></script>

<!-- Filter Hide and show Js -->
<script src="assets/js/filter.js"></script>

<!-- add to cart modal resize -->
<script src="assets/js/cart_modal_resize.js"></script>

<!-- Notify js-->
<script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

<!-- script js -->
<script src="assets/js/theme-setting.js"></script>
<script src="assets/js/script.js"></script>







</body>
</html>
