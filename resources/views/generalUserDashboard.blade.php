@extends('layouts.mastertwo')
@section('title', 'User Dashboard | LEVEL UP')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>User Dashboard</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" value="{{ $user->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="username">User Name:</label>
                        <input type="text" class="form-control" id="username" value="{{ $user->username }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" id="phone" value="{{ $user->phone }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" value="{{ $user->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" value="************" readonly>
                    </div>
                    <button type="button" class="btn btn-primary">Update Info</button>
                </form>
            </div>
            <div class="col-md-12 mt-5">
                <h3>Order History</h3>
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
@endsection
