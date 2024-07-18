@extends('layouts.mastertwo')
@section('title','EDIT CATEGORY  | SELLER ADMIN LEVEL UP ')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Edit Category</h5>
                        </div>

                        <form class="row g-2" method="POST" action="{{ route('submit.editCategory',$cat->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="categories" value="{{$cat->categories}}" placeholder="{{$cat->categories}}">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Category Banner Image</label>
                                    <div class="col-sm-9">
                                        <img src="{{$cat->backgroundurl}}" width="100%"  alt="image">

                                        <input class="form-control" type="text" name="backgroundurl" value="{{$cat->backgroundurl}}" placeholder="{{$cat->backgroundurl}}">
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
