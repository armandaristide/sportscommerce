@extends('layouts.mastertwo')

@section('title', 'User Dashboard | LEVEL UP')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Customer Details</h3>
                    </div>
                    <div class="card-body">
                        <p>Name: {{ Auth::user()->name }}</p>
                        <p>Username: {{ Auth::user()->username }}</p>
                        <p>Phone: {{ Auth::user()->phone }}</p>
                        <p>Email: {{ Auth::user()->email }}</p>
                        <p>Password: {{ Auth::user()->password }}</p>
                        <p>Type:
                            @if(Auth::user()->type == 0)
                                User
                            @elseif(Auth::user()->type == 1)
                                Seller Admin
                            @elseif(Auth::user()->type == 2)
                                Super Admin
                            @endif
                        </p>
                        <!-- Button to navigate to the edit profile page -->
                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-primary">Edit Profile</a>
                        </div>
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
                                <th>Buyer Id</th>
                                <th>Product Id</th>
                                <th>Colour</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->buyer_id }}</td>
                                    <td>{{ $order->product_id }}</td>
                                    <td>{{ $order->colour }}</td>
                                    <td>{{ $order->size }}</td>
                                    <td>{{ $order->quantity }}</td>
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
