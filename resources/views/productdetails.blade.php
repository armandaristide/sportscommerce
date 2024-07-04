@extends('layouts.master')
@section('title','Product Details | LEVEL UP')
@section('content')
    @if($product->categories== "football")
        <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihbv_kwYq0cqbHBk15PcUwygXa_JGvxK70vUu2yHM6sjql-cMB4-wDOPwk_1ojZdBBGev6x1soXUYBrUvqM8OnSwPGKMSuH5P3c=s1600-rw-v1'); background-size: cover">
            @elseif($product->categories== "basketball")
                <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihb21nBUo3P4ZtYAab4XKWcogWPvHUH7nYdDO6fDxJWFP6sGbkCRmGn2YmPIkt5UC8Irqou1dNLZn9OSXPAHXSB2fA3ksmwCxzI=s1600-rw-v1'); background-size: cover">
                    @elseif($product->categories== "tennis")
                        <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihafeynsQd6ZKq6eOIuRAAKGsBPALvr7eZi79h8wp_tmbmZ-mM4z6w7cI1wY8GFByXcsewl3kHKRaxm5Gq9TWveNZe9jtgxN6B0=s1600-rw-v1'); background-size: cover">
                            @elseif($product->categories== "volleyball")
                                <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihZTMfzpu4TflPLIU1dYMPZki42eKnY6gCC41qnedx3xn1PctVRN7z3Wb2WK4DbPY8v3gc2MSUMtrcu_BcQKIMu0eQfymI_eiHM=s1600-rw-v1'); background-size: cover">
                                    @elseif($product->categories== "cricket")
                                        <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihb5afoALxxaR1lXiKwlT8zRdHjQbNF_PutojIeMzTz0hp6n6sek6CjPcXJZdss5Xhf3Bb38-QB3JN5H5LoprZZdW60ozj-mDg=s1600-rw-v1'); background-size: cover">
                                            @elseif($product->categories== "athletics")
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

                                                <h3 class="price-detail">{{$product->price}} <del>{{$product->price*2}}</del><span>50% off</span></h3>
                                                <h4 style="text-align: justify">{{$product->description}}</h4>

                                                <div class="color-image">
                                                    <div class="image-select">
                                                        <h5>Color :</h5>
                                                        <ul class="image-section">
                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <img src="{{$product->imageone}}" class="img-fluid blur-up lazyloaded" alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <img src="{{$product->imagetwo}}" class="img-fluid blur-up lazyloaded" alt="">
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <img src="{{$product->imagethree}}" class="img-fluid blur-up lazyloaded" alt="">
                                                                </a>
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
                                                        <i class="fa fa-bookmark fz-16 me-2"></i>
                                                        <span>BUY NOW</span>
                                                    </a>
                                                    <a href="javascript:void(0)" id="cartEffect" class="btn btn-solid hover-solid btn-animation">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <span>Add To Cart</span>
                                                    </a>
                                                </div>


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
