@extends('layouts.master')
@section('title','SPORTS CATEGORY | E COMMERCE')
@section('content')
    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
{{--        <ul class="circles">--}}
{{--            <li></li>--}}
{{--            <li></li>--}}
{{--            <li></li>--}}
{{--            <li></li>--}}
{{--            <li></li>--}}
{{--            <li></li>--}}
{{--            <li></li>--}}
{{--            <li></li>--}}
{{--            <li></li>--}}
{{--            <li></li>--}}
{{--        </ul>--}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="text-left">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    SPORTS
                                </a>
                            </li>
<<<<<<< HEAD
                            <li class="breadcrumb-item active" aria-current="page">{{$cats}}</li>
=======
>>>>>>> 828eccd396d731006a62bed10f0e05871c5878e2
                        </ol>
                    </nav>
                    <h1 align="left" >FOOTBALL</h1>

                </div>
            </div>
        </div>
    </section>

{{--    products categories start--}}
<<<<<<< HEAD
    <!--Shirts-->
    <section>
        <h1>Shirts</h1>
        <div
            class="row g-sm-4 g-3 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gx-sm-4 gx-3 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/1.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/1.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">B&Y Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Slim Fit Plastic Coat</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$78.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/2.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/2.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Blue Leather Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$60.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/3.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/3.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Dress</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Military Ball Night Dress</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$85.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/4.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/4.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                        </div>
                        <div class="main-price">
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Slive Yellow Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$69.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/5.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/5.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Jacket Ladies</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Jacket</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$40.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/6.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/6.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">T-Shirt</span>
                            <ul class="rating mt-0">
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
                        </div>
                        <div class="main-price">
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Slive Black T-Shirt</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">T-Shirt</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$69.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/7.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/7.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Fashion</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Latest Fashion Cloth</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Fashion</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$54.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/8.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/8.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                        </div>
                        <div class="main-price">
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Black Slive Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Jacket</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$99.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/1.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/1.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">B&Y Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Slim Fit Plastic Coat</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$78.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/2.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/2.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Blue Leather Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$60.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/3.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/3.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Dress</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Military Ball Night Dress</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$85.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/4.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/4.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                        </div>
                        <div class="main-price">
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Slive Yellow Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$69.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prodcut setion -->
        </div></section>
    <!--Shoes-->
    <section>
        <h1>Shoes</h1>
        <div
            class="row g-sm-4 g-3 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gx-sm-4 gx-3 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/1.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/1.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">B&Y Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Slim Fit Plastic Coat</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$78.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/2.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/2.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Blue Leather Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$60.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/3.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/3.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Dress</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Military Ball Night Dress</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$85.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/4.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/4.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                        </div>
                        <div class="main-price">
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Slive Yellow Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$69.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/5.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/5.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Jacket Ladies</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Jacket</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$40.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/6.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/6.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">T-Shirt</span>
                            <ul class="rating mt-0">
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
                        </div>
                        <div class="main-price">
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Slive Black T-Shirt</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">T-Shirt</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$69.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/7.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/7.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Fashion</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Latest Fashion Cloth</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Fashion</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$54.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/8.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/8.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                        </div>
                        <div class="main-price">
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Black Slive Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Jacket</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$99.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/1.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/1.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">B&Y Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Slim Fit Plastic Coat</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$78.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/2.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/2.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Blue Leather Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$60.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/3.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/3.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Dress</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Military Ball Night Dress</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$85.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/4.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/4.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                        </div>
                        <div class="main-price">
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Slive Yellow Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$69.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prodcut setion -->
        </div></section>
    <!--Equipments-->
    <section>
        <h1>Gear</h1><div
            class="row g-sm-4 g-3 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gx-sm-4 gx-3 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/1.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/1.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">B&Y Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Slim Fit Plastic Coat</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$78.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/2.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/2.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Blue Leather Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$60.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/3.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/3.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Dress</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Military Ball Night Dress</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$85.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/4.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/4.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                        </div>
                        <div class="main-price">
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Slive Yellow Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$69.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/5.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/5.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Jacket Ladies</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Jacket</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$40.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/6.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/6.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">T-Shirt</span>
                            <ul class="rating mt-0">
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
                        </div>
                        <div class="main-price">
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Slive Black T-Shirt</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">T-Shirt</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$69.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/7.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/7.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Fashion</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Latest Fashion Cloth</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Fashion</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$54.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/8.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/8.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                        </div>
                        <div class="main-price">
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Black Slive Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Jacket</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$99.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/1.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/1.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">B&Y Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Slim Fit Plastic Coat</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$78.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/2.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/2.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Blue Leather Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$60.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/3.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/3.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Dress</span>
                            <ul class="rating mt-0">
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
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Military Ball Night Dress</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$85.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/front/4.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="back">
                            <a href="product-left-sidebar.html">
                                <img src="assets/images/fashion/product/back/4.jpg"
                                     class="bg-img blur-up lazyload" alt="">
                            </a>
                        </div>
                        <div class="cart-wrap">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" class="addtocart-btn"
                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                        <i data-feather="shopping-bag"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                       data-bs-target="#quick-view">
                                        <i data-feather="eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i data-feather="refresh-cw"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html" class="wishlist">
                                        <i data-feather="heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="rating-details">
                            <span class="font-light grid-content">Jacket</span>
                            <ul class="rating mt-0">
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
                        </div>
                        <div class="main-price">
                            <a href="product-left-sidebar.html" class="font-default">
                                <h5 class="ms-0">Full Slive Yellow Jacket</h5>
                            </a>
                            <div class="listing-content">
                                <span class="font-light">Regular Fit</span>
                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Sit, deserunt? Asperiores aliquam voluptatum culpa aliquid ab
                                    ducimus eaque illum, quibusdam reiciendis id ad consectetur quis, animi
                                    qui, minus quidem eveniet! Dolorum magnam numquam, asperiores
                                    accusantium architecto placeat quam officia, tempore repellendus.</p>
                            </div>
                            <h3 class="theme-color">$69.00</h3>
                            <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prodcut setion -->
        </div></section>
=======
    <!--Clothing-->
    <section class="ratio_asos">
        <div class="container">
            <div class="row m-0">
                <div class="col-sm-12 p-0">
                    <div class="title title-2 text-center">
                        <h1>Clothing</h1>
                    </div>
                    <div class="product-wrapper slide-5 light-arrow bottom-space slick-initialized slick-slider slick-dotted"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 5400px; transform: translate3d(-1890px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/8.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/8.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/9.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/9.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide10" style="width: 270px;" aria-describedby="slick-slide-control10"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/1.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide11" style="width: 270px;" aria-describedby="slick-slide-control11"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/2.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide12" style="width: 270px;" aria-describedby="slick-slide-control12"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/3.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide13" style="width: 270px;" aria-describedby="slick-slide-control13"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/4.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide14" style="width: 270px;" aria-describedby="slick-slide-control14"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/5.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/5.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="5" aria-hidden="false" role="tabpanel" id="slick-slide15" style="width: 270px;" aria-describedby="slick-slide-control15"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/6.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/6.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="0">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-active" data-slick-index="6" aria-hidden="false" role="tabpanel" id="slick-slide16" style="width: 270px;" aria-describedby="slick-slide-control16"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/7.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/7.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="0">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide17" style="width: 270px;" aria-describedby="slick-slide-control17"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/8.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/8.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide18" style="width: 270px;" aria-describedby="slick-slide-control18"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/9.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/9.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/1.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/2.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/3.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/4.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/5.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/5.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="14" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/6.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/6.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/7.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/7.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="16" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/8.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/8.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="17" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/9.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/9.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>

                </div>
            </div>
        </div>
    </section>

    <!--Footwears-->
    <section class="ratio_asos">
        <div class="container">
            <div class="row m-0">
                <div class="col-sm-12 p-0">
                    <div class="title title-2 text-center">
                        <h1>Footwears</h1>
                    </div>
                    <div class="product-wrapper slide-5 light-arrow bottom-space slick-initialized slick-slider slick-dotted"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 5400px; transform: translate3d(-1890px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/8.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/8.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/9.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/9.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide10" style="width: 270px;" aria-describedby="slick-slide-control10"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/1.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide11" style="width: 270px;" aria-describedby="slick-slide-control11"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/2.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide12" style="width: 270px;" aria-describedby="slick-slide-control12"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/3.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide13" style="width: 270px;" aria-describedby="slick-slide-control13"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/4.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide14" style="width: 270px;" aria-describedby="slick-slide-control14"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/5.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/5.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="5" aria-hidden="false" role="tabpanel" id="slick-slide15" style="width: 270px;" aria-describedby="slick-slide-control15"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/6.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/6.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="0">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-active" data-slick-index="6" aria-hidden="false" role="tabpanel" id="slick-slide16" style="width: 270px;" aria-describedby="slick-slide-control16"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/7.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/7.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="0">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide17" style="width: 270px;" aria-describedby="slick-slide-control17"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/8.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/8.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide18" style="width: 270px;" aria-describedby="slick-slide-control18"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/9.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/9.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/1.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/2.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/3.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/4.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/5.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/5.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="14" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/6.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/6.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/7.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/7.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="16" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/8.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/8.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="17" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/9.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/9.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>

                </div>
            </div>
        </div>
    </section>

    <!--Accessories-->
    <section class="ratio_asos">
        <div class="container">
            <div class="row m-0">
                <div class="col-sm-12 p-0">
                    <div class="title title-2 text-center">
                        <h1>Accessories</h1>
                    </div>
                    <div class="product-wrapper slide-5 light-arrow bottom-space slick-initialized slick-slider slick-dotted"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 5400px; transform: translate3d(-1890px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/8.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/8.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/9.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/9.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide10" style="width: 270px;" aria-describedby="slick-slide-control10"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/1.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide11" style="width: 270px;" aria-describedby="slick-slide-control11"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/2.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide12" style="width: 270px;" aria-describedby="slick-slide-control12"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/3.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide13" style="width: 270px;" aria-describedby="slick-slide-control13"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/4.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide14" style="width: 270px;" aria-describedby="slick-slide-control14"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/5.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/5.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="5" aria-hidden="false" role="tabpanel" id="slick-slide15" style="width: 270px;" aria-describedby="slick-slide-control15"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/6.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/6.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="0">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-active" data-slick-index="6" aria-hidden="false" role="tabpanel" id="slick-slide16" style="width: 270px;" aria-describedby="slick-slide-control16"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/7.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/7.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="0">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="7" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide17" style="width: 270px;" aria-describedby="slick-slide-control17"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/8.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/8.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide" data-slick-index="8" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide18" style="width: 270px;" aria-describedby="slick-slide-control18"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/9.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/9.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/1.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/2.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/3.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="12" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/4.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="13" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/5.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/5.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="14" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/6.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/6.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="15" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/7.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/7.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="16" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/8.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/8.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>
                                        </div></div></div><div class="slick-slide slick-cloned" data-slick-index="17" id="" aria-hidden="true" tabindex="-1" style="width: 270px;"><div><div style="width: 100%; display: inline-block;">
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <a href="product-left-sidebar.html" tabindex="-1" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/shoes/latest-product/9.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/shoes/latest-product/9.jpg" class="img-fluid bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
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
                                                <div class="product-details text-center">
                                                    <h3 class="theme-color">
                                                        $49.00
                                                        <span class="font-light ml-1">$52.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default" tabindex="-1">
                                                        <h5>Latest Sports Shoes</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
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
                                            </div>

                </div>
            </div>
        </div>
                            </div>
                        </div>
    </section>




>>>>>>> 828eccd396d731006a62bed10f0e05871c5878e2


    <!-- Breadcrumb section end -->@stop
