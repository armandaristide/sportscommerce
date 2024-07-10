@extends('layouts.master')
@section('title','WELCOME | LEVEL UP ')
@section('content')


    <section class="pt-0 overflow-hidden">
        <div>
            <div class="banner-slider box-arrow">
                <!-- Slider 1 Start -->
                <div class="banner-poster">
                    <div class="slider-right-detail">
                        <h4>New Festival Offer</h4>
                        <div class="offer-box">
                            <h6>65% off</h6>
                        </div>
                    </div>

                    <div class="slider-bg">
                        <div class="bg-text">
                            <span>Sport shoes</span>
                        </div>

                        <div class="bg-circle gradient-purple"></div>
                        <img src="assets/images/shoes/1-.png" class="shoes-1 img-fluid blur-up lazyload" alt="">
                    </div>

                    <div class="sugestion-product d-xl-block d-none">
                        <h3>Quality Products</h3>
                        <h6>Our Sports Shoes Collection</h6>
                    </div>


                    <div class="price-number">
                        <h2>$79.00 <span><del>$65.00</del></span></h2>
                        <h6>Step up your style game with these sleek kicks! Comfortable, durable, and on-trend.</h6>
                    </div>
                    <div class="slider-arrow-2">
                        <div class="left-arrow d-lg-block d-none"></div>
                        <div class="right-arrow d-lg-block d-none"></div>
                    </div>
                </div>
                <!-- Slider 1 End -->

                <!-- Slider 2 Start -->
                <div class="banner-poster">
                    <div class="slider-right-detail">
                        <h4>New Festival Offer</h4>
                        <div class="offer-box">
                            <h6>65% off</h6>
                        </div>
                    </div>

                    <div class="slider-bg">
                        <div class="bg-text">
                            <span>Nike shoes</span>
                        </div>

                        <div class="bg-circle red-gradient"></div>
                        <img class="shoes-1 img-fluid blur-up lazyload" alt="" src="assets/images/shoes/slider-2.png">
                    </div>

                    <div class="sugestion-product d-xl-block d-none">
                        <h3>Quality Products</h3>
                        <h6>Our Sports Shoes Collection</h6>


                    </div>

                    <div class="price-number">
                        <h2>$79.00 <span><del>$65.00</del></span></h2>
                        <h6>Step up your style game with these sleek kicks! Comfortable, durable, and on-trend.</h6>
                    </div>

                    <div class="slider-arrow-2">
                        <div class="left-arrow d-lg-block d-none"></div>
                        <div class="right-arrow d-lg-block d-none"></div>
                    </div>
                </div>
                <!-- Slider 2 End -->

            </div>
        </div>
    </section>


    <!-- products categories-->
    <section class="mb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title title1 text-left">
                        <h2>Product Categories</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-3">
                <div class="col-xxl-12  mx-auto">
                    <div class="row">
                        <div class="col-4">
                            <a href="/categories_football" class="category-wrap category-padding" style="border-radius: 25px">
                                <img src="https://www.dropbox.com/scl/fi/kblfpjr9li6rbh8t0w2v1/football.png?rlkey=1x3suqfiazoens0tg3g3md0iy&st=puhrzhzt&raw=1"  class="bg-img blur-up lazyload"
                                     alt="category image">
                                <div class="category-content category-text-1">
                                    <h2 class="text-white">Football</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/categories_basketball" class="category-wrap category-padding" style="border-radius: 25px">
                                <img src="https://www.dropbox.com/scl/fi/5eerew9j2p2yjt7o892a2/basketball.png?rlkey=cwzlhfsxzw1hfx9aflynsmsho&st=g2rbr7xe&raw=1"  class="bg-img blur-up lazyload"
                                     alt="category image">
                                <div class="category-content category-text-1">
                                    <h2 class="text-white">Basketball</h2>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/categories_tennis" class="category-wrap category-padding" style="border-radius: 25px">
                                <img src="https://www.dropbox.com/scl/fi/mqw48zsb1p0lr5qr5rzdd/tennis.png?rlkey=3sfwtp1yksodlv8ch991cc1qi&st=tzgp3zgj&raw=1"  class="bg-img blur-up lazyload"
                                     alt="category image">
                                <div class="category-content category-text-1">
                                    <h2 class="text-white">Tennis</h2>
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-4">
                            <a href="/categories_cricket" class="category-wrap category-padding" style="border-radius: 25px">
                                <img src="https://www.dropbox.com/scl/fi/41ugij799k8ozqwnihm7b/cricket.png?rlkey=5e9r5a2ka4g7pv5gp8wf14kws&st=zm2icxxi&raw=1" class="bg-img blur-up lazyload"
                                     alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="text-white">Cricket</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/categories_volleyball" class="category-wrap category-padding" style="border-radius: 25px">
                                <img src="https://www.dropbox.com/scl/fi/1js4s7nlpahtcjxzv98z2/volleyball.png?rlkey=9gglezh3i3rab019t6dyt2pwx&st=5jom2qla&raw=1" class="bg-img blur-up lazyload"
                                     alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="text-white">Volleyball</h3>
                                </div>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="/categories_athletics" class="category-wrap category-padding" style="border-radius: 25px">
                                <img src="https://www.dropbox.com/scl/fi/5xna6c92w85bb254wye0k/athletics.png?rlkey=8vowqab38m0vivyesxtuho7y8&st=4wshw67j&raw=1" class="bg-img blur-up lazyload"
                                     alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="text-white">Athletics</h3>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- products categories end-->


    <!-- product section start -->
    @if(count($products)>0)
        <section class="ratio_asos mb-6">
            <div class="container">
                <div class="row m-0">
                    <div class="col-sm-12 p-0">
                        <div class="title title1 text-left">
                            <h2>Recent Products</h2>
                        </div>
                        <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow ">
                            @php
                                $count = 0;
                            @endphp
                            @foreach($products as $product)
                                @if($count < 4)
                                    <div>
                                        <div class="product-box">
                                            <div class="img-wrapper">
                                                <div class="front">
                                                    <a href="{{route('productdets',$product->id)}}">
                                                        <img src="{{$product->imageone}}"
                                                             class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="{{route('productdets',$product->id)}}">
                                                        <img src="{{$product->imagetwo}}"
                                                             class="bg-img blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                                <div class="label-block">
                                                    <span class="label label-black">New</span>
                                                    <span class="label label-theme">50% Off</span>
                                                </div>
                                                <div class="cart-wrap">
                                                    <ul>
                                                        @if(Route::has('login'))
                                                            @auth
                                                                <li>
                                                                    <a href="javascript:void(0)" class="addtocart-btn"
                                                                       data-bs-toggle="modal" data-bs-target="#addtocart">
                                                                        <i data-feather="shopping-bag"></i>
                                                                    </a>
                                                                </li>
                                                            @endauth
                                                            @endif

                                                        <li>
                                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                               data-bs-target="#quick-view">
                                                                <i data-feather="eye"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
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
                                                <div class="main-price" id="quick-view">
                                                    <a href="{{route('productdets',$product->id)}}" class="font-default">
                                                        <h5>{{$product->name}}</h5>
                                                    </a>
                                                    <div class="listing-content">
                                                        <span class="font-light">{{$product->filter}}</span>
                                                        <p class="font-light">{{$product->description}}</p>
                                                    </div>
                                                    <h3 class="theme-color">${{$product->price}}</h3>
                                                    <button onclick="location.href = '#';" class="btn listing-content">Add
                                                        To Cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $count = $count+1
                                    @endphp
                                @else
                                @break
                                @endif
                                    @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endif
    <!-- product section end -->





    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/feather/feather.min.js"></script>

    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- Add To Home js -->
    <script src="assets/js/pwa.js"></script>

    <!-- Timer Js -->
    <script src="assets/js/timer1.js"></script>

    <!-- Slick js-->
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/slick/slick-animation.min.js"></script>
    <script src="assets/js/slick/custom_slick.js"></script>

    <!-- newsletter js -->
    <script src="assets/js/newsletter.js"></script>

    <!-- add to cart modal resize -->
    <script src="assets/js/cart_modal_resize.js"></script>

    <!-- Notify js-->
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>

    <!-- script js -->
    <script src="assets/js/theme-setting.js"></script>
    <script src="assets/js/script.js"></script>

@stop
