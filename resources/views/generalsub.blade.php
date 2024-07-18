@extends('layouts.master')
@section('title','GENERAL SUBCATEGORIES | LEVEL UP ')
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
                                                                    <h3 class="breadcrumb-item text-capitalize text-white"><a  class="text-capitalize"  style="color:#fcb320" href="{{route('categories',$cat)}}">
                                                                            {{$cat}}
                                                                        </a>/ <a style="color:#f0f0f0"> {{$subcat}} </a>
                                                                    </h3>

                                                                    <div class="col-12">
                                                                        <h1 class="text-white">All {{$cat}} {{$subcat}}</h1>

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
                                                                                    <h2>{{$cat}} {{$subcat}}</h2>
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
