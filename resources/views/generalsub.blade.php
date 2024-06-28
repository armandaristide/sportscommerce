@extends('layouts.master')
@section('title','SUBCATEGORIES | LEVEL UP ')
@section('content')
    <!-- Breadcrumb section start -->
    @if($cat== "football")
        <section class="breadcrumb-section section-b-space" style="background-image: url(assets/img/banners/football.png); background-size: cover">
            @else
                <section class="breadcrumb-section section-b-space" style="background-image: url(assets/img/banners/tennis.png);background-size: cover">
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
                            <h3 class="breadcrumb-item text-capitalize"><a class="text-capitalize" href="{{route('categories',$cat)}}">
                                SPORT
                                </a> / {{$cat}}
                            </h3>

                            <div class="col-12">
                                <h1 class="text-white text-capitalize">{{$cat}} {{$subcat}}</h1>

                            </div>
                        </div>
                    </div>
                </section>
    @stop
