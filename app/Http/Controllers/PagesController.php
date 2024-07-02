<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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

    public function subcategory($prod)
    {
        $subcat = explode('_',$prod);
        $products = Product::where('subcategories','=', $subcat[0])
            ->where('categories','=',$subcat[1])
            ->where('tag','=',$subcat[2])
            ->orderBy('created_at', 'desc')->get();
        $subcate = $subcat[0];
        $cat = $subcat[1];
        $tag = $subcat[2];
        return view('subcategory')->with('subcate', $subcate)->with('cat',$cat)->with('tag',$tag)->with('products', $products);
    }

    public function generalsub($prod)
    {
        $gen=explode('_',$prod);
        $cat = $gen[0];
        $subcat = $gen[1];
        return view('generalsub')->with('cat', $cat)->with('subcat', $subcat);
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


    public function cart()
    {

       // $carts = Cart::select('name', 'categories', 'subcategories', 'color')->get();
         $carts= Cart::all();
        $total=0;
        return view('cart',['carts'=>$carts,'total'=>$total])->with('cart');
    }
}
