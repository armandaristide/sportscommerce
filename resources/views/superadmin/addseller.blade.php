@extends('layouts.mastertwo')
@section('title','ADD CATEGORY  | SELLER ADMIN LEVEL UP ')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Add New Category</h5>
                        </div>

                        <form class="row g-2" method="POST" action="{{ route('addseller') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Seller Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="name" placeholder="Enter name">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Seller User Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="username" placeholder="Enter your user name">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Email</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="email" name="email" placeholder="Enter email">
                                    </div>
                                </div> <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Phone No</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="tel" name="phone" placeholder="Enter phone number">
                                    </div>
                                </div> <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Password</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="password" placeholder="Enter URL of banner Image">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Confirm password</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="password" placeholder="Enter URL of banner Image">
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <button type="submit" class="btn btn-primary w-100 h-100" data-bs-original-title="" title="">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
