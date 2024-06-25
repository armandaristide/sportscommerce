<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function home()
    {
        return view('home');
    }
    public function product()
    {
        return view('product');
    }
    public function sport()
    {
        $cats = Cat::where('categories','football')->get();
        return view('sport')->with('cats', $cats);
    }
}
