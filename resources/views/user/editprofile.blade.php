@extends('layouts.mastertwo')
@section('title', 'Edit Profile')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Edit Seller Info</h5>
                        </div>

                        <form class="row g-2" method="POST" action="{{ route('userProfileEdit', $user->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST') {{-- Ensure to include this line for POST requests --}}
                            <div class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="name" placeholder="Enter name" value="{{ old('name', $user->name) }}">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Email</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Enter email">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Phone No</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="tel" name="phone" value="{{ old('phone', $user->phone) }}" placeholder="Enter phone number">
                                        @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Password</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="password" name="password" placeholder="Enter password">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Confirm Password</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm password">
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
