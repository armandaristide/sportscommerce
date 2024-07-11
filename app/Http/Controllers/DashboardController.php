<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function superAdminDashboard()
    {
        return view('superAdminDashboard');
    }

    public function adminDashboard()
    {
        $profile = User::where('email', Auth::user()->email)->first();
        $cats = Cat::where('seller', '=', Auth::user()->username)->Orderby('id', 'desc')->get();
        $products = Product::where('seller', '=', Auth::user()->username)->Orderby('id', 'desc')->get();
        return view('adminDashboard')->with('profile', $profile)->with('cats', $cats)->with('products', $products);
    }

    public function submitCategory(Request $request)
    {
        $request->validate([
            'categories' => ['required', 'string'],
            'backgroundurl' => ['required', 'string'],
        ]);

        $cat = new Cat();
        $cat->categories = $request->input('categories');
        $cat->backgroundurl = $request->input('backgroundurl');
        $cat->seller = Auth::user()->username;
        $cat->save();
        return redirect()->route('adminDashboardShow')->with('message', 'Category added successfully');
    }

    public function addCategory()
    {
        return view('selleradmin.addcategory');
    }

    public function addProduct()
    {
        $cats = Cat::all();
        return view('selleradmin.addproduct')->with('cats', $cats);
    }

    public function submitProduct(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'categories' => ['required', 'string'],
            'subcategories' => ['required', 'string'],
            'quantity' => ['required', 'numeric'],
            'color' => ['required', 'string'],
            'tag' => ['required', 'string'],
            'brand' => ['required', 'string'],
            'imageone' => ['required', 'string'],
            'imagetwo' => ['required', 'string'],
            'imagethree' => ['required', 'string'],
            'imagefour' => ['required', 'string'],
            'description' => ['required', 'string'],
            'price' => ['required', 'string'],
            'size' => ['required', 'string'],
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->categories = $request->input('categories');
        $product->subcategories = $request->input('subcategories');
        $product->color = $request->input('color');
        $product->tag = $request->input('tag');
        $product->brand = $request->input('brand');
        $product->imageone = $request->input('imageone');
        $product->imagetwo = $request->input('imagetwo');
        $product->imagethree = $request->input('imagethree');
        $product->imagefour = $request->input('imagefour');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->size = $request->input('size');
        $product->filter = "none";
        $product->seller = Auth::user()->username;
        $product->save();
        return redirect()->route('adminDashboardShow')->with('message', 'Product added successfully');
    }


    public function generalUserDashboard()
    {
        $user = Auth::user();
        $orders = $user->orders; // Retrieve the orders for the authenticated user

        return view('generalUserDashboard', compact('user', 'orders'));
    }

}
