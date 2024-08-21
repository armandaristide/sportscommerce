<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    //
    public function adminDashboard()
    {
        if(Auth::check()){
            if(Auth::user()->type != 1)
            {
                return redirect()->route('error.doublelogin');
            }
            else{
                $profile = User::where('email', Auth::user()->email)->first();
                $cats = Cat::where('seller', '=', Auth::user()->username)->Orderby('id', 'desc')->get();
                $products = Product::where('seller', '=', Auth::user()->username)->Orderby('id', 'desc')->paginate(7);
                $prods = Product::where('seller', '=', Auth::user()->username)->Orderby('id', 'desc')->get();
                $sold = Order::all();
                $outstocks = Product::where('quantity', '=', 0)->Orderby('id', 'desc')->get();
                return view('adminDashboard')->with('profile', $profile)->with('cats', $cats)->with('products', $products)->with('prods', $prods)->with('sold', $sold)->with('outstocks', $outstocks);

            }
        }
     }
}
