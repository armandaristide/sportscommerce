@extends('layouts.master')
@section('title','SPORTS CATEGORY | E COMMERCE')
@section('content')

    <section class="pt-4" style="margin-bottom: 100px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="success-icon">
                        <div class="main-container">
                            <div class="check-container">
                                <div class="check-background">
                                    <svg viewBox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="9" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="check-shadow"></div>
                            </div>
                        </div>

                        <div class="success-contain">
                            <h4>Order Success</h4>
                            <h5 class="font-light">Payment Is Successfully Processed And Your Order Is On The Way</h5>
                            @if($orders)
                                <h6 class="font-light">Transaction ID:GP0000</h6>
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
                <div class="col-md-8">
                    <div class="col-sm-12 table-responsive">
                        <table class="table cart-table table-borderless">
                            <tbody>
                            <?php
                            $total = 0
                            ?>
                            @foreach($orders as $order)
                                <?php
                                    $product = \App\Models\Product::where('id','=',$order->product_id)->first();
                                    ?>
                            <tr class="table-order">

                                    <td>
                                        <a href="{{route('productdets',$product->id)}}">
                                            <img src="{{$order->color}}" class="img-fluid blur-up lazyloaded" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <p>Product Name</p>
                                        <h5>{{$product->name}} ({{$order->size}})</h5>
                                    </td>

                                    <td>
                                        <p>Quantity</p>
                                        <h5>{{$order->quantity}}</h5>
                                    </td>
                                    <td>
                                        <p>Price</p>
                                        <h5>€{{$product->price}}</h5>
                                        <?php
                                            $total = $total + ($product->price*$order->quantity)
                                            ?>
                                    </td>
                                <td>
                                    <p>Total</p>
                                    <h5>€{{$product->price*$order->quantity}}</h5>
                                </td>

                            </tr>
                            @endforeach

                            </tbody>
                            <tfoot>
                            <tr class="table-order">
                                <td colspan="4">
                                    <h5 class="font-light">Subtotal :</h5>
                                </td>
                                <td>
                                    <h4>€{{$total}}</h4>
                                </td>
                            </tr>

                            <tr class="table-order">
                                <td colspan="4">
                                    <h5 class="font-light">Shipping :</h5>
                                </td>
                                <td>
                                    <h4>FREE</h4>
                                </td>
                            </tr>

                            <tr class="table-order">
                                <td colspan="4">
                                    <h4 class="theme-color fw-bold">Total Price :</h4>
                                </td>
                                <td>
                                    <h4 class="theme-color fw-bold">€{{$total}}</h4>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="order-success">
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <h4>Order Summary</h4>
                                <ul class="order-details">
                                    <li>Order ID: DUMMY DATA</li>
                                    <li>Order Date: 26-07-2026</li>
                                    <li>Order Total: €{{$total}}</li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@stop
