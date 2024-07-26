@extends('layouts.mastertwo')
@section('title', 'USER Dashboard | LEVEL UP')
@section('content')

    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible text-black" style="color: black">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Success!</strong>  {{ session()->get('message') }}
        </div>
    @endif

    <!-- Profile Edit Section -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card-header card-header-top card-header--2 px-0 pt-0">
                    <h5>Profile Settings</h5>
                </div>
                <form class="theme-form theme-form-2 mega-form" method="POST" action="{{ route('submit.edituserprofile', Auth::user()->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-2 mb-0">User Name:</label>
                            <div class="col-sm-10">
                                <h5>{{ $user->username }}</h5>
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-2 mb-0">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" style="color: black" type="text" required name="name" value="{{ $user->name }}">
                            </div>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-2 mb-0">Phone Number</label>
                            <div class="col-sm-10">
                                <input class="form-control" style="color: black" type="tel" name="phone" required value="{{ $user->phone }}">
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-2 mb-0">Email Address:</label>
                            <div class="col-sm-10">
                                <h5>{{ $user->email }}</h5>
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-2 mb-0">Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" style="color: black" type="password" name="password" placeholder="Leave blank to keep current password">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary w-100 h-100" data-bs-original-title="" title="">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Order History Section -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card-header card-header-top card-header--2 px-0 pt-0">
                    <h5>Order History</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->product_name }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->total_price }}</td>
                                <td>{{ $order->status }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="container pt-4 text-center">
                        <p style="color: black">{{ $orders->links("pagination::bootstrap-4") }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
