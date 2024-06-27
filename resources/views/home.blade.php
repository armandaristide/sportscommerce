@extends('layouts.master')
@section('title','SPORTS CATEGORY | E COMMERCE')
@section('content')
    <section class="pt-0 overflow-hidden">
        <div>
            <div class="banner-slider box-arrow">
                <!-- Slider 1 Start -->
                <div class="banner-poster">
                    <div class="slider-right-detail">
                        <h4>New Festival Offer</h4>
                        <div class="offer-box">
                            <h6>65% off</h6>
                        </div>
                    </div>

                    <div class="slider-bg">
                        <div class="bg-text">
                            <span>Sport shoes</span>
                        </div>

                        <div class="bg-circle gradient-purple"></div>
                        <img src="assets/images/shoes/1-.png" class="shoes-1 img-fluid blur-up lazyload" alt="">
                    </div>

                    <div class="sugestion-product d-xl-block d-none">
                        <h3>Quality Products</h3>
                        <h6>Our Sports Shoes Collection</h6>
                    </div>


                    <div class="price-number">
                        <h2>$79.00 <span><del>$65.00</del></span></h2>
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae minima asperiores
                            possimus ad quae.</h6>
                    </div>
                    <div class="slider-arrow-2">
                        <div class="left-arrow d-lg-block d-none"></div>
                        <div class="right-arrow d-lg-block d-none"></div>
                    </div>
                </div>
                <!-- Slider 1 End -->

                <!-- Slider 2 Start -->
                <div class="banner-poster">
                    <div class="slider-right-detail">
                        <h4>New Festival Offer</h4>
                        <div class="offer-box">
                            <h6>65% off</h6>
                        </div>
                    </div>

                    <div class="slider-bg">
                        <div class="bg-text">
                            <span>Nike shoes</span>
                        </div>

                        <div class="bg-circle red-gradient"></div>
                        <img class="shoes-1 img-fluid blur-up lazyload" alt="" src="assets/images/shoes/slider-2.png">
                    </div>

                    <div class="sugestion-product d-xl-block d-none">
                        <h3>Quality Products</h3>
                        <h6>Our Sports Shoes Collection</h6>


                    </div>

                    <div class="price-number">
                        <h2>$79.00 <span><del>$65.00</del></span></h2>
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae minima asperiores
                            possimus ad quae.</h6>
                    </div>

                    <div class="slider-arrow-2">
                        <div class="left-arrow d-lg-block d-none"></div>
                        <div class="right-arrow d-lg-block d-none"></div>
                    </div>
                </div>
                <!-- Slider 2 End -->

                <!-- Slider 3 Start -->
                <div class="banner-poster">
                    <div class="slider-right-detail">
                        <h4>New Festival Offer</h4>
                        <div class="offer-box">
                            <h6>65% off</h6>
                        </div>
                    </div>

                    <div class="slider-bg">
                        <div class="bg-text">
                            <span>HIGH END</span>
                        </div>

                        <div class="bg-circle gradient-blue"></div>
                        <img class="shoes-1 img-fluid blur-up lazyload" alt="" src="assets/images/shoes/Slider.png">
                    </div>

                    <div class="sugestion-product d-xl-block d-none">
                        <h3>Quality Products</h3>
                        <h6>Our Sports Shoes Collection</h6>
                    </div>

                    <div class="price-number">
                        <h2>$79.00 <span><del>$65.00</del></span></h2>
                        <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae minima asperiores
                            possimus ad quae.</h6>
                    </div>

                    <div class="slider-arrow-2">
                        <div class="left-arrow d-lg-block d-none"></div>
                        <div class="right-arrow d-lg-block d-none"></div>
                    </div>
                </div>
                <!-- Slider 3 End -->
            </div>
        </div>
    </section>


    <!-- products categories-->
    <section class="mb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title title-2 text-left">
                        <h2>Product Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-3">
                <div class="col-xxl-12  mx-auto">
                    <div class="row">
                        <div class="col-4">
                            <a href="/categories_football" class="category-wrap category-padding">
                                <img src="assets/img/fb.png"  class="bg-img blur-up lazyload"
                                     alt="category image">
                                <div class="category-content category-text-1">
                                    <h2 class="theme-color">Football</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/categories_basketball" class="category-wrap category-padding">
                                <img src="assets/img/bb.png"  class="bg-img blur-up lazyload"
                                     alt="category image">
                                <div class="category-content category-text-1">
                                    <h2 class="theme-color">Basketball</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/categories_tennis" class="category-wrap category-padding">
                                <img src="assets/img/tennis.png"  class="bg-img blur-up lazyload"
                                     alt="category image">
                                <div class="category-content category-text-1">
                                    <h2 class="theme-color">Tennis</h2>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <a href="/categories_cricket" class="category-wrap category-padding">
                                <img src="assets/img/cricket.png" class="bg-img blur-up lazyload"
                                     alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Cricket</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/categories_volleyball" class="category-wrap category-padding">
                                <img src="assets/img/vb.png" class="bg-img blur-up lazyload"
                                     alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Volleyball</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/categories_athletics" class="category-wrap category-padding">
                                <img src="assets/img/athletics.png" class="bg-img blur-up lazyload"
                                     alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Athletics</h3>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- products categories end-->



    <!-- recent product section start -->
    <section>

        <div class="container" style="margin-top: 70px">
            <div class="title title1 text-left">
                <h2>Recent Products</h2>
            </div>

            <div class="contain-image-box">
                <section class="ratio_asos pt-3">
                    <div class="container">
                        <div class="row m-0">
                            <div class="col-sm-12 p-0">
                                <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space slick-initialized slick-slider slick-dotted"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4900px; transform: translate3d(-1400px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-4" id="" aria-hidden="true" tabindex="-1" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/fashion/product/front/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/fashion/product/back/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="label-block">
                                                                    <span class="label label-dark">On discount</span>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Fully Comfortable</span>
                                                                    <ul class="rating">
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
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                                        <h5>Outwear &amp; Coats</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $35.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true" tabindex="-1" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/3.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/3.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="label-block">
                                                                    <span class="label label-theme">20% off</span>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Fully Hoodie</span>
                                                                    <ul class="rating">
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
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                                        <h5>Men's Sweatshirt</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $80.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/4.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/4.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Fully Comfortable</span>
                                                                    <ul class="rating">
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
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                                        <h5>Men's Hoodie t-shirt</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $40.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="label-block">
                                                                    <span class="label label-dark">On discount</span>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Fully Comfortable</span>
                                                                    <ul class="rating">
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
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                                        <h5>Outwear &amp; Coats</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $35.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" role="tabpanel" id="slick-slide00" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/1.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/1.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="label-block">
                                                                    <span class="label label-dark">New</span>
                                                                    <span class="label label-theme">50% Off</span>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Regular Fit</span>
                                                                    <ul class="rating">
                                                                        <li>
                                                                            <i class="fas fa-star theme-color"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="0">
                                                                        <h5>Slim Fit Plastic Coat</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $78.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" role="tabpanel" id="slick-slide01" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="label-block">
                                                                    <span class="label label-dark">On discount</span>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Fully Comfortable</span>
                                                                    <ul class="rating">
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
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="0">
                                                                        <h5>Outwear &amp; Coats</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $35.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-active" data-slick-index="2" aria-hidden="false" role="tabpanel" id="slick-slide02" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/3.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/3.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="label-block">
                                                                    <span class="label label-theme">20% off</span>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Fully Hoodie</span>
                                                                    <ul class="rating">
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
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="0">
                                                                        <h5>Men's Sweatshirt</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $80.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" role="tabpanel" id="slick-slide03" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/4.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/4.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="0">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Fully Comfortable</span>
                                                                    <ul class="rating">
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
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="0">
                                                                        <h5>Men's Hoodie t-shirt</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $40.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide04" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="label-block">
                                                                    <span class="label label-dark">On discount</span>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Fully Comfortable</span>
                                                                    <ul class="rating">
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
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                                        <h5>Outwear &amp; Coats</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $35.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" tabindex="-1" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/1.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/1.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="label-block">
                                                                    <span class="label label-dark">New</span>
                                                                    <span class="label label-theme">50% Off</span>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Regular Fit</span>
                                                                    <ul class="rating">
                                                                        <li>
                                                                            <i class="fas fa-star theme-color"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                                        <h5>Slim Fit Plastic Coat</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $78.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" tabindex="-1" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="label-block">
                                                                    <span class="label label-dark">On discount</span>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Fully Comfortable</span>
                                                                    <ul class="rating">
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
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                                        <h5>Outwear &amp; Coats</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $35.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" tabindex="-1" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/fashion/product/front/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/3.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/fashion/product/back/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/3.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="label-block">
                                                                    <span class="label label-theme">20% off</span>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Fully Hoodie</span>
                                                                    <ul class="rating">
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
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                                        <h5>Men's Sweatshirt</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $80.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" tabindex="-1" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/fashion/product/front/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/4.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/fashion/product/back/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/4.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Fully Comfortable</span>
                                                                    <ul class="rating">
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
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                                        <h5>Men's Hoodie t-shirt</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $40.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" tabindex="-1" style="width: 350px;"><div><div style="width: 100%; display: inline-block;">
                                                        <div class="product-box">
                                                            <div class="img-wrapper">
                                                                <div class="front">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/fashion/product/front/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/front/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="back">
                                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyload" style="background-image: url(&quot;assets/images/fashion/product/back/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                        <img src="assets/images/fashion/product/back/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                    </a>
                                                                </div>
                                                                <div class="label-block">
                                                                    <span class="label label-dark">On discount</span>
                                                                </div>
                                                                <div class="cart-wrap">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="compare.html" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="wishlist.html" class="wishlist" tabindex="-1">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="rating-details">
                                                                    <span class="font-light">Fully Comfortable</span>
                                                                    <ul class="rating">
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
                                                                        <li>
                                                                            <i class="fas fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="main-price">
                                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                                        <h5>Outwear &amp; Coats</h5>
                                                                    </a>
                                                                    <h3 class="theme-color">
                                                                        $35.00
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div></div></div></div></div><ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 2" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control02" aria-controls="slick-slide02" aria-label="3 of 2" tabindex="-1">3</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control03" aria-controls="slick-slide03" aria-label="4 of 2" tabindex="-1">4</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control04" aria-controls="slick-slide04" aria-label="5 of 2" tabindex="-1">5</button></li></ul></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>    <!-- product section end -->

    </section>


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

    <!-- Timer Js -->
    <script src="assets/js/timer1.js"></script>

    <!-- Slick js-->
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/slick/slick-animation.min.js"></script>
    <script src="assets/js/slick/custom_slick.js"></script>

    <!-- newsletter js -->
    <script src="assets/js/newsletter.js"></script>

    <!-- add to cart modal resize -->
    <script src="assets/js/cart_modal_resize.js"></script>

    <!-- Notify js-->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>
@stop
