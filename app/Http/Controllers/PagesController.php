<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('home')->with('products', $products);
    }

    public function productDetails($prod)
    {
        $product = Product::where('id', $prod)->firstOrFail();
        return view('productdetails')->with('product', $product);
    }
    public function about()
    {
        return view('about');
    }
//    public function home()
//    {
//        return view('home');
//    }
    public function product()
    {
        return view('product');
    }
    public function sport()
    {
        $cats = Cat::where('categories','football')->get();
        return view('sport')->with('cats', $cats);
    }
    public function catpage($cat)
    {
        return view('sportcategories')->with('cat', $cat);
    }
}
