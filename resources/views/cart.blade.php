@extends('layouts.master')
@section('title','ABOUT US | LEVEL UP')
@section('content')


    <!-- Breadcrumb section start -->


    <section class="breadcrumb-section section-b-space">
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
                    <h3>Shopping Cart</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="count-down">
                        <h5>Your cart will be expired in <span class="count-timer theme-color" id="timer"></span>
                            minutes !</h5>
                        <button type="button" onclick="location.href = 'checkout.html';"
                                class="btn btn-solid-default btn-sm fw-bold">Check Out</button>
                    </div>
                </div>

                <div class="col-sm-12 table-responsive mt-4">
                    <table class="table cart-table">
                        <thead>
                        <tr class="table-head">
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">action</th>
                            <th scope="col">total</th>
                        </tr>
                        </thead>
                        @if($carts)
                            @foreach($carts as $cart)
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="product-left-sidebar.html">
                                            <img src={{$cart->imageone}} class=" blur-up lazyload"
                                                 alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="product-left-sidebar.html">{{$cart->name}}</a>
                                        <div class="mobile-cart-content row">
                                            <div class="col">
                                                <div class="qty-box">
                                                    <div class="input-group">
                                                        <input type="number" name="quantity"
                                                               class="form-control input-number" value=''>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <h2 class="td-color">
                                                    <a href="javascript:void(0)">
                                                        <i class="fas fa-times"></i>
                                                    </a>
                                                </h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h2>{{$cart->price}}</h2>
                                    </td>
                                    <td>
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="number" name="quantity" class="form-control input-number"
                                                       value={{$cart->quantity}}>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <h2 class="td-color"                                 {{$total=$total+$cart->quantity *$cart->price}}
                                        >{{$cart->quantity *$cart->price }}</h2>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach

                        @else
                            <div>
                                <p>NO productucts in cart</p>
                            </div>
                        @endif


                    </table>
                </div>

                <div class="col-12 mt-md-5 mt-4">
                    <div class="row">
                        <div class="col-sm-7 col-5 order-1">
                            <div class="left-side-button text-end d-flex d-block justify-content-end">
                                <a href="javascript:void(0)"
                                   class="text-decoration-underline theme-color d-block text-capitalize">clear
                                    all items</a>
                            </div>
                        </div>
                        <div class="col-sm-5 col-7">
                            <div class="left-side-button float-start">
                                <a href="index.html" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                    <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-checkout-section">
                    <div class="row g-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="promo-section">
                                <form class="row g-3">
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="number" placeholder="Coupon Code">
                                    </div>
                                    <div class="col-5">
                                        <button class="btn btn-solid-default rounded btn">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 ">
                            <div class="checkout-button">
                                <a href="checkout.html" class="btn btn-solid-default btn fw-bold">
                                    Check Out <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="cart-box">
                                <div class="cart-box-details">
                                    <div class="total-details">
                                        <div class="top-details">
                                            <h3>Cart Totals</h3>
                                            <h6>Total MRP <span>{{$total}}</span></h6>
                                            <h6>Coupon Discount <span>-$25.00</span></h6>
                                            <h6>Convenience Fee <span><del>$25.00</del></span></h6>
                                        </div>
                                        <div class="bottom-details">
                                            <a href="checkout.html">Process Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->


@stop
