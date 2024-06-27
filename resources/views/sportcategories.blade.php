@extends('layouts.master')
@section('title','SPORTS CATEGORY | E COMMERCE')
@section('content')
    <!-- Breadcrumb section start -->
    @if($cat== "football")
        <section class="breadcrumb-section section-b-space" style="background-image: url(assets/img/banners/football.png); background-size: cover">
            @else
    <section class="breadcrumb-section section-b-space" style="background-image: url(assets/img/banners/tennis.png);background-size: cover">
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
                <h3 class="breadcrumb-item"><a href="{{route('categories',$cat)}}">
                        SPORTS
                    </a> / {{$cat}}
                </h3>

                <div class="col-12">
                    <h1 class="text-white">{{$cat}}</h1>

                </div>
            </div>
        </div>
    </section>

    <!--Clothing-->
    <section class="ratio2_1 banner-style-2">
        <div class="container">
            <div class="row gy-4">
                <div class="col-sm-12 p-0">
                    <div class="title title1 text-left">
                        <h2>Clothing</h2>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/img/football/jersey.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="#" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Jerseys</h2>
                                <span>Check out our {{$cat}} jerseys</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/shorts.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/img/football/shorts.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="#" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Shorts</h2>
                                <span>Check out our {{$cat}} shorts</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/tracksuits.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/img/football/tracksuits.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="#" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Track Suits</h2>
                                <span>Check out our {{$cat}} track suits</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footwears-->

    <section class="ratio2_1 banner-style-2">
        <div class="container">
            <div class="row gy-4">
                <div class="col-sm-12 p-0">
                    <div class="title title1 text-left">
                        <h2>Footwears</h2>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/boots.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/img/football/boots.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="#" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Boots</h2>
                                <span>Check out our {{$cat}} boots</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/socks.pn); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/img/football/socks.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="#" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Socks</h2>
                                <span>Check out our {{$cat}} Socks</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/runners.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/img/football/runners.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="#" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Shoes</h2>
                                <span>Check out our {{$cat}} shoes</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

                <!--Accessories-->
                <section class="ratio2_1 banner-style-2">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-sm-12 p-0">
                                <div class="title title1 text-left">
                                    <h2>{{$cat}} Accessories</h2>
                                </div>

                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="collection-banner p-bottom p-center text-center">
                                    <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/traininggear.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="assets/img/football/traininggear.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                    </a>
                                    <a href="#" class="contain-banner">
                                        <div class="banner-content with-big">
                                            <h2 class="mb-2">Training Gear</h2>
                                            <span>Check out {{$cat}} training Gear</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="collection-banner p-bottom p-center text-center">
                                    <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/gloves.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="assets/img/football/gloves.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                    </a>
                                    <a href="#" class="contain-banner">
                                        <div class="banner-content with-big">
                                            <h2 class="mb-2">Gloves</h2>
                                            <span>Check out our {{$cat}} gloves</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="collection-banner p-bottom p-center text-center">
                                    <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/ball.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="assets/img/football/ball.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                    </a>
                                    <a href="#" class="contain-banner">
                                        <div class="banner-content with-big">
                                            <h2 class="mb-2">Balls</h2>
                                            <span>Check out our {{$cat}} balls</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>




    <!-- Breadcrumb section end -->@stop
