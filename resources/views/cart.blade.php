@extends('layouts.master')
@section('title','My Cart | LEVEL UP')
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
                                <a href="{{ route('index') }}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">My Cart</li>
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
                <!-- Alert for success message -->
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> {{ session()->get('success') }}
                    </div>
                @endif

                <!-- Table for cart items -->
                <div class="col-sm-12 table-responsive mt-4">
                    @if(count($carts) > 0)
                        <table class="table cart-table">
                            <thead>
                            <tr class="table-head">
                                <th scope="col">Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Action</th>
                                <th scope="col">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($carts as $cart)
                                <tr id="cart-item-{{ $cart['id'] }}">
                                    <td>
                                        <a href="#">
                                            <img src="{{ $cart['poster'] }}" class="blur-up lazyload" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">{{ $cart['name'] }}</a>
                                    </td>
                                    <td>
                                        €{{ $cart['price'] }}
                                    </td>
                                    <td>
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="number" name="quantity" class="form-control input-number"
                                                       value="{{ $cart['quantity'] }}" min="1" data-id="{{ $cart['id'] }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('cart.delete', $cart['id']) }}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                    <td>
                                        €{{ $cart['quantity'] * $cart['price'] }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <div>
                            <p>Your Cart is EMPTY 😔</p>
                        </div>
                    @endif
                </div>

                <!-- Cart totals and checkout section -->
                @if(count($carts) > 0)
                    <div class="col-12 mt-md-5 mt-4">
                        <div class="row">
                            <div class="col-sm-7 col-5 order-1">
                                <div class="left-side-button text-end d-flex d-block justify-content-end">
                                    <a href="{{ route('clear.cart') }}"
                                       class="text-decoration-underline theme-color d-block text-capitalize">Clear All Items</a>
                                </div>
                            </div>
                            <div class="col-sm-5 col-7">
                            </div>
                        </div>
                    </div>

                    <div class="cart-checkout-section">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="cart-box">
                                    <div class="cart-box-details">
                                        <div class="total-details">
                                            <div class="top-details">
                                                <h3 class="text-center">Cart Totals</h3>
                                                <h6>Subtotal<span id="subtotal">€{{ $total }}</span></h6>
                                                <h6>Shipping Fee <span>FREE</span></h6>
                                            </div>
                                            <div class="bottom-details">
                                                <h3>Total: €<span id="grand-total">{{ $total }}</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-sm-6">
                                <div class="left-side-button float-start">
                                    <a href="{{ route('index') }}"
                                       class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                        <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 ">
                                <div class="checkout-button">
                                    <a href="{{ route('checkout') }}" class="btn btn-solid-default btn fw-bold">
                                        Check Out <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <!-- Cart Section End -->

    <!-- jQuery script for quantity update -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[name="quantity"]').on('change', function() {
                var id = $(this).data('id');
                var quantity = $(this).val();

                $.ajax({
                    url: '{{ route("cart.update", "") }}/' + id,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        quantity: quantity
                    },
                    success: function(response) {
                        // Update the subtotal and grand total
                        var newSubtotal = response.total.toFixed(2);
                        $('#subtotal').text('€' + newSubtotal);
                        $('#grand-total').text('€' + newSubtotal);
                    }
                });
            });
        });
    </script>

@stop
