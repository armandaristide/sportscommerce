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

                        <form class="row g-2" method="POST" action="{{ route('submit.addcategory') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="categories" placeholder="Enter category name">
                                    </div>
                                </div>
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Category Banner Image</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="backgroundurl" placeholder="Enter URL of banner Image">
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
