@extends('layouts.master')
@section('title','SPORTS CATEGORY | E COMMERCE')
@section('content')

<header>
    <h1>Add Product</h1>
</header>
<main>
    <div class="form-container">
        <h2>Product Information</h2>
        <form>
            <div class="form-group">
                <label for="product-name">Product Name:</label>
                <input type="text" id="product-name" name="product-name">
            </div>

            <div class="form-group">
                <label for="category">Category:</label>
                <select id="category" name="category">
                    <option value="football">FOOTBALL</option>
                    <option value="tennis">TENNIS</option>
                    <option value="cricket">CRICKET</option>
                    <option value="basketball">BASKETBALL</option>
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" cols="50"></textarea>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity">
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price">
            </div>

            <div class="form-group">
                <label for="size">Size:</label>
                <input type="text" id="size" name="size">
            </div>

            <div class="form-group">
                <label for="type">Type:</label>
                <select id="type" name="type">
                    <option value="clothing">Clothing</option>
                    <option value="footwear">Footwear</option>
                    <option value="accessory">Accessory</option>
                </select>
            </div>

            <button type="submit">SUBMIT</button>
        </form>
    </div>
</main>




@stop
