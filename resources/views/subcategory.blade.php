@extends('layouts.master')
@section('title','SUBCATEGORIES | LEVEL UP ')
@section('content')
    <!-- Breadcrumb section start -->
    @if($cat== "football")
        <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihbv_kwYq0cqbHBk15PcUwygXa_JGvxK70vUu2yHM6sjql-cMB4-wDOPwk_1ojZdBBGev6x1soXUYBrUvqM8OnSwPGKMSuH5P3c=s1600-rw-v1'); background-size: cover">
            @elseif($cat== "basketball")
                <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihb21nBUo3P4ZtYAab4XKWcogWPvHUH7nYdDO6fDxJWFP6sGbkCRmGn2YmPIkt5UC8Irqou1dNLZn9OSXPAHXSB2fA3ksmwCxzI=s1600-rw-v1'); background-size: cover">
                    @elseif($cat== "tennis")
                        <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihafeynsQd6ZKq6eOIuRAAKGsBPALvr7eZi79h8wp_tmbmZ-mM4z6w7cI1wY8GFByXcsewl3kHKRaxm5Gq9TWveNZe9jtgxN6B0=s1600-rw-v1'); background-size: cover">
                            @elseif($cat == "volleyball")
                                <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihZTMfzpu4TflPLIU1dYMPZki42eKnY6gCC41qnedx3xn1PctVRN7z3Wb2WK4DbPY8v3gc2MSUMtrcu_BcQKIMu0eQfymI_eiHM=s1600-rw-v1'); background-size: cover">
                                    @elseif($cat == "cricket")
                                        <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihb5afoALxxaR1lXiKwlT8zRdHjQbNF_PutojIeMzTz0hp6n6sek6CjPcXJZdss5Xhf3Bb38-QB3JN5H5LoprZZdW60ozj-mDg=s1600-rw-v1'); background-size: cover">
                                            @elseif($cat == "athletics")
                                                <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihaXaLL4FEaFQq1G-BxYldavne93FVynsWv_sU0RJH0xtiQ5fWwJWEgbPqlkN3QQn1epY5gH7m2llPFJnr3XQmk2ApJfpIn3riI=s1600-rw-v1'); background-size: cover">
                                                    @else
                                                        <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihZm_arptYYXtWkO9gVErZWPdfXEEaPR-xiAB3YcFjrUXUEEyO4zUCBXGkMn9Ovk4Bz8S_K6VYo5uRUYvEmtcH8KZEVtmEsfMg=s1600-rw-v1');background-size: cover">
                                                            @endif


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
                    <div class="container" style="text-align: left">
                        <div class="row">
                            <h3 class="breadcrumb-item text-capitalize"><a  class="text-capitalize"  style="color:#fcb320" href="{{route('categories',$cat)}}">
                                {{$cat}}
                                    </a>/ <a style="color:#fcb320" href="{{route('generalsub',$cat.'_'.$subcate)}}">{{$subcate}} </a>/ <a style="color:#f0f0f0"> {{$tag}} </a>
                            </h3>

                            <div class="col-12">
                                <h1 class="text-white">{{$cat}} {{$tag}}</h1>

                            </div>
                        </div>
                    </div>
                </section>


                <section class="section-b-space">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-12 ratio_30">
                                <div class="row g-4">
                                    <!-- label and featured section -->
                                    <div class="col-md-12">

                                    </div>

                                    <div class="col-12">
                                        <div class="title title1 text-left">
                                            <h2>{{$cat}} {{$tag}}</h2>
                                        </div>
                                        <div class="filter-options">
                                            <div class="grid-options d-sm-inline-block d-none">

                                            </div>
                                            <div class="select-options">
                                                <div class="page-view-filter">
                                                    <div class="dropdown select-featured">
                                                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            20 Items per page
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">Alphabetically
                                                                    A-Z</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">Alphabetically
                                                                    Z-A</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">Price, High To
                                                                    Low</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">Price, Low To
                                                                    High</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">Date, Old To
                                                                    New</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item" href="javascript:void(0)">Date, New To
                                                                    Old</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>



                                    </div>
                                </div>
                                <!-- label and featured section -->

                                <!-- Prodcut section -->
                                <div class="row g-sm-4 g-3 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gx-sm-4 gx-3 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">

                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/front/1.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/back/1.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html" class="wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-details">
                                                <div class="rating-details">
                                                    <span class="font-light grid-content">B&amp;Y Jacket</span>
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
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/front/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/back/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html" class="wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
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
                                                        <span class="font-light">Jacket</span>
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
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/front/3.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/back/3.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html" class="wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-details">
                                                <div class="rating-details">
                                                    <span class="font-light grid-content">Coat</span>
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
                                                        <span class="font-light">Coat</span>
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
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/front/4.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/back/4.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html" class="wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-details">
                                                <div class="rating-details">
                                                    <span class="font-light grid-content">Regular Fit</span>
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
                                                    <h3 class="theme-color">
                                                        $78.00
                                                    </h3>
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
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/5.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/front/5.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/5.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/back/5.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html" class="wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-details">
                                                <div class="rating-details">
                                                    <span class="font-light grid-content">Full Jacket</span>
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
                                                        <h5 class="ms-0">Full Jacket Ladies</h5>
                                                    </a>
                                                    <div class="listing-content">
                                                        <span class="font-light">Full Jacket</span>
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
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/6.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/front/6.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/6.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/back/6.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html" class="wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
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
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/7.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/front/7.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/7.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/back/7.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html" class="wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
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
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/8.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/front/8.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/8.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/back/8.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html" class="wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
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
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/front/1.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/back/1.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html" class="wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-details">
                                                <div class="rating-details">
                                                    <span class="font-light grid-content">B&amp;Y Jacket</span>
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
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/front/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/back/2.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html" class="wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
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
                                                        <span class="font-light">Jacket</span>
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
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/front/3.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/back/3.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html" class="wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-details">
                                                <div class="rating-details">
                                                    <span class="font-light grid-content">Regular Fit</span>
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
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/front/4.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="product-left-sidebar.html" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                        <img src="assets/images/fashion/product/back/4.jpg" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                    </a>
                                                </div>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        <li>
                                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quick-view">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html" class="wishlist">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
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
                                                        <h5 class="ms-0">Slim Fit Plastic Coat</h5>
                                                    </a>
                                                    <div class="listing-content">
                                                        <span class="font-light">Jacket</span>
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
                                </div>

                                <nav class="page-section">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <i class="fas fa-chevron-left"></i>
                                    </span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="javascript:void(0)">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="fas fa-chevron-right"></i>
                                    </span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>
    @stop
