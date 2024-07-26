<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function generalUserDashboard()
    {
        $user = Auth::user();
        $orders = Order::where('buyer_id','=',$user->id)->get(); // Retrieve the orders for the authenticated user

        if ($user->type != 0 )
        {
            return redirect()->route('login')->with('error', "YOU ARE ALREADY LOGGED IN AS A CUSTOMER");

        }
        else
            return view('generalUserDashboard', compact('user', 'orders'));
    }

}
