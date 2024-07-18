@extends('layouts.master')
@section('title','SPORTS CATEGORY | E COMMERCE')
@section('content')

    <section class="pt-4" style="margin-bottom: 200px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="success-icon">
                        <div class="main-container">
                            <div class="check-container">
                                <div class="check-background">
                                    <svg viewBox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="check-shadow"></div>
                            </div>
                        </div>

                        <div class="success-contain">
                            <h4>Order Success</h4>
                            <h5 class="font-light">Payment Is Successfully Processed And Your Order Is On The Way</h5>
                            @if($order)
                                <h6 class="font-light">Transaction ID:{{$order->SN}}</h6>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-b-space cart-section order-details-table">
        <div class="container">
            <div class="title title1 title-effect mb-1 title-left">
                <h2 class="mb-3">Order Details</h2>
            </div>
            <div class="row g-12">
                <div class="col-md-6">
                    <div class="col-sm-12 table-responsive">
                        <table class="table cart-table table-borderless">
                            <tbody>
                            <tr class="table-order">
                                <td>
                                    <a href="javascript:void(0)">
                                        <img src="{{$order->color}}" class="img-fluid blur-up lazyloaded" alt="">
                                    </a>
                                </td>
                                <td>
                                    <p>Product Name</p>
                                    <h5>###</h5>
                                </td>
                                <td>
                                    <p>Quantity</p>
                                    <h5>{{$order->quantity}}</h5>
                                </td>
                                <td>
                                    <p>Price</p>
                                    <h5>€{{$order->price}}</h5>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr class="table-order">
                                <td colspan="3">
                                    <h5 class="font-light">Subtotal :</h5>
                                </td>
                                <td>
                                    <h4>€{{$order->price}}</h4>
                                </td>
                            </tr>

                            <tr class="table-order">
                                <td colspan="3">
                                    <h5 class="font-light">Shipping :</h5>
                                </td>
                                <td>
                                    <h4>FREE</h4>
                                </td>
                            </tr>

                            <tr class="table-order">
                                <td colspan="3">
                                    <h4 class="theme-color fw-bold">Total Price :</h4>
                                </td>
                                <td>
                                    <h4 class="theme-color fw-bold">€##</h4>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="order-success">
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <h4>summery</h4>
                                <ul class="order-details">
                                    <li>Order ID: {{$order->SN}}</li>
                                    <li>Order Date: {{$order->created_at}}</li>
                                    <li>Order Total: €###</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
