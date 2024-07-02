@extends('layouts.mastertwo')
@section('title','SELLER ADMIN Dashboard | LEVEL UP ')
@section('content')

    @if (session()->has('message'))
        <script>
            'use strict';
            var notify = $.notify('<i class="fas fa-bell"></i></i><strong>{{ session()->get('message') }}</strong>...', {
                type: 'theme',
                allow_dismiss: true,
                delay: 4000,
                showProgressbar: true,
                timer: 300,
                // timer: 555555500,
                animate: {
                    enter: 'animated fadeInDown',
                    exit: 'animated fadeOutUp'
                }
            });

            setTimeout(function () {
                notify.update('message', '<i class="fas fa-bell"></i></i><strong>{{ session()->get('message') }}</strong> your data.');
            }, 1000);

        </script>
    @endif

    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong> {{ session()->get('message') }}</strong>. Check the Categories Table for Updates
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal fade theme-modal remove-coupon" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel12">Done!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="remove-box text-center">
                            <div class="wrapper">
                                <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                    <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                                    <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                                </svg>
                            </div>
                            <h4 class="text-content">{{ session()->get('message') }}</h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <div class="card-header card-header-top card-header--2 px-0 pt-0">
                    <h5>Profile Settings</h5>
                </div>
                <form class="theme-form theme-form-2 mega-form">
                    @csrf
                    <div class="row">
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-2 mb-0">User Name:</label>
                            <div class="col-sm-10">
                                <h5>{{$profile->username}}</h5>
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-2 mb-0">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{$profile->name}}">
                            </div>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-2 mb-0">Phone
                                Number</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="tel" name="phone" value="{{$profile->phone}}">
                            </div>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-2 mb-0">Email
                                Address</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" value="{{$profile->email}}">
                            </div>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-2 mb-0">Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="password" value="{{$profile->password}}">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body" style="background-color: black">
                <div class="card-header card-header-top card-header--2 px-0 pt-0">
                    <h5>My Product Statistics</h5>
                </div>

                    <div class="container col-12">
                        <div class="row">
                            <div class="col-sm-6 col-xxl-6 col-lg-6">
                                <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                                    <div class="custome-1-bg b-r-4 card-body">
                                        <div class="media align-items-center static-top-widget">
                                            <div class="media-body p-0">
                                                <span class="m-0">Total Uploaded Products</span>
                                                <h4 class="mb-0 counter">0
                                                    <span class="badge badge-light-primary grow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>0%</span>
                                                </h4>
                                            </div>
                                            <div class="align-self-center text-center">
                                                <i class="ri-database-2-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-6 col-lg-6">
                                <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                                    <div class="custome-2-bg b-r-4 card-body">
                                        <div class="media static-top-widget">
                                            <div class="media-body p-0">
                                                <span class="m-0">Total Products Sold</span>
                                                <h4 class="mb-0 counter">0
                                                    <span class="badge badge-light-danger grow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>0%</span>
                                                </h4>
                                            </div>
                                            <div class="align-self-center text-center">
                                                <i class="ri-shopping-bag-3-line"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xxl-6 col-lg-6">
                            <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                                <div class="custome-3-bg b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Total Products In Stock</span>
                                            <h4 class="mb-0 counter">0
                                                <a href="#" class="badge badge-light-success grow" data-bs-original-title="" title="">
                                                    ADD NEW</a>
                                            </h4>
                                        </div>

                                        <div class="align-self-center text-center">
                                            <i class="ri-store-3-line"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xxl-6 col-lg-6">
                            <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                                <div class="custome-4-bg b-r-4 card-body">
                                    <div class="media static-top-widget">
                                        <div class="media-body p-0">
                                            <span class="m-0">Products Out of Stock</span>
                                            <h4 class="mb-0 counter">0
                                                <a href="#" class="badge badge-light-danger grow" data-bs-original-title="" title="">
                                                    ADD NEW</a>
                                            </h4>
                                        </div>

                                        <div class="align-self-center text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-down"><polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline><polyline points="17 18 23 18 23 12"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>


    {{--    add products--}}
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body">
                <div class="title-header option-title d-sm-flex d-block">
                    <h5>Products List</h5> (Total Products: {{count($products)}})
                    <div class="right-options">
                        <ul>

                            <li>
                                <a class="btn btn-solid" href="{{route('addProduct')}}">Add Product</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="table-responsive">
                        <div id="table_id_wrapper" class="dataTables_wrapper no-footer">
                            <table class="table all-package theme-table table-product dataTable no-footer" id="table_id">
                                <thead>
                                <tr>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">Product Image</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">Product Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">Category</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">Current Qty</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">Price</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">Subcategory</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.312px;">Option</th>
                                </tr>
                                </thead>

                                <tbody>
                                @if(count($products)!=0)
                                    @foreach($products as $product)
                                        <tr class="odd">
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{$product->imageone}}" class="img-fluid" width="50%" alt="image">
                                                </div>
                                            </td>

                                            <td class="text-wrap">{{$product->name}}</td>

                                            <td>{{$product->categories}}</td>

                                            <td>12</td>

                                            <td class="td-price">${{$product->price}}</td>

                                            <td class="status-danger">
                                                <span>{{$product->tag}}</span>
                                            </td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    categories--}}
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body">
                <div class="title-header option-title">
                    <h5>All Category</h5>
                    <form class="d-inline-flex">
                        <a href="{{route('addCategory')}}" class="align-items-center btn btn-theme d-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>Add New Category
                        </a>
                    </form>
                </div>

                <div class="table-responsive category-table">
                    <div>
                        <div id="table_id_wrapper" class="dataTables_wrapper no-footer">
                            <table class="table all-package theme-table dataTable no-footer" id="table_id">
                                <thead>
                                <tr>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 224.656px;">Category</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 224.656px;">Background Image Image</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 224.719px;">Option</th></tr>
                                </thead>
                                <tbody>

                                @if(count($cats)!=0)
                                    @foreach($cats as $cat)
                                        <tr class="odd">
                                            <td>{{$cat->categories}}</td>
                                            <td>
                                                <div class="table-image">
                                                    <img src="{{$cat->backgroundurl}}" width="50%"  alt="image">
                                                </div>
                                            </td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>

                                    @endforeach
                                @endif
                                </tbody>
                            </table></div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@stop
