@extends('layouts.mastertwo')
@section('title','EDIT PRODUCT  | SELLER ADMIN LEVEL UP ')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <form class="theme-form theme-form-2 mega-form" method="post" action="{{route('submit.editproduct',$product->id)}}" enctype="multipart/form-data">
                    @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="card-header-2">
                            <h5>Product Information - Edit Product</h5>
                        </div>

                            <div class="mb-4 row align-items-center">
                                <label class="form-label-title col-sm-3 mb-0">Product
                                    Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="name" required type="text" placeholder="{{$product->name}}" value="{{$product->name}}">
                                </div>
                            </div>

                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Category</label>
                                <div class="col-sm-9">
                                    <select class="js-example-basic-single w-100 select2-hidden-accessible" name="categories" required data-select2-id="select2-data-4-cix8" tabindex="-1" aria-hidden="true">
                                        <option value="{{$product->categories}}" selected>{{$product->categories}}</option>
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
                                        <option value="{{$product->subcategories}}" selected>{{$product->subcategories}}</option>
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
                                    <option value="{{$product->tag}}" selected>{{$product->tag}}</option>
                                    <option value="Boots">Boots</option>
                                    <option value="Shoes">Shoes</option>
                                    <option value="Socks">Socks</option>
                                    <option value="Shirts">Shirts</option>
                                    <option value="Trousers">Trousers</option>
                                    <option value="Skirts">Skirts</option>
                                    <option value="Shin guards">Shin guards</option>
                                    <option value="Knee pads">Knee pads</option>
                                    <option value="Ankle braces">Ankle braces</option>
                                    <option value="Hightops">Hightops</option>
                                    <option value="Trackspikes">Trackspikes</option>
                                    <option value="Rackets">Rackets</option>
                                    <option value="Bands">Bands</option>
                                    <option value="Weights">Weights</option>
                                    <option value="Poles">Poles</option>
                                    <option value="Nets">Nets</option>
                                    <option value="Jerseys">Jerseys</option>
                                    <option value="Shorts">Shorts</option>
                                    <option value="Track Suits">Track Suits</option>
                                    <option value="Training Gears">Training Gear</option>
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
                                    <textarea name="description"  rows="10" cols="78">{{$product->description}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <div class="col-sm-9">
                                <input class="form-control" hidden name="color" required type="text" value="black, blue, green">
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <div class="col-sm-9">
                                <input class="form-control" hidden name="size" required type="text" value="S, M, L, XL, XXL">
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-3 mb-0">Brand</label>
                            <div class="col-sm-9">
                                <input class="form-control" name="brand" value="{{$product->brand}}" required type="text" placeholder="{{$product->brand}}">
                            </div>
                        </div>

                        <div class="mb-4 row align-items-center">
                            <label class="form-label-title col-sm-3 mb-0">Quantity</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="number" name="quantity" min="0" value="{{$product->quantity}}" required placeholder="{{$product->quantity}}">
                            </div>
                        </div>
                        <div class="mb-4 row align-items-center">
                            <label class="col-sm-3 form-label-title">price</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="number" name="price" value="{{$product->price}}" placeholder="{{$product->price}}">
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
                                    <input class="form-control form-choose" type="text" id="formFile" name="imageone" value="{{$product->imageone}}" placeholder="{{$product->imageone}}" required>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Image Two</label>
                                <div class="col-sm-9">
                                    <input class="form-control form-choose" type="text" id="formFile" name="imagetwo" value="{{$product->imagetwo}}" placeholder="{{$product->imagetwo}}" required>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Image Three</label>
                                <div class="col-sm-9">
                                    <input class="form-control form-choose" type="text" id="formFile" name="imagethree" value="{{$product->imagethree}}" placeholder="{{$product->imagethree}}" required>
                                </div>
                            </div>
                            <div class="mb-4 row align-items-center">
                                <label class="col-sm-3 col-form-label form-label-title">Image Four</label>
                                <div class="col-sm-9">
                                    <input class="form-control form-choose" type="text" id="formFile" name="imagefour" value="{{$product->imagefour}}" placeholder="{{$product->imagefour}}" required>
                                </div>
                            </div>

                    </div>
                </div>



                <div class="card">
                    <button type="submit" class="btn btn-primary w-100 h-100" data-bs-original-title="" title="">SAVE PRODUCT</button>

                </div>

                </form>

            </div>
        </div>
    </div>
    @stop
