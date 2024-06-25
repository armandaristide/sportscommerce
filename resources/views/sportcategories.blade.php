@extends('layouts.master')
@section('title','SPORTS CATEGORY | E COMMERCE')
@section('content')
    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
        {{--        <ul class="circles">--}}
        {{--            <li></li>--}}
        {{--            <li></li>--}}
        {{--            <li></li>--}}
        {{--            <li></li>--}}
        {{--            <li></li>--}}
        {{--            <li></li>--}}
        {{--            <li></li>--}}
        {{--            <li></li>--}}
        {{--            <li></li>--}}
        {{--            <li></li>--}}
        {{--        </ul>--}}
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="text-left">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    SPORTS
                                </a>
                            </li>
                        </ol>
                    </nav>
                    <h1 align="left" >{{$cat}}</h1>

                </div>
            </div>
        </div>
    </section>

    {{--    products categories start--}}
    <!--Shirts-->

@stop
