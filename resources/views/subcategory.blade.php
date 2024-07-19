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
                            <h3 class="breadcrumb-item text-capitalize text-white"><a  class="text-capitalize"  style="color:#fcb320" href="{{route('categories',$cat)}}">
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
                                    <div class="d-flex justify-content-end mb-3">
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Filters
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right p-3" aria-labelledby="filterDropdown">
                                                <form method="GET" action="{{ route('filter',  $cat . '_' . $subcate ) }}">
                                                <!-- Price Filter -->
                                                <div class="dropdown" onclick="event.stopPropagation();">
                                                    <label for="price_range">Price Range</label>
                                                    <select id="price_range" name="price_range" class="form-control">
                                                        <option value="">All</option>
                                                        <option value="0-50">$0 - $50</option>
                                                        <option value="51-100">$51 - $100</option>
                                                        <option value="101-200">$101 - $200</option>
                                                        <!-- Add more price ranges as needed -->
                                                    </select>
                                                </div>

                                                <!-- Brand Filter -->
                                                <div class="dropdown" onclick="event.stopPropagation();">
                                                    <label for="brand">Brand</label>
                                                    <select id="brand" name="brand" class="form-control" >
                                                        <option value="">All</option>
                                                        @foreach($products->unique('brand') as $product)
                                                            <option  name = "brand" value="{{ $product->brand }}">{{ $product->brand }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- Size Filter -->
                                                <div class="dropdown" onclick="event.stopPropagation();">
                                                    <label for="size">Size</label>
                                                    <select id="size" name="size" class="form-control">
                                                        <option value="">All</option>
                                                        @foreach($products->unique('size') as $product)
                                                            <option value="{{ $product->size }}">{{ $product->size }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <!-- Apply Filters Button -->
                                                <button type="submit" class="btn btn-primary mt-3" >Apply Filters</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Display Products -->
{{--                                <div class="row" id="productsContainer">--}}
{{--                                    @foreach($products as $product)--}}
{{--                                        <div class="col-md-3 mb-4">--}}
{{--                                            <div class="card">--}}
{{--                                                <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <h5 class="card-title">{{ $product->name }}</h5>--}}
{{--                                                    <p class="card-text">${{ $product->price }}</p>--}}
{{--                                                    <a href="#" class="btn btn-primary">View Details</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
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
                                        <h3 class="text-capitalize">{{$cat}} {{$tag}}: NOT AVAILABLE AT THE MOMENT</h3>
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
