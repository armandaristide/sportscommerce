@extends('layouts.mastertwo')

@section('title', 'User Dashboard | LEVEL UP')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Customer Details</h3>
                    </div>
                    <div class="card-body">
                        <p>Name: {{ Auth::user()->name }}</p>
                        <p>Email: {{ Auth::user()->email }}</p>
                        <p>Type:
                            @if(Auth::user()->type == 0)
                                User
                            @elseif(Auth::user()->type == 1)
                                Seller Admin
                            @elseif(Auth::user()->type == 2)
                                Super Admin
                            @endif
                        </p>
                        <!-- Add more details as needed -->
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Order History</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Date</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->product_name }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ $order->date }}</td>
                                    <td>{{ $order->price }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
