@extends('layouts.mastertwo')
@section('title','SUPER ADMIN Dashboard | LEVEL UP ')
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
            <strong style="color: black"> {{ session()->get('message') }}</strong>
        </div>
    @endif

    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="card-header card-header-top card-header--2 px-0 pt-0">
                    <h5>Profile Settings</h5>
                </div>
                <form class="theme-form theme-form-2 mega-form">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-2 mb-0">User Name:</label>
                                <div class="col-sm-10">
                                    <h5>{{$profile->username}}</h5>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-2 mb-0">Name</label>
                                <div class="col-sm-10">
                                    <h5>{{$profile->name}}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="col"> <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-2 mb-0">Phone
                                    Number</label>
                                <div class="col-sm-10">
                                    <h5>{{$profile->phone}}</h5>
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-2 mb-0">Email
                                    Address</label>
                                <div class="col-sm-10">

                                    <h5>{{$profile->email}}</h5>
                                </div>
                            </div>
<div class="row">
    <div class="col-8"></div>
    <div class=" col-4 right-options">
        <ul>

            <li>
                <a class="btn btn-solid" href="{{route('edit.superadmin',$superId->id)}}">Edit Super Admin</a>
            </li>
        </ul>
    </div>
</div>

                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>



    {{--    add seller--}}
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body">
                <div class="title-header option-title d-sm-flex d-block">
                    <h5>Sellers List</h5> (Total Sellers: {{count($sellers)}})
                    <div class="right-options">
                        <ul>

                            <li>
                                <a class="btn btn-solid" href="{{route('add.seller')}}">Add Seller</a>
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
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">S.No</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">USER NAME</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">SELLER NAME </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">EMAIL </th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">PHONE</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;"></th>

                                </tr>
                                </thead>

                                <tbody>
                                @if(count($sellers)!=0)
                                    @foreach($sellers as $seller)
                                        <tr class="odd">
                                            <td>
                                                <div class="table-image">
                                                 <p>{{$seller->id}}</p>
                                                </div>
                                            </td>
<td>
                                                <div class="table-image">
                                                    <p>{{$seller->name}}</p>
                                                </div>
                                            </td>
<td>
                                                <div class="table-image">
                                                    <p>{{$seller->name}}</p>
                                                </div>
                                            </td>
<td>
                                                <div class="table-image">
                                                    <p>{{$seller->email}}</p>
                                                </div>
                                            </td>
<td>
                                                <div class="table-image">
                                                    <p>{{$seller->phone}}</p>
                                                </div>
                                            </td>

                                            <td>
                                                <ul>
{{--                                                    <li>--}}
{{--                                                        <a href="#">--}}
{{--                                                            <i class="ri-eye-line"></i>--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}

                                                    <li>
                                                        <a href="{{route('edit.seller',$seller->id)}}">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <form action="{{route('delete.seller',$seller->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" style="background-color:rgba(192,192,192,0.3);">
                                                                <a href="" >
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                            </button>
                                                        </form>

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


    {{--    add products--}}
    <div class="col-sm-12">
        <div class="card card-table">
            <div class="card-body">
                <div class="title-header option-title d-sm-flex d-block">
                    <h5>Products List</h5> (Total Products: {{count($prods)}})
                    <div class="right-options">
                        <ul>


                        </ul>
                    </div>
                </div>
                <div>
                    <div class="table-responsive">
                         <div id="table_id_wrapper" class="dataTables_wrapper no-footer">
                            <table class="table all-package theme-table table-product dataTable no-footer" id="table_id">
                                <thead>
                                <tr>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">Image</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">S.No</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">Product Name</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">Product Category</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 188.281px;">Seller</th>


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

                                            <td class="text-wrap">{{$product->id}}</td>

                                            <td class="text-wrap" >{{$product->name}}</td>

                                            <td class="text-wrap">{{$product->categories}}</td>

                                            <td class="td-price">{{$product->seller}}</td>




                                        </tr>

                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                            <div class="container pt-4 text-center" style="text-decoration-color: red row">
                                <p style="color: black">{{ $products->links("pagination::bootstrap-4")}}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    categories--}}






@stop

