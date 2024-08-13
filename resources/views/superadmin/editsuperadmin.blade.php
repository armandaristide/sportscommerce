@extends('layouts.mastertwo')
@section('title','Edit Info  | SUPER ADMIN LEVEL UP ')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Edit Profile Info</h5>
                        </div>

                        <form  method="POST" action="{{ route('submit.editsuperadmin',$user->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="theme-form theme-form-2 mega-form">

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0"> User Name</label>
                                    <div class="col-sm-9">
                                        {{$user->username}}
                                    </div>

                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Email</label>
                                    <div class="col-sm-9">
                                        <h5>{{$user->email}}</h5>
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0"> Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="name" placeholder="Enter name" value="{{$user->name}}">
                                    </div>
                                </div>


                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Phone No</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="tel" name="phone" value="{{$user->phone}}" placeholder="Enter phone number">
                                    </div>
                                </div> <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Password</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="password"  placeholder="Enter new password">
                                    </div>
                                </div>

                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary w-100 h-100">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
