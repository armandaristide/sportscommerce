@extends('layouts.master')
@section('title','SPORTS CATEGORY | E COMMERCE')
@section('content')
    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
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
                            <li class="breadcrumb-item active" aria-current="page">FOOTBALL</li>
                        </ol>
                    </nav>
                    <h1>FOOTBALL</h1>

                </div>
            </div>
        </div>
    </section>

{{--    products categories start--}}
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


    <!-- Breadcrumb section end -->@stop
