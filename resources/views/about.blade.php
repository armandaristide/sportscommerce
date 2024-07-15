@extends('layouts.master')
@section('title','ABOUT US | LEVEL UP')
@section('content')
    <section class="breadcrumb-section section-b-space" style="background-color: white">
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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>About us</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('index')}}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 ratio_30">
                    <div class="banner-deatils">
                        <div class="banner-image bg-size blur-up lazyloaded" style="background-image: url(assets/images/logo.png); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/images/aboutus.png" class="img-fluid bg-img blur-up lazyloaded" alt="" style="display: none;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="col-lg-12">
                <div class="title title1 text-center">
                    <h2>Our Team</h2>
                </div>
            </div>
            <div class="row g-3 filter-gallery mt-3 content grid ratio_asos" style="position: relative; height: 900.66px;">
                <div class="grid-item col-lg-3 col-md-4 col-sm-6 app" style="position: absolute; left: 0px; top: 0px;">
                    <div class="parent-container parent-container-size">
                        <a href="assets/images/about-us/Armand.png" class="bg-size" style="background-image: url(&quot;assets/images/inner-page/product/1.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/images/about-us/Armand.png" class="img-fluid bg-img images" alt="" style="display: none;">
                            <div class="overlay-color">
                                <div class="overlay-icon">
                                    <div>
                                        <h3>ARMAND A. F. LANGIA</h3>
                                        <p class="font-light"> SCRUM MASTER
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid-item col-lg-3 col-md-4 col-sm-6 card" style="position: absolute; left: 348px; top: 0px;">
                    <div class="parent-container parent-container-size">
                        <a href="assets/images/about-us/Arpit.png" class="bg-size" style="background-image: url(&quot;assets/images/inner-page/product/2.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/images/about-us/Arpit.png" class="img-fluid bg-img images" alt="" style="display: none;">
                            <div class="overlay-color">
                                <div class="overlay-icon">
                                    <div>
                                        <h3>ARPIT ROHELA</h3>
                                        <p class="font-light"> TEAM MEMBER
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid-item col-lg-3 col-md-4 col-sm-6 web" style="position: absolute; left: 696px; top: 0px;">
                    <div class="parent-container parent-container-size">
                        <a href="assets/images/about-us/Adithya.png" class="bg-size" style="background-image: url(&quot;assets/images/inner-page/product/3.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/images/about-us/Adithya.png" class="img-fluid bg-img images" alt="" style="display: none;">
                            <div class="overlay-color">
                                <div class="overlay-icon">
                                    <div>
                                        <h3>ADITHYA</h3>
                                        <p class="font-light">TEAM MEMBER
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid-item col-lg-3 col-md-4 col-sm-6 card" style="position: absolute; left: 1044px; top: 0px;">
                    <div class="parent-container parent-container-size">
                        <a href="assets/images/about-us/Abhin.png" class="bg-size" style="background-image: url(&quot;assets/images/inner-page/product/4.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/images/about-us/Abhin.png" class="img-fluid bg-img images" alt="" style="display: none;">
                            <div class="overlay-color">
                                <div class="overlay-icon">
                                    <div>
                                        <h3>ABHIN</h3>
                                        <p class="font-light">TEAM MEMBER
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid-item col-lg-3 col-md-4 col-sm-6 web" style="position: absolute; left: 0px; top: 440.219px;">
                    <div class="parent-container parent-container-size">
                        <a href="assets/images/about-us/Cyprian.png" class="bg-size" style="background-image: url(&quot;assets/images/inner-page/product/5.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/images/about-us/Cyprian.png" class="img-fluid bg-img images" alt="" style="display: none;">
                            <div class="overlay-color">
                                <div class="overlay-icon">
                                    <div>
                                        <h3>CYPRIAN</h3>
                                        <p class="font-light">TEAM MEMBER
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid-item col-lg-3 col-md-4 col-sm-6 app" style="position: absolute; left: 348px; top: 440.219px;">
                    <div class="parent-container parent-container-size">
                        <a href="assets/images/about-us/Habib.png" class="bg-size" style="background-image: url(&quot;assets/images/inner-page/product/6.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/images/about-us/Habib.png" class="img-fluid bg-img images" alt="" style="display: none;">
                            <div class="overlay-color">
                                <div class="overlay-icon">
                                    <div>
                                        <h3>HABIB</h3>
                                        <p class="font-light">TEAM MEMBER
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid-item col-lg-3 col-md-4 col-sm-6 card" style="position: absolute; left: 696px; top: 440.219px;">
                    <div class="parent-container parent-container-size">
                        <a href="assets/images/about-us/Siddharth.png" class="bg-size" style="background-image: url(&quot;assets/images/inner-page/product/7.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/images/about-us/Siddharth.png" class="img-fluid bg-img images" alt="" style="display: none;">
                            <div class="overlay-color">
                                <div class="overlay-icon">
                                    <div>
                                        <h3>SIDDHARTH</h3>
                                        <p class="font-light">TEAM MEMBER
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="grid-item col-lg-3 col-md-4 col-sm-6 web" style="position: absolute; left: 1044px; top: 440.219px;">
                    <div class="parent-container parent-container-size">
                        <a href="assets/images/about-us/Sherwin.png" class="bg-size" style="background-image: url(&quot;assets/images/inner-page/product/8.jpg&quot;); background-size: cover; background-position: center center; background-repeat: no-repeat; display: block;">
                            <img src="assets/images/about-us/Sherwin.png" class="img-fluid bg-img images" alt="" style="display: none;">
                            <div class="overlay-color">
                                <div class="overlay-icon">
                                    <div>
                                        <h3>SHERWIN</h3>
                                        <p class="font-light">TEAM MEMBER
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

@stop
