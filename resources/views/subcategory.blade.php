@extends('layouts.master')
@section('title','SUBCATEGORIES | LEVEL UP ')
@section('content')
    <!-- Breadcrumb section start -->
    @if($cat== "football")
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
                                                        <section class="breadcrumb-section section-b-space" style="background-image: url('https://www.dropbox.com/scl/fi/vuj69cj5rlm0hcr3l9wjz/Sports.png?rlkey=tzjillqrsjrwj7wr4ff8brima&st=lvbntzs4&raw=1');background-size: cover">
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
