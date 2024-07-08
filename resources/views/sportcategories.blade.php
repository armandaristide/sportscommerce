@extends('layouts.master')
@section('title','SPORTS CATEGORY | E COMMERCE')
@section('content')
    <!-- Breadcrumb section start -->
    @if($cat== "football")
        <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihbv_kwYq0cqbHBk15PcUwygXa_JGvxK70vUu2yHM6sjql-cMB4-wDOPwk_1ojZdBBGev6x1soXUYBrUvqM8OnSwPGKMSuH5P3c=s1600-rw-v1'); background-size: cover">
            @elseif($cat== "basketball")
                <section class="breadcrumb-section section-b-space" style="background-image: url('https://www.dropbox.com/scl/fi/bn48u880rm7kqxsxt293m/basketball.png?rlkey=as76a6adzifpv91ey7yn0v2p9&st=6j2g6sn4&raw=1'); background-size: cover">
                    @elseif($cat== "tennis")
                        <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihafeynsQd6ZKq6eOIuRAAKGsBPALvr7eZi79h8wp_tmbmZ-mM4z6w7cI1wY8GFByXcsewl3kHKRaxm5Gq9TWveNZe9jtgxN6B0=s1600-rw-v1'); background-size: cover">
                            @elseif($cat == "volleyball")
                                <section class="breadcrumb-section section-b-space" style="background-image: url('https://www.dropbox.com/scl/fi/s9d7wljo620mhvjt2uyeq/volleyball.png?rlkey=v47b67llv4ttxzciqpl2sedqa&st=vdvxp633&raw=1'); background-size: cover">
                                    @elseif($cat == "cricket")
                                        <section class="breadcrumb-section section-b-space" style="background-image: url('https://www.dropbox.com/scl/fi/9gec45nw867z4kjix35qa/cricket.png?rlkey=q2a4zgv98nlhgv4ru2lg41kd1&st=7y4cuoj9&raw=1'); background-size: cover">
                                            @elseif($cat == "athletics")
                                                <section class="breadcrumb-section section-b-space" style="background-image: url('https://www.dropbox.com/scl/fi/oqb854mclmrndqx6i96nx/athletics.png?rlkey=do699ncwf90zjmgy6b8rufclx&st=rovm21r1&raw=1'); background-size: cover">
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
                <h3 class="breadcrumb-item text-capitalize"><a href="{{route('categories',$cat)}}">
                        SPORTS</a>
                    <a class = "text-white-50"> / {{$cat}} </a>
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
                @if($cat=="football")
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/img/football/jersey.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">{{$cat}} Jerseys</h2>
                                <span>Check out our {{$cat}} jerseys</span>
                            </div>
                        </a>
                    </div>
                </div>
                @elseif($cat=="basketball")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="assets/img/football/jersey.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shirts</h2>
                                    <span>Check out our {{$cat}} jerseys</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="tennis")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="assets/img/football/jersey.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shirts</h2>
                                    <span>Check out our {{$cat}} jerseys</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="cricket")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="assets/img/football/jersey.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shirts</h2>
                                    <span>Check out our {{$cat}} jerseys</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="athletics")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="assets/img/football/jersey.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shirts</h2>
                                    <span>Check out our {{$cat}} jerseys</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="volleyball")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="assets/img/football/jersey.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shirts</h2>
                                    <span>Check out our {{$cat}} jerseys</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="assets/img/football/jersey.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shirts</h2>
                                    <span>Check out our {{$cat}} jerseys</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/shorts.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/img/football/shorts.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Shorts</h2>
                                <span>Check out our {{$cat}} shorts</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/tracksuits.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/img/football/tracksuits.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="contain-banner">
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
                @if($cat=="football")
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
                @elseif($cat=="basketball")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/boots.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="assets/img/football/boots.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="#" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Hightops</h2>
                                    <span>Check out our {{$cat}} shoes</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="tennis")
                @elseif($cat=="cricket")
                @elseif($cat=="athletics")
                @elseif($cat=="volleyball")
                @else
                @endif
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
