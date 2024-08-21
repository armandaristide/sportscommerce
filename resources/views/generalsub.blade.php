@extends('layouts.master')
@section('title','GENERAL SUBCATEGORIES | LEVEL UP ')
@section('content')
    <!-- Breadcrumb section start -->
    @if($cat == "football")
        <section class="breadcrumb-section section-b-space" style="background-image: url('https://www.dropbox.com/scl/fi/1tw39jpdw0t816jh48f1s/football.png?rlkey=yhvsayp2u1gebbi82gtizgw1d&st=3fskjbbz&raw=1'); background-size: cover">
            @elseif($cat== "basketball")
                <section class="breadcrumb-section section-b-space" style="background-image: url('https://www.dropbox.com/scl/fi/bn48u880rm7kqxsxt293m/basketball.png?rlkey=as76a6adzifpv91ey7yn0v2p9&st=6j2g6sn4&raw=1'); background-size: cover">
                    @elseif($cat== "tennis")
                        <section class="breadcrumb-section section-b-space" style="background-image: url('https://www.dropbox.com/scl/fi/ql4otue8qmvvk3gwpa76g/tennis.png?rlkey=edaczci8yh4eiqmfqymx5ueng&st=noy0j5b3&raw=1'); background-size: cover">
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
                                                                    <h3 class="breadcrumb-item text-capitalize text-white">
                                                                        <a class="text-capitalize" style="color:#fcb320" href="{{ route('categories', $cat) }}">
                                                                            {{ $cat }}
                                                                        </a> / <a style="color:#f0f0f0"> {{ $subcat }} </a>
                                                                    </h3>
                                                                    <div class="col-12">
                                                                        <h1 class="text-white">All {{ $cat }} {{ $subcat }}</h1>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>

                                                        <section class="section-b-space">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-12 ratio_30">

                                                                        <!-- label and featured section -->
                                                                        @if(count($products)>0)

                                                                            <!-- Prodcut section -->
                                                                            <div class="row g-sm-4 g-3 row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 gx-sm-4 gx-3 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                                                                                @foreach($products as $product)
                                                                                    <div>
                                                                                        <div class="product-box">
                                                                                            <div class="img-wrapper">
                                                                                                <div class="front">
                                                                                                    <a href="{{route('productdets',$product->id)}}" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/front/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                                                        <img src="{{$product->imageone}}" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="back">
                                                                                                    <a href="{{route('productdets',$product->id)}}" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;assets/images/fashion/product/back/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                                                        <img src="{{$product->imagetwo}}" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="product-details">
                                                                                                <div class="rating-details">
                                                                                                    <span class="font-light grid-content">{{$product->categories}}</span>
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
                                                                                                    <a href="{{route('productdets',$product->id)}}" class="font-default">
                                                                                                        <h5 class="ms-0">{{$product->name}}</h5>
                                                                                                    </a>
                                                                                                    <h3 class="theme-color">€{{$product->price}}</h3>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach

                                                                            </div>

                                                                        @else
                                                                            <div class="container col-md-12">
                                                                                <h3 class="text-capitalize">{{$cat}} {{$subcat}}: NOT AVAILABLE AT THE MOMENT</h3>
                                                                            </div>
                                                                        @endif
                                                                        <nav class="page-section">
                                                                            <ul class="pagination">
                                                                                <li class="page-item">
                                                                                    {{ $products->links("pagination::bootstrap-4")}}

                                                                                </li>
                                                                            </ul>
                                                                        </nav>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
        @stop
