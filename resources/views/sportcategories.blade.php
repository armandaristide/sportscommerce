@extends('layouts.master')
@section('title','SPORTS CATEGORY | E COMMERCE')
@section('content')
    <!-- Breadcrumb section start -->
    @if($cat== "football")
        <section class="breadcrumb-section section-b-space" style="background-image: url('https://lh3.googleusercontent.com/drive-viewer/AKGpihbv_kwYq0cqbHBk15PcUwygXa_JGvxK70vUu2yHM6sjql-cMB4-wDOPwk_1ojZdBBGev6x1soXUYBrUvqM8OnSwPGKMSuH5P3c=s1600-rw-v1'); background-size: cover">
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
                <h3 class="breadcrumb-item text-capitalize"><a style="color:#fcb320" href="{{route('categories',$cat)}}">
                        SPORTS</a>
                    <a class = "text-white"> / {{$cat}} </a>
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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title title1 text-left">
                                <h2>Clothing</h2>
                            </div>
                        </div>
                        <div class="col-md-6 float-right">
                            <div style="text-align: right">
                                <a href="{{route('generalsub',$cat.'_'.'Clothing')}}">
                                    <button type="button" class="btn rounded-3 btn-solid-default btn-spacing">
                                        <span>SEE ALL</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

{{--                SHIRTS--}}
                @if($cat=="football")
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="https://www.dropbox.com/scl/fi/eicujolvsbm7kkgxlot4s/jersey.png?rlkey=flvcq0khqutyk46tjjrwz4wnz&st=9aetoyev&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
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
                                <img src="https://www.dropbox.com/scl/fi/ucgdhbrpf05v15dzie7g6/f2f3f5-16.png?rlkey=02hrgpgvbp1r6f7kdh2rvmvzb&st=wuzvcmxe&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Jersey</h2>
                                    <span>Check out our {{$cat}} jerseys</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="tennis")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shirts")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/j7xenokmplf2j7m7kkknd/f2f3f5-23.png?rlkey=39s4ybmhskdv6vjquqp098b4e&st=qf4mc3ex&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shirts")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shirts</h2>
                                    <span>Check out our {{$cat}} shirts</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="cricket")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/hf47kplphy4oh6xwamk0x/f2f3f5-11.png?rlkey=sohbyqxk43q28fmepudogt08w&st=7yie5gzg&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shirts</h2>
                                    <span>Check out our {{$cat}} shirts</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="athletics")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/hhnfmybl2v8kyio2xzup2/f2f3f5-19.png?rlkey=rn3c6yt1c1fu6g0obvto0slln&st=lrvlqvqc&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shirts</h2>
                                    <span>Check out our {{$cat}} shirts</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="volleyball")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/nt19cj1vcyk1xwzgtnofb/f2f3f5-26.png?rlkey=yqjatlvj5b2mg75mfx09ysczb&st=2q9uphf5&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shirts</h2>
                                    <span>Check out our {{$cat}} shirts</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/kt1uk0rbutvvk6nchmrea/f2f3f5-29.png?rlkey=ztusqd1japfl7aoasq323xi5e&st=d0hyuhtv&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shirts</h2>
                                    <span>Check out our {{$cat}} shirts</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif

{{--                SHORTS--}}

                @if($cat=="cricket")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/shorts.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/l49retugm11pq4um11k2q/f2f3f5-12.png?rlkey=t7zgln81hz0za6ckyfog1pjwf&st=ozmdxoz2&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Trousers</h2>
                                    <span>Check out our {{$cat}} trousers</span>
                                </div>
                            </a>
                        </div>
                    </div>

                @elseif($cat=="football")
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/shorts.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="https://www.dropbox.com/scl/fi/corhk8samnalttpxy53ii/f2f3f5-14.png?rlkey=1ildaoq77unm2op6yu2uvzf9a&st=bs6peys5&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">{{$cat}} Shorts</h2>
                                <span>Check out our {{$cat}} shorts</span>
                            </div>
                        </a>
                    </div>
                </div>

                @elseif($cat=="basketball")
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/shorts.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="https://www.dropbox.com/scl/fi/ahi27hrlxwmsy2l5f0l10/f2f3f5-17.png?rlkey=4fegth2ba1v1vzxesyibwjpyv&st=ddkrsnas&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">{{$cat}} Shorts</h2>
                                <span>Check out our {{$cat}} shorts</span>
                            </div>
                        </a>
                    </div>
                </div>

                @elseif($cat=="athletics")
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/shorts.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="https://www.dropbox.com/scl/fi/nwm4xzptrob51lp3f59we/f2f3f5-20.png?rlkey=ytqx36oqmlmwlw1x9nringitx&st=t833gyu3&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">{{$cat}} Shorts</h2>
                                <span>Check out our {{$cat}} shorts</span>
                            </div>
                        </a>
                    </div>
                </div>

                @elseif($cat=="tennis")
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/shorts.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="https://www.dropbox.com/scl/fi/8sm30ynt43tj7he6scs80/f2f3f5-24.png?rlkey=elf77fivk8j15bpx2ljtta862&st=26xeund2&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">{{$cat}} Shorts/Skirts</h2>
                                <span>Check out our {{$cat}} shorts and skirts</span>
                            </div>
                        </a>
                    </div>
                </div>

                @elseif($cat=="volleyball")
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/shorts.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="https://www.dropbox.com/scl/fi/03s73pdbjzd8ghg1zsp4t/f2f3f5-27.png?rlkey=16knh4x1ly46gy1he65d840tw&st=36ic4dys&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Shorts")}}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">{{$cat}} Shorts</h2>
                                <span>Check out our {{$cat}} shorts</span>
                            </div>
                        </a>
                    </div>
                </div>

                @else
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
                @endif

{{--                TRACK SUITS--}}
                @if($cat=="cricket")
                    <div class="col-lg-4">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/tracksuits.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/4iktp71of9ssodjctgf4m/f2f3f5-13.png?rlkey=p8mlc7v7myxf5ot63crer34rg&st=4t7oyp14&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Track Suits</h2>
                                    <span>Check out our {{$cat}} track suits</span>
                                </div>
                            </a>
                        </div>
                    </div>

                @elseif($cat == "football")
                    <div class="col-lg-4">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/tracksuits.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/dyyt9j9jri85bzlfxglim/f2f3f5-15.png?rlkey=4jb6ticevb5v9omtv7panwlhj&st=m41d690x&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Track Suits</h2>
                                    <span>Check out our {{$cat}} track suits</span>
                                </div>
                            </a>
                        </div>
                    </div>

                @elseif($cat == "basketball")
                <div class="col-lg-4">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/tracksuits.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/04prqmd6j2qk7ojp5mhp3/f2f3f5-18.png?rlkey=el9wwy7binccrtbqyerl5a35t&st=rof8u9rc&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Track Suits</h2>
                                    <span>Check out our {{$cat}} track suits</span>
                                </div>
                            </a>
                        </div>
                    </div>

                @elseif($cat == "athletics")
                <div class="col-lg-4">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/tracksuits.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/1tvkc4lrmj8mx9hmdgbay/f2f3f5-21.png?rlkey=hlft1tkpgpryptcjzqw31fu5d&st=jaqmu89t&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Track Suits</h2>
                                    <span>Check out our {{$cat}} track suits</span>
                                </div>
                            </a>
                        </div>
                    </div>

                @elseif($cat == "tennis")
                <div class="col-lg-4">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/tracksuits.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/yn9jgmktm4kg1lbkftxdq/f2f3f5-25.png?rlkey=dh6ip5d2kapxbrh0955gee101&st=3l1z4w81&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Track Suits</h2>
                                    <span>Check out our {{$cat}} track suits</span>
                                </div>
                            </a>
                        </div>
                    </div>

                @elseif($cat == "volleyball")
                <div class="col-lg-4">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/tracksuits.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/qojba2dt9rwtip5wzga3q/f2f3f5-28.png?rlkey=lxezilhy2a23tizcv8uocf6dx&st=hlewx5jt&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Track Suits")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Track Suits</h2>
                                    <span>Check out our {{$cat}} track suits</span>
                                </div>
                            </a>
                        </div>
                    </div>

                @else
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
                @endif

            </div>
        </div>
    </section>

    <!--Footwears-->

    <section class="ratio2_1 banner-style-2">
        <div class="container">
            <div class="row gy-4">
                <div class="col-sm-12 p-0">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="title title1 text-left">
                                <h2>Footwears</h2>
                            </div>
                        </div>
                        <div class="col-md-6 float-right">
                            <div style="text-align: right">
                                <a href="{{route('generalsub',$cat.'_'.'Footwears')}}">
                                    <button type="button" class="btn rounded-3 btn-solid-default btn-spacing">
                                        <span>SEE ALL</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                @if($cat=="football")
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Boots")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/gowgw2srgilo1llqjh9e7/boots.png?rlkey=l49zes3gy1lchu9ghhjllslr7&st=sv8r06bw&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="https://www.dropbox.com/scl/fi/gowgw2srgilo1llqjh9e7/boots.png?rlkey=l49zes3gy1lchu9ghhjllslr7&st=sv8r06bw&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Boots")}}" class="contain-banner">
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
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Hightops")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/4j290b4wc2c7dkc6g9vs4/f2f3f5-37.png?rlkey=appg4haw5vgul14pq691q5ffv&st=emeqtboc&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/4j290b4wc2c7dkc6g9vs4/f2f3f5-37.png?rlkey=appg4haw5vgul14pq691q5ffv&st=emeqtboc&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Hightops")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Hightops</h2>
                                    <span>Check out our {{$cat}} shoes</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="tennis")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."shoes")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/hxfgqjrzv3gegxihpk1xb/f2f3f5-50.png?rlkey=ck258krdqthlpvuqnjqjje473&st=rqk4inme&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/hxfgqjrzv3gegxihpk1xb/f2f3f5-50.png?rlkey=ck258krdqthlpvuqnjqjje473&st=rqk4inme&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."shoes")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shoes</h2>
                                    <span>Check out our {{$cat}} shoes</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="cricket")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Shoes")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/fs3gh5caz8e1jfcxuetnj/f2f3f5-30.png?rlkey=xyh5ton5zavssv5falwxetp1n&st=6p3u9q3a&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/fs3gh5caz8e1jfcxuetnj/f2f3f5-30.png?rlkey=xyh5ton5zavssv5falwxetp1n&st=6p3u9q3a&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Shoes")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} shoes</h2>
                                    <span>Check out our {{$cat}} shoes</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="athletics")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Trackspikes")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/gfaya00kctdh6ntktwrci/f2f3f5-43.png?rlkey=m33m8jfwcwsobkni38c5vn90g&st=i2n0e35d&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/gfaya00kctdh6ntktwrci/f2f3f5-43.png?rlkey=m33m8jfwcwsobkni38c5vn90g&st=i2n0e35d&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Trackspikes")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Track Spikes</h2>
                                    <span>Check out our {{$cat}} track spikes</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="volleyball")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Shoes")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/hpqjgz25o46rwuiwasgm4/f2f3f5-56.png?rlkey=ufzo8d108jaaqbxwpip3nhsjp&st=tlxzxdcx&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/hpqjgz25o46rwuiwasgm4/f2f3f5-56.png?rlkey=ufzo8d108jaaqbxwpip3nhsjp&st=tlxzxdcx&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Shoes")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shoes</h2>
                                    <span>Check out our {{$cat}} shoes</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @else
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/boots.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="assets/img/football/boots.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="#" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Shoes</h2>
                                    <span>Check out our {{$cat}} shoes</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif


{{--                socks--}}
                @if($cat=="cricket")
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Socks")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/8t5qljvfa6a1v5n6yqhx0/f2f3f5-31.png?rlkey=781vtvtrxzd9x1wuirv3ao724&st=9f6l2fpk&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="https://www.dropbox.com/scl/fi/8t5qljvfa6a1v5n6yqhx0/f2f3f5-31.png?rlkey=781vtvtrxzd9x1wuirv3ao724&st=9f6l2fpk&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Socks")}}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Socks</h2>
                                <span>Check out our {{$cat}} Socks</span>
                            </div>
                        </a>
                    </div>
                </div>

                @elseif($cat=="football")
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Socks")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/u34x5o9dvulain8jbi8fb/socks.png?rlkey=agcg8vsty9g56gi4afod66txo&st=z4ueo5e5&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="https://www.dropbox.com/scl/fi/u34x5o9dvulain8jbi8fb/socks.png?rlkey=agcg8vsty9g56gi4afod66txo&st=z4ueo5e5&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Socks")}}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Socks</h2>
                                <span>Check out our {{$cat}} Socks</span>
                            </div>
                        </a>
                    </div>
                </div>

                @elseif($cat=="basketball")
                <div class="col-lg-4 col-md-6">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Socks")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/891m89jbg4a9w4f7tnbfz/f2f3f5-39.png?rlkey=cdfxswyjgfbp1j0ri3ezs1lb6&st=his3scoy&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="https://www.dropbox.com/scl/fi/891m89jbg4a9w4f7tnbfz/f2f3f5-39.png?rlkey=cdfxswyjgfbp1j0ri3ezs1lb6&st=his3scoy&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Socks")}}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Socks</h2>
                                <span>Check out our {{$cat}} Socks</span>
                            </div>
                        </a>
                    </div>
                </div>

                @elseif($cat=="athletics")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Socks")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/kl37aqj8p5z7ovde2dd0i/f2f3f5-44.png?rlkey=54o0jgzubeeo0dd8q9cbn747k&st=jwlkp0gl&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/kl37aqj8p5z7ovde2dd0i/f2f3f5-44.png?rlkey=54o0jgzubeeo0dd8q9cbn747k&st=jwlkp0gl&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Socks")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Socks</h2>
                                    <span>Check out our {{$cat}} Socks</span>
                                </div>
                            </a>
                        </div>
                    </div>

                @elseif($cat=="tennis")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Socks")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/ga3xb8kvjxesa71131l90/f2f3f5-51.png?rlkey=pijmqr49bd2amfflmiw4fjil9&st=hd7ieq1n&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/ga3xb8kvjxesa71131l90/f2f3f5-51.png?rlkey=pijmqr49bd2amfflmiw4fjil9&st=hd7ieq1n&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Socks")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Socks</h2>
                                    <span>Check out our {{$cat}} Socks</span>
                                </div>
                            </a>
                        </div>
                    </div>

                @elseif($cat=="volleyball")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Socks")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/o0pmk6ms81k7w7kekis5r/f2f3f5-57.png?rlkey=kwfh806c0f7zesn8e2o7ysye9&st=mqd0h6ag&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/o0pmk6ms81k7w7kekis5r/f2f3f5-57.png?rlkey=kwfh806c0f7zesn8e2o7ysye9&st=mqd0h6ag&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Socks")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Socks</h2>
                                    <span>Check out our {{$cat}} Socks</span>
                                </div>
                            </a>
                        </div>
                    </div>

                @else
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/socks.pn); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="assets/img/football/socks.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="#" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">{{$cat}} Socks</h2>
                                    <span>Check out our {{$cat}} Socks</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif

{{--                RUNNERS--}}
                @if($cat=="cricket")
                <div class="col-lg-4">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Shinguard")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/bjjg3j3ua5sm7srir6etr/f2f3f5-32.png?rlkey=ys9aglpwtxkq2u9eb4kci4sr1&st=96i6ttj5&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="https://www.dropbox.com/scl/fi/bjjg3j3ua5sm7srir6etr/f2f3f5-32.png?rlkey=ys9aglpwtxkq2u9eb4kci4sr1&st=96i6ttj5&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Shinguard")}}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Shin Guards</h2>
                                <span>Check out our {{$cat}} shin guards</span>
                            </div>
                        </a>
                    </div>
                </div>
                @elseif($cat=="football")
                    <div class="col-lg-4">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Shinguard")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/3bej4v1k2doecj7sohitm/f2f3f5-36.png?rlkey=11em408n5o1g7hizmw852ug8m&st=5ujztzzr&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="https://www.dropbox.com/scl/fi/3bej4v1k2doecj7sohitm/f2f3f5-36.png?rlkey=11em408n5o1g7hizmw852ug8m&st=5ujztzzr&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Shinguard")}}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">Shin Guard</h2>
                                <span>Check out our {{$cat}} shin guards</span>
                            </div>
                        </a>
                    </div>
                </div>

                @elseif($cat=="basketball")
                <div class="col-lg-4">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Shoes")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/zz6f2d4tv2w56zbf9k9o7/f2f3f5-38.png?rlkey=3enuprxtxq6lzfzl32urp1h0y&st=1ya2d2d3&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="https://www.dropbox.com/scl/fi/zz6f2d4tv2w56zbf9k9o7/f2f3f5-38.png?rlkey=3enuprxtxq6lzfzl32urp1h0y&st=1ya2d2d3&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Shoes")}}" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">{{$cat}} shoes</h2>
                                <span>Check out our {{$cat}} shoes</span>
                            </div>
                        </a>
                    </div>
                </div>

                @elseif($cat=="athletics")
                    <div class="col-lg-4">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Running Shoes")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/l5zk1hg29435eassy274j/f2f3f5-45.png?rlkey=svnvjd4q20yejj50cosldguwl&st=rl7lj7kl&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/l5zk1hg29435eassy274j/f2f3f5-45.png?rlkey=svnvjd4q20yejj50cosldguwl&st=rl7lj7kl&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Running Shoes")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Running shoes</h2>
                                    <span>Check out our Running shoes</span>
                                </div>
                            </a>
                        </div>
                    </div>

                @elseif($cat=="tennis")
                    <div class="col-lg-4">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Ankle Braces")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/6i1oyaxpgk1zmmjyggg1q/f2f3f5-52.png?rlkey=pjq2wyp8chh44hd6lu76i16te&st=9gl3f1l6&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/6i1oyaxpgk1zmmjyggg1q/f2f3f5-52.png?rlkey=pjq2wyp8chh44hd6lu76i16te&st=9gl3f1l6&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Ankle Braces")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Ankle braces</h2>
                                    <span>Check out our {{$cat}} Ankle braces</span>
                                </div>
                            </a>
                        </div>
                    </div>

                @elseif($cat=="volleyball")
                    <div class="col-lg-4">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Knee Pads")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/qeyvmhsfyqpavkde867ba/f2f3f5-58.png?rlkey=1q9kkrrrvh6t1hndiyvin4gvo&st=enp464d3&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/qeyvmhsfyqpavkde867ba/f2f3f5-58.png?rlkey=1q9kkrrrvh6t1hndiyvin4gvo&st=enp464d3&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Footwear'.'_'.$cat.'_'."Knee Pads")}}" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Knee Pads</h2>
                                    <span>Check out our {{$cat}} Knee Pads</span>
                                </div>
                            </a>
                        </div>
                    </div>

                @else
                    <div class="col-lg-4">
                    <div class="collection-banner p-bottom p-center text-center">
                        <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/runners.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/img/football/runners.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                        </a>
                        <a href="#" class="contain-banner">
                            <div class="banner-content with-big">
                                <h2 class="mb-2">{{$cat}} Shoes</h2>
                                <span>Check out our {{$cat}} shoes</span>
                            </div>
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>

                <!--Accessories-->
                <section class="ratio2_1 banner-style-2">
                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-sm-12 p-0">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="title title1 text-left">
                                            <h2>{{$cat}} Accessories</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6 float-right">
                                        <div style="text-align: right">
                                            <a href="{{route('generalsub',$cat.'_'.'Accessories')}}">
                                                <button type="button" class="btn rounded-3 btn-solid-default btn-spacing">
                                                    <span>SEE ALL</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

{{--                            TRAINING GEAR--}}
                            @if($cat == "cricket")
                                <div class="col-lg-4 col-md-6">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Training Gear")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/n4liglctzkcbfo7tht45o/f2f3f5-33.png?rlkey=7m9ejay1gt778dyqfnwlnpv4q&st=qomxrrkw&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/n4liglctzkcbfo7tht45o/f2f3f5-33.png?rlkey=7m9ejay1gt778dyqfnwlnpv4q&st=qomxrrkw&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Training Gear")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">Training Gear</h2>
                                                <span>Check out {{$cat}} training Gear</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @elseif($cat == "football")
                                <div class="col-lg-4 col-md-6">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Training Gear")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/smjen7u4bwxm504ekn54h/traininggear.png?rlkey=exm61x1gwr026y4mewcyo7man&st=1jllqwib&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/smjen7u4bwxm504ekn54h/traininggear.png?rlkey=exm61x1gwr026y4mewcyo7man&st=1jllqwib&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Training Gear")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">Training Gear</h2>
                                                <span>Check out {{$cat}} training Gear</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @elseif($cat == "basketball")
                                <div class="col-lg-4 col-md-6">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Training Gear")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/q2rkgm3m4ph1zbxigxdu8/f2f3f5-40.png?rlkey=a1k13dhml5cm9kxwv92l92sy3&st=r8ry3bmh&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/q2rkgm3m4ph1zbxigxdu8/f2f3f5-40.png?rlkey=a1k13dhml5cm9kxwv92l92sy3&st=r8ry3bmh&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Training Gear")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">Training Gear</h2>
                                                <span>Check out {{$cat}} training Gear</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @elseif($cat == "athletics")
                                <div class="col-lg-4 col-md-6">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Training Gear")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/ewz2qagsynq2pgg038chw/f2f3f5-46.png?rlkey=han7evh598srsepaagxnkghtx&st=eh2bqgj6&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/ewz2qagsynq2pgg038chw/f2f3f5-46.png?rlkey=han7evh598srsepaagxnkghtx&st=eh2bqgj6&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Training Gear")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">Training Gear</h2>
                                                <span>Check out {{$cat}} training Gear</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @elseif($cat == "tennis")
                                <div class="col-lg-4 col-md-6">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Training Gear")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/tga4vovvli2yr5ks51g1l/f2f3f5-53.png?rlkey=uo9xkuo9fpd5l94qt3vx0k4c4&st=ufqrrxto&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/tga4vovvli2yr5ks51g1l/f2f3f5-53.png?rlkey=uo9xkuo9fpd5l94qt3vx0k4c4&st=ufqrrxto&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Training Gear")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">Training Gear</h2>
                                                <span>Check out {{$cat}} training Gear</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            @elseif($cat == "volleyball")
                                <div class="col-lg-4 col-md-6">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Training Gear")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/hajiwec5iut7sjdq4so2r/f2f3f5-59.png?rlkey=pio0ssun99navd6fy9jr3811d&st=qs79a5ac&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/hajiwec5iut7sjdq4so2r/f2f3f5-59.png?rlkey=pio0ssun99navd6fy9jr3811d&st=qs79a5ac&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Training Gear")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">Training Gear</h2>
                                                <span>Check out {{$cat}} training Gear</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                @else
                                <div class="col-lg-4 col-md-6">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/traininggear.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="assets/img/football/traininggear.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="#" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">{{$cat}} Training Gear</h2>
                                                <span>Check out {{$cat}} training Gear</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            @endif

                            @if($cat == "cricket")
                            <div class="col-lg-4 col-md-6">
                                <div class="collection-banner p-bottom p-center text-center">
                                    <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Gloves")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/2c203fdrwttuffmnyv197/f2f3f5-34.png?rlkey=gcxx3ypb3xdtkzcnkzl4dlimy&st=pgj8jjkn&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="https://www.dropbox.com/scl/fi/2c203fdrwttuffmnyv197/f2f3f5-34.png?rlkey=gcxx3ypb3xdtkzcnkzl4dlimy&st=pgj8jjkn&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                    </a>
                                    <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Gloves")}}" class="contain-banner">
                                        <div class="banner-content with-big">
                                            <h2 class="mb-2">{{$cat}} Gloves</h2>
                                            <span>Check out our {{$cat}} gloves</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @elseif($cat == "football")
                            <div class="col-lg-4 col-md-6">
                                <div class="collection-banner p-bottom p-center text-center">
                                    <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Gloves")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/2en0b1ovveyppmz8jywgi/gloves.png?rlkey=z8cpmqlnac1c883cihvqdjbem&st=fsp878jf&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="https://www.dropbox.com/scl/fi/2en0b1ovveyppmz8jywgi/gloves.png?rlkey=z8cpmqlnac1c883cihvqdjbem&st=fsp878jf&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                    </a>
                                    <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Gloves")}}" class="contain-banner">
                                        <div class="banner-content with-big">
                                            <h2 class="mb-2">Gloves</h2>
                                            <span>Check out our {{$cat}} gloves</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            @elseif($cat == "basketball")
                            <div class="col-lg-4 col-md-6">
                                <div class="collection-banner p-bottom p-center text-center">
                                    <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Bands")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/caa0485z59boutnpkazds/f2f3f5-41.png?rlkey=km7827mon38e267uz8qs6kggd&st=3mk55no3&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="https://www.dropbox.com/scl/fi/caa0485z59boutnpkazds/f2f3f5-41.png?rlkey=km7827mon38e267uz8qs6kggd&st=3mk55no3&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                    </a>
                                    <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Bands")}}" class="contain-banner">
                                        <div class="banner-content with-big">
                                            <h2 class="mb-2">Bands</h2>
                                            <span>Check out our {{$cat}} head, wrist and arm bands</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            @elseif($cat == "athletics")
                                <div class="col-lg-4 col-md-6">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Poles")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/z1pz99uz0ge0p47ta9n9t/f2f3f5-49.png?rlkey=vj38ls1cxv1or7hceavt67aad&st=fj1j2izv&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/z1pz99uz0ge0p47ta9n9t/f2f3f5-49.png?rlkey=vj38ls1cxv1or7hceavt67aad&st=fj1j2izv&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Poles")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">Javelline, Batons and Pole Vaults</h2>
                                                <span>Check out our Javellines, Batons and Pole Vaults</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            @elseif($cat == "tennis")
                                <div class="col-lg-4 col-md-6">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Rackets")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/t2zwqaml5lcey1zv44jnh/f2f3f5-54.png?rlkey=izsgdk4rm4st7z6blsm16wrm3&st=89h2qjob&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/t2zwqaml5lcey1zv44jnh/f2f3f5-54.png?rlkey=izsgdk4rm4st7z6blsm16wrm3&st=89h2qjob&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Rackets")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">{{$cat}} rackets</h2>
                                                <span>Check out our {{$cat}} raclets</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            @elseif($cat == "volleyball")
                                <div class="col-lg-4 col-md-6">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Nets")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/7lcofnjz5kgqasf1d0250/f2f3f5-60.png?rlkey=uqxys59y7mmeoqdbvlo4e1jsg&st=74bjr54c&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/7lcofnjz5kgqasf1d0250/f2f3f5-60.png?rlkey=uqxys59y7mmeoqdbvlo4e1jsg&st=74bjr54c&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Nets")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">{{$cat}} nets</h2>
                                                <span>Check out our {{$cat}} nets</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            @else
                                <div class="col-lg-4 col-md-6">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Gloves")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/2c203fdrwttuffmnyv197/f2f3f5-34.png?rlkey=gcxx3ypb3xdtkzcnkzl4dlimy&st=pgj8jjkn&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/2c203fdrwttuffmnyv197/f2f3f5-34.png?rlkey=gcxx3ypb3xdtkzcnkzl4dlimy&st=pgj8jjkn&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="#" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">{{$cat}} Gloves</h2>
                                                <span>Check out our {{$cat}} gloves</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif


{{--                            BALLS--}}
                            @if($cat == "cricket")
                            <div class="col-lg-4">
                                <div class="collection-banner p-bottom p-center text-center">
                                    <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Ball")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/v09cwjl15gv6wcmkl5b14/f2f3f5-35.png?rlkey=tao904nnr6rik2cn1d7wc7k0b&st=43ccf66f&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="https://www.dropbox.com/scl/fi/v09cwjl15gv6wcmkl5b14/f2f3f5-35.png?rlkey=tao904nnr6rik2cn1d7wc7k0b&st=43ccf66f&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                    </a>
                                    <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Balls")}}" class="contain-banner">
                                        <div class="banner-content with-big">
                                            <h2 class="mb-2">{{$cat}} Balls</h2>
                                            <span>Check out our {{$cat}} balls</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @elseif($cat == "football")
                                <div class="col-lg-4">
                                <div class="collection-banner p-bottom p-center text-center">
                                    <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Ball")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/pc40ud2l2w3jnya20j2ld/ball.png?rlkey=exqn524it6vac311yzzxyun02&st=r14pbzkn&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                        <img src="https://www.dropbox.com/scl/fi/pc40ud2l2w3jnya20j2ld/ball.png?rlkey=exqn524it6vac311yzzxyun02&st=r14pbzkn&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                    </a>
                                    <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Balls")}}" class="contain-banner">
                                        <div class="banner-content with-big">
                                            <h2 class="mb-2">Balls</h2>
                                            <span>Check out our {{$cat}} balls</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            @elseif($cat == "basketball")
                                <div class="col-lg-4">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Ball")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/9lplg8g9pkibrojbxwbqt/f2f3f5-42.png?rlkey=ges5xwnw1k9ppke91ucoksk10&st=1oyxrlnh&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/9lplg8g9pkibrojbxwbqt/f2f3f5-42.png?rlkey=ges5xwnw1k9ppke91ucoksk10&st=1oyxrlnh&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Balls")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">Balls</h2>
                                                <span>Check out our {{$cat}} balls</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            @elseif($cat == "athletics")
                                <div class="col-lg-4">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Throws")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/habxg7u772xtp8lqwfq9p/f2f3f5-48.png?rlkey=ab2m4ebhd5gpj09xgr45o0aqi&st=5vu2az2v&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/habxg7u772xtp8lqwfq9p/f2f3f5-48.png?rlkey=ab2m4ebhd5gpj09xgr45o0aqi&st=5vu2az2v&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Throws")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">Weights</h2>
                                                <span>Check out our {{$cat}} Weights</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @elseif($cat == "tennis")
                                <div class="col-lg-4">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Ball")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/bjzlygmreo7927buhfn42/f2f3f5-55.png?rlkey=rjny5rqnkfxunys0tyt367t0o&st=43ulxjr4&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/bjzlygmreo7927buhfn42/f2f3f5-55.png?rlkey=rjny5rqnkfxunys0tyt367t0o&st=43ulxjr4&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Balls")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">{{$cat}} Balls</h2>
                                                <span>Check out our {{$cat}} balls</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            @elseif($cat == "volleyball")
                                <div class="col-lg-4">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Ball")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/yh6ls13uapjndkwmxi3cx/f2f3f5-61.png?rlkey=5xyfkk5re26ypdcrhus11sh5q&st=xf1sc6wq&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/yh6ls13uapjndkwmxi3cx/f2f3f5-61.png?rlkey=5xyfkk5re26ypdcrhus11sh5q&st=xf1sc6wq&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Balls")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">{{$cat}} Balls</h2>
                                                <span>Check out our {{$cat}} balls</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            @else
                                <div class="col-lg-4">
                                    <div class="collection-banner p-bottom p-center text-center">
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Ball")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(https://www.dropbox.com/scl/fi/v09cwjl15gv6wcmkl5b14/f2f3f5-35.png?rlkey=tao904nnr6rik2cn1d7wc7k0b&st=43ccf66f&raw=1); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                            <img src="https://www.dropbox.com/scl/fi/v09cwjl15gv6wcmkl5b14/f2f3f5-35.png?rlkey=tao904nnr6rik2cn1d7wc7k0b&st=43ccf66f&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                                        </a>
                                        <a href="{{route('subcat','Accessories'.'_'.$cat.'_'."Ball")}}" class="contain-banner">
                                            <div class="banner-content with-big">
                                                <h2 class="mb-2">{{$cat}} Balls</h2>
                                                <span>Check out our {{$cat}} balls</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </section>




    <!-- Breadcrumb section end -->@stop
