@extends('layouts.master')
@section('title','Product Details | LEVEL UP')
@section('content')
    <!-- Breadcrumb section start -->
    @if($product->categories== "football")
        <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihbv_kwYq0cqbHBk15PcUwygXa_JGvxK70vUu2yHM6sjql-cMB4-wDOPwk_1ojZdBBGev6x1soXUYBrUvqM8OnSwPGKMSuH5P3c=s1600-rw-v1'); background-size: cover">
            @elseif($product->categories== "basketball")
                <section class="breadcrumb-section section-b-space" style="background-image: url('https://www.dropbox.com/scl/fi/bn48u880rm7kqxsxt293m/basketball.png?rlkey=as76a6adzifpv91ey7yn0v2p9&st=6j2g6sn4&raw=1'); background-size: cover">
                    @elseif($product->categories== "tennis")
                        <section class="breadcrumb-section section-b-space" style="background-image: url('https://www.dropbox.com/scl/fi/ql4otue8qmvvk3gwpa76g/tennis.png?rlkey=edaczci8yh4eiqmfqymx5ueng&st=noy0j5b3&raw=1'); background-size: cover">
                            @elseif($product->categories == "volleyball")
                                <section class="breadcrumb-section section-b-space" style="background-image: url('https://www.dropbox.com/scl/fi/s9d7wljo620mhvjt2uyeq/volleyball.png?rlkey=v47b67llv4ttxzciqpl2sedqa&st=vdvxp633&raw=1'); background-size: cover">
                                    @elseif($product->categories == "cricket")
                                        <section class="breadcrumb-section section-b-space" style="background-image: url('https://www.dropbox.com/scl/fi/9gec45nw867z4kjix35qa/cricket.png?rlkey=q2a4zgv98nlhgv4ru2lg41kd1&st=7y4cuoj9&raw=1'); background-size: cover">
                                            @elseif($product->categories == "athletics")
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
                            <li class="breadcrumb-item">
                                <a href="{{route('index')}}">
                                    <i class="fas fa-home"></i>
                                </a>/
                                <a  class="text-capitalize text-white" href="{{route('categories',$product->categories)}}">
                                    {{$product->categories}}
                                </a> /{{$product->name}}
                            </li>

                            <div class="col-12">
                                <h1 class="text-white">Product Details</h1>

                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="container">
                        <div class="row gx-4 gy-5">
                            <div class="col-12">
                                <div class="details-items">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class = "product-imgs">
                                                <div class = "img-display">
                                                    <div class = "img-showcase">
                                                        <img src=  "{{$product->imageone}}"  alt = "{{$product->tag}}">
                                                        <img src = "{{$product->imagetwo}}" alt = "{{$product->tag}}">
                                                        <img src = "{{$product->imagethree}}" alt = "{{$product->tag}}">
                                                        <img src = "{{$product->imagefour}}" alt = "{{$product->tag}}">
                                                    </div>
                                                </div>
                                                <div class = "img-select">
                                                    <div class = "img-item">
                                                        <a href = "#" data-id = "1">
                                                            <img src = "{{$product->imageone}}"  alt = "{{$product->tag}}">
                                                        </a>
                                                    </div>
                                                    <div class = "img-item">
                                                        <a href = "#" data-id = "2">
                                                            <img src = "{{$product->imagetwo}}" alt = "{{$product->tag}}">
                                                        </a>
                                                    </div>
                                                    <div class = "img-item">
                                                        <a href = "#" data-id = "3">
                                                            <img src = "{{$product->imagethree}}" alt = "{{$product->tag}}">
                                                        </a>
                                                    </div>
                                                    <div class = "img-item">
                                                        <a href = "#" data-id = "4">
                                                            <img src = "{{$product->imagefour}}" alt = "{{$product->tag}}">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="cloth-details-size" style="margin-top: 0px">
                                                <div class="details-image-concept" style="margin-top: 0px;">
                                                    <h2>{{$product->name}}</h2>
                                                </div>

                                                <h3 class="price-detail">€{{$product->price}} <del>€{{$product->price*2}}</del><span>50% off</span></h3>
                                                <h4 style="text-align: justify">{{$product->description}}</h4>

                                                <form class="row g-2" method="POST" action="{{ route('submit.cart') }}" enctype="multipart/form-data">
                                                    @csrf

{{--                                                    WORK HERE HABIB--}}
                                                    @if (Route::has('login'))
                                                        @auth
                                                    <div class="color-image">
                                                        <div class="image-select">
                                                            <h5>Color :</h5>
                                                            <ul class="image-section">
                                                                <li>
                                                                    <input name="color" value="{{$product->imageone}}" hidden>
                                                                        <img src="{{$product->imageone}}" class="img-fluid blur-up lazyloaded" alt="">
                                                                </li>
                                                                <li>
                                                                    <input name="color" value="{{$product->imagetwo}}" hidden >
                                                                        <img src="{{$product->imagetwo}}" class="img-fluid blur-up lazyloaded" alt="">
                                                                </li>
                                                                <li>
                                                                    <input name="color" value="{{$product->imagethree}}" hidden >
                                                                        <img src="{{$product->imagethree}}" class="img-fluid blur-up lazyloaded" alt="">
                                                                </li>

                                                            </ul>

                                                        </div>
                                                    </div>

                                                    <div id="selectSize" class="addeffect-section product-description border-product">
                                                        <h6 class="product-title size-text">select size
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#sizemodal">size chart</a>
                                                        </h6>

                                                        <h6 class="error-message">please select size</h6>

                                                        <div class="size-box">
                                                            <ul>
                                                                <li>
                                                                    <a href="javascript:void(0)">s</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)">m</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)">l</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)">xl</a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <h6 class="product-title product-title-2 d-block">quantity</h6>

                                                        <div class="qty-box">
                                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </span>
                                                                <input type="text" name="quantity" class="form-control input-number" value="1">
                                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                            <div class="product-buttons">
                                                                <a href="#" class="btn btn-solid">
                                                                    <i class="fa fa-money-bill fz-16 me-2"></i>
                                                                    <span>BUY NOW</span>
                                                                </a>
                                                                <a href="#" id="cartEffect" class="btn btn-solid hover-solid btn-animation">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>

{{--                                                            END WORK HERE HABIB--}}
                                                        @else
                                                            <div class="color-image">
                                                                <div class="image-select">
                                                                    <h5>Color :</h5>
                                                                    <ul class="image-section">
                                                                        <li>
                                                                            <img src="{{$product->imageone}}" class="img-fluid blur-up lazyloaded" alt="">
                                                                        </li>
                                                                        <li>
                                                                            <img src="{{$product->imagetwo}}" class="img-fluid blur-up lazyloaded" alt="">
                                                                        </li>
                                                                        <li>
                                                                            <img src="{{$product->imagethree}}" class="img-fluid blur-up lazyloaded" alt="">
                                                                        </li>

                                                                    </ul>

                                                                </div>
                                                            </div>

                                                            <div id="selectSize" class="addeffect-section product-description border-product">
                                                                <h6 class="product-title size-text">Available sizes
                                                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#sizemodal">size chart</a>
                                                                </h6>

                                                                <div class="container">
                                                                    <ul>
                                                                        <li>
                                                                           <h3>S,</h3>
                                                                        </li>
                                                                        <li>
                                                                            <h3>  M,</h3>
                                                                        </li>
                                                                        <li>
                                                                            <h3>  L,</h3>
                                                                        </li>
                                                                        <li>
                                                                            <h3>  XL</h3>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <h6 class="product-title product-title-2 d-block">quantity</h6>

                                                                <div class="qty-box">
                                                                    <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus" disabled data-type="minus" data-field="">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </span>
                                                                        <input type="text" name="quantity" class="form-control input-number" value="1">
                                                                        <span class="input-group-prepend">
                                                    <button type="button" disabled class="btn quantity-right-plus" data-type="plus" data-field="">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="product-buttons">
                                                                <a href="#" class="btn btn-solid disabled">
                                                                    <i class="fa fa-money-bill fz-16 me-2"></i>
                                                                    <span>BUY NOW</span>
                                                                </a>
                                                                <a href="#" id="cartEffect" class="btn btn-solid  disabled hover-solid btn-animation">
                                                                    <i class="fa fa-shopping-cart"></i>
                                                                    <span>Add To Cart</span>
                                                                </a>
                                                            </div>
                                                        @endauth
                                                        @endif
                                                </form>



                                                <div class="mt-2 mt-md-3 border-product">
                                                    <h6 class="product-title hurry-title d-block">Hurry Up! Left <span>{{$product->quantity}}</span>
                                                        in
                                                        stock</h6>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 78%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                                                        <section class="ratio_asos mb-6">
                                                            <div class="container">
                                                                <div class="row m-0">
                                                                    <div class="col-sm-12 p-0">
                                                                        @if(count($similars)>0)
                                                                        <div class="title title1 text-left">
                                                                            <h2>Similar Products</h2>
                                                                        </div>
                                                                        <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow slick-initialized slick-slider">
                                                                            <div class="slick-list draggable">
                                                                                <div class="slick-track" style="opacity: 1; width: 1400px; transform: translate3d(0px, 0px, 0px);">
                                                                                        <?php
                                                                                        $count = 0
                                                                                        ?>
                                                                                        @foreach($similars as $similar)
                                                                                        @if($count<4)
                                                                                        <div class="slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 350px;">
                                                                                                <div>
                                                                                                    <div style="width: 100%; display: inline-block;">
                                                                                                        <div class="product-box">
                                                                                                            <div class="img-wrapper">
                                                                                                                <div class="front">
                                                                                                                    <a href="http://localhost:8000/product_details_1" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{$similar->imageone}};); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                                                                        <img src="{{$similar->imageone}}" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                                <div class="back">
                                                                                                                    <a href="http://localhost:8000/product_details_1" tabindex="0" class="bg-size blur-up lazyloaded" style="background-image: url(&quot;{{$similar->imagetwo}};); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                                                                                                        <img src="{{$similar->imagetwo}}" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                                <div class="label-block">
                                                                                                                    <span class="label label-black">New</span>
                                                                                                                    <span class="label label-theme">50% Off</span>
                                                                                                                </div>
                                                                                                                <div class="cart-wrap">
                                                                                                                    <ul>
                                                                                                                    </ul>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="product-details">
                                                                                                                <div class="rating-details">
                                                                                                                    <span class="font-light grid-content">{{$similar->categories}}</span>
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
                                                                                                                <div class="main-price" id="quick-view">
                                                                                                                    <a href="http://localhost:8000/product_details_1" class="font-default" tabindex="0">
                                                                                                                        <h5>
                                                                                                                            {{$similar->name}}</h5>
                                                                                                                    </a>
                                                                                                                    <h3 class="theme-color">€{{$similar->price}}</h3>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        @endif
                                                                                                <?php
                                                                                                $count=$count+1
                                                                                                ?>
                                                                                    @endforeach



                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>


    @stop
