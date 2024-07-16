@extends('layouts.mastertwo')
@section('title','ADD PRODUCT  | SELLER ADMIN LEVEL UP ')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <form class="theme-form theme-form-2 mega-form" method="post" action="{{route('submit.addsuperproduct')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Product Information</h5>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-3 mb-0">Product
                                    Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="name" required type="text" placeholder="Enter Product Name">
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Category</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100 select2-hidden-accessible" name="categories" required data-select2-id="select2-data-4-cix8" tabindex="-1" aria-hidden="true">
                                        <option disabled="">Product Category</option>
                                        @foreach($cats as $cat)
                                            <option value="{{$cat->categories}}">{{$cat->categories}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Subcategory</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100 select2-hidden-accessible" required name="subcategories" data-select2-id="select2-data-7-jgm1" tabindex="-1" aria-hidden="true">
                                        <option disabled="">Select Subcategory</option>
                                        <option value="Clothing">Clothing</option>
                                        <option value="Footwear">Footwear</option>
                                        <option value="Accessories">Accessories</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Tag</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100 select2-hidden-accessible" required name="tag" data-select2-id="select2-data-7-jgm1" tabindex="-1" aria-hidden="true">
                                        <option disabled="">Select Tag</option>
                                        <option value="Boots">Boots</option>
                                        <option value="Shoes">Shoes</option>
                                        <option value="Socks">Socks</option>
                                        <option value="Jersey">Jersey/Shirt</option>
                                        <option value="Shorts">Shorts</option>
                                        <option value="Track Suit">Track Suit</option>
                                        <option value="Training Gear">Training Gear</option>
                                        <option value="Gloves">Gloves</option>
                                        <option value="Balls">Balls</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <label class="form-label-title col-sm-3 mb-0">Product
                                        Description</label>
                                    <div class="col-md-9">
                                        <textarea name="description" rows="10" cols="78"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Product Images (upload 4 images)</h5>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Image One</label>
                                <div class="col-sm-9">
                                    <input class="form-control form-choose" type="text" id="formFile" name="imageone" placeholder="Enter Image URL" required>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Image Two</label>
                                <div class="col-sm-9">
                                    <input class="form-control form-choose" type="text" id="formFile" name="imagetwo" placeholder="Enter Image URL" required>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Image Three</label>
                                <div class="col-sm-9">
                                    <input class="form-control form-choose" type="text" id="formFile" name="imagethree" placeholder="Enter Image URL" required>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Image Four</label>
                                <div class="col-sm-9">
                                    <input class="form-control form-choose" type="text" id="formFile" name="imagefour" placeholder="Enter Image URL" required>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Product variations</h5>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-3 mb-0">Color</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="color" required type="text" placeholder="Enter Color Options">
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-3 mb-0">Sizes</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="size" required type="text" placeholder="Enter Size Options">
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-3 mb-0">Brand</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="brand" required type="text" placeholder="Enter Size Options">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Stock</h5>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-3 mb-0">Quantity</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" name="quantity" required placeholder="Enter Quantity">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Product Price</h5>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 form-label-title">price</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="number" name="price" placeholder="enter numeric value only">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 h-100" data-bs-original-title="" title="">Submit Proudct</button>

                    </div>

                </form>

            </div>
        </div>
    </div>
@stop
