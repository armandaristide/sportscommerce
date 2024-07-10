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

                                                <h3 class="price-detail">{{$product->price}}$ <del>{{$product->price*2}}$</del><span>50% off</span></h3>
                                                <h4 style="text-align: justify">{{$product->description}}</h4>

                                                <form class="row g-2" method="POST" action="{{ route('submit.cart') }}" enctype="multipart/form-data">
                                                    @csrf
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
                                                        <style>
                                                            /* CSS to hide the default select option text */
                                                            .hidden-select {
                                                                appearance: none;
                                                                -moz-appearance: none;
                                                                -webkit-appearance: none;
                                                                background-image: url('data:image/svg+xml;utf8,<svg fill="none" viewBox="0 0 24 24" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>');
                                                                background-repeat: no-repeat;
                                                                background-position: right 10px top 50%;
                                                                background-size: 20px;
                                                                padding-right: 30px; /* Adjust padding for the arrow */
                                                            }
                                                            .hidden-select option:first-of-type {
                                                                display: none; /* Hide the first default option */
                                                            }
                                                        </style>
                                                    <div id="selectSize" class="addeffect-section product-description border-product">
                                                        <h6 class="product-title size-text">select size
                                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#sizemodal">size chart</a>
                                                        </h6>

                                                        <h6 class="error-message">please select size</h6>

                                                        <div class="size-box">
                                                            <select name="size" class="form-control hidden-select" required>
                                                                <option value="" disabled selected></option> <!-- Default empty option -->
                                                                @foreach(explode(',', $product->size) as $size)
                                                                    <option value="{{ $size }}">{{ $size }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <h6 class="product-title product-title-2 d-block">quantity</h6>

                                                        <div class="qty-box">
                                                            <div class="input-group" >
                                                <span class="input-group-prepend" >
                                                    <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="" >
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </span>
                                                                <input type="number" name="quantity" class="form-control input-number" value="1" maxlength="2"  min="0" max="{{$product->quantity}}">
                                                                <span class="input-group-prepend" >
                                                    <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="" >
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-buttons">
                                                        <a href="{{route('invoicepage')}}" class="btn btn-solid">
                                                            <i class="fa fa-bookmark fz-16 me-2"></i>
                                                            <span>BUY NOW</span>
                                                        </a>
                                                        <button type="submit" id="cartEffect" class="btn btn-solid hover-solid btn-animation">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            <span>Add To Cart</span>
                                                        </button>
                                                    </div>
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




    @stop
