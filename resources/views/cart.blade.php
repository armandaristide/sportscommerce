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
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{route('index')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">My Cart</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong>  {{ session()->get('message') }}
                    </div>
                @endif
                <div class="col-sm-12 table-responsive mt-4">
                    <table class="table cart-table" id="ddReferences">
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

                        @if(count($carts)>0)


                                <?php
                                $n = 0
                                ?>
                                <?php
                                $total = 0
                                ?>

                            @foreach($carts as $cart)
                                @push('head')
                                    <script>
                                        function calc(n) {
                                            var price = document.getElementsByClassName("ticket_price")[n].innerHTML;
                                            var noTickets = document.getElementsByClassName("num")[n].value;
                                            var total = parseFloat(price) * noTickets;
                                            var totalf = 0;
                                            var totalfn = totalf + total;
                                            if (!isNaN(total))
                                                document.getElementsByClassName("total")[n].innerHTML = total;
                                                document.getElementsByClassName("totalf")[n].innerHTML = totalfn;
                                        }
                                    </script>
                                @endpush

                                    <?php
                                    $product = \App\Models\Product::where('id','=',$cart->product_id)->first()
                                    ?>
                                    <?php
                                    $total = $total + ( $cart->quantity * $product->price)
                                    ?>

                                <tbody>
                                <tr>
                                    <td>
                                        <a href="{{route('productdets',$product->id)}}">
                                            <img src="{{$cart->color}}" class="blur-up lazyload"
                                                 alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#">{{$product->name}}({{$cart->size}})</a>
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
                                        <h2>€<span class="ticket_price">{{$product->price}}</span></h2>
                                    </td>
                                    <td id="cellquantity">
                                        <div class="qty-box">

                                            <div class="input-group">
                                                <input type="number" name="quantity" min="1"  oninput="calc({{$n}})"  required max="{{$product->quantity}}" class="form-control  num"
                                                       value={{$cart->quantity}}>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{route('delete.cart',$cart->id)}}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                    <td>

                                        <h2 class="td-color">€<span class="total">

                                                {{$product->price*$cart->quantity}}
                                            </span></h2>
                                    </td>
                                </tr>
                                </tbody>
                                        <?php
                                        $n = $n+1
                                        ?>
                                        <?php
                                        $total =$total + ($product->price*$cart->quantity)
                                        ?>

                            @endforeach

                        @else
                            <div>
                                <p>Your Cart is EMPTY 😔</p>
                            </div>
                        @endif


                    </table>
                </div>
                @if(count($carts)>0)

                    <div class="col-12 mt-md-5 mt-4">
                        <div class="row">
                            <div class="col-sm-7 col-5 order-1">
                                <div class="left-side-button text-end d-flex d-block justify-content-end">
                                    <a href="{{route('delete.cart',0)}}"
                                       class="text-decoration-underline theme-color d-block text-capitalize">clear
                                        all items</a>
                                </div>
                            </div>
                            <div class="col-sm-5 col-7">
                            </div>
                        </div>
                    </div>
                @endif

                    @push('head')
                        <script type="text/javascript">
                            // Get the cell element by its id attribute
                            const cell = document.getElementById("cellquantity");
                            // Get the cell value using the textContent property
                            const cellValue = cell.textContent;

                            // Log the cell value to the console
                            var total = 0;
                            var totalq = console.log(cellValue); // Output: "1"
                            total = total + totalq; // Output: "1"
                            var number = 123;
                            var string = "abcd";

                            function docWrite(variable) {
                                document.write(variable);
                            }
                        </script>
{{--                    <script>--}}
{{--                        function myFunction() {--}}


{{--                            document.getElementById("myTotal").innerHTML = total;--}}
{{--                        }--}}

{{--                    </script>--}}
                    @endpush
                <div class="cart-checkout-section" onload="myFunction()">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="cart-box">
                                <div class="cart-box-details">
                                    <div class="total-details">
                                        <div class="top-details" id="here">
                                            <h3 class="text-center">Cart Totals</h3>
                                            <h6>Subtotal<span class="totalf">€
                                                 <script>docWrite(total)</script>
                                                </span></h6>
                                            <h6>Shipping Fee <span>FREE</span></h6>
                                        </div>
                                        <div class="bottom-details">
                                            <a> <h3>Total: €{{$total}}</h3></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6">
                            <div class="left-side-button float-start">
                                <a href="{{route('index')}}" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                    <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                            </div>
                        </div>

                        @if(count($carts)>0)

                            <div class="col-lg-4 col-sm-6 ">
                                <div class="checkout-button">
                                    <a href="{{route('checkout',\Illuminate\Support\Facades\Auth::user()->username)}}" class="btn btn-solid-default btn fw-bold">
                                        Check Out <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->


@stop
