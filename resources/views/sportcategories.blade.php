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
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/jersey.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="https://www.dropbox.com/scl/fi/j7xenokmplf2j7m7kkknd/f2f3f5-23.png?rlkey=39s4ybmhskdv6vjquqp098b4e&st=qf4mc3ex&raw=1" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="{{route('subcat','Clothing'.'_'.$cat.'_'."Jerseys")}}" class="contain-banner">
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
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/boots.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="assets/img/football/boots.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="#" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Shoes</h2>
                                    <span>Check out our {{$cat}} shoes</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="cricket")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/boots.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="assets/img/football/boots.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="#" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">shoes</h2>
                                    <span>Check out our {{$cat}} shoes</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="athletics")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/boots.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="assets/img/football/boots.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="#" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Shoes</h2>
                                    <span>Check out our {{$cat}} shoes</span>
                                </div>
                            </a>
                        </div>
                    </div>
                @elseif($cat=="volleyball")
                    <div class="col-lg-4 col-md-6">
                        <div class="collection-banner p-bottom p-center text-center">
                            <a href="#" class="banner-img bg-size blur-up lazyloaded" style="background-image: url(assets/img/football/boots.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                                <img src="assets/img/football/boots.png" class="bg-img blur-up lazyload" alt="" style="display: none;">
                            </a>
                            <a href="#" class="contain-banner">
                                <div class="banner-content with-big">
                                    <h2 class="mb-2">Shoes</h2>
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
                                    <h2 class="mb-2">Shoes</h2>
                                    <span>Check out our {{$cat}} shoes</span>
                                </div>
                            </a>
                        </div>
                    </div>
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
