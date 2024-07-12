<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Cat;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

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
        $similars = Product::where('subcategories','=', $product->subcategories)->get();
        return view('productdetails')->with('product', $product)->with('similars', $similars);
    }


    public function subcategory($prod)
    {
        $subcat = explode('_',$prod);
        $products = Product::where('subcategories','=', $subcat[0])
            ->where('categories','=',$subcat[1])
            ->where('tag','=',$subcat[2])
            ->orderBy('created_at', 'desc')->paginate(15);
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
        $products = Product::where('subcategories','=', $subcat)
            ->where('categories','=',$cat)
            ->orderBy('created_at', 'desc')->paginate(15);
        return view('generalsub')->with('cat', $cat)->with('subcat', $subcat)->with('products', $products);
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


    public function orderhistory()
    {
        return view('orderhistory');
    }

    public function invoicepage()
    {
        return view('invoicepage');
    }

    public function product_details(Request $request,$product){
        $prod = Product::where('id', $product)->firstOrFail();
        $request->session()->put('identity', $prod->id);
        $similars = Product::where('subcategories','=', $prod->subcategories)->get();
        dd(count($similars));
        return view('productdetails')->with('product', $prod)->with('similars', $similars);
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
        $carts = Cart::where('buyer_id', Auth::user()->username)->get();
        $total = 0;

        return view('cart')->with('carts',$carts)->with('total',$total);
    }

    public function submitcart(Request $request,)
    {

        $request->validate([
            'color' => ['required', 'string'],
            'quantity' => ['required', 'string'],
            'size' => ['required', 'string'],
        ]);


        $cart = new Cart();
        $cart->product_id = $request->input('identity');
        $cart->buyer_id = Auth::user()->username;
        $cart->quantity = $request->input('quantity');
        $cart->size = $request->input('size');
        $cart->color = $request->input('color');
        $cart->save();
        return redirect()->route('cart')->with('message', 'Product added successfully');
    }

    public function deleteCart($id)
    {
        if ($id == 0){
            Cart::truncate();
        }
        else{
            $item = Cart::find($id);
            $item->delete();
        }
        return redirect()->route('cart')->with('message', 'Product deleted successfully');
    }
}

