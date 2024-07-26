<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    //
    public function adminDashboard()
    {

        $profile = User::where('email', Auth::user()->email)->first();
        $cats = Cat::where('seller', '=', Auth::user()->username)->Orderby('id', 'desc')->get();
        $products = Product::where('seller', '=', Auth::user()->username)->Orderby('id', 'desc')->paginate(5);
        return view('adminDashboard')->with('profile', $profile)->with('cats', $cats)->with('products', $products);
    }
}
