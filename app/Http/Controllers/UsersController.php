<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;

class UsersController extends Controller
{
    public function generalUserDashboard()
    {
        $user = Auth::user();
        $orders = Order::where('buyer_id', '=',$user->username)->get(); // Paginate the orders for the authenticated user
        if ($user->type != 0) {
            return redirect()->route('login')->with('error', "YOU ARE ALREADY LOGGED IN AS A CUSTOMER");
        } else {
            return view('generalUserDashboard')->with('orders', $orders)->with('user', $user);
        }
    }

    public function submitEditProfile(Request $request,$id)
    {
        $request->validate([
            'phone' => ['required', 'string'],
            'name' => ['required', 'string'],
        ]);

        $user = User::where('id', $id)->first();
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        if ($request->input('password') != null) {
            $user->password = Hash::make($request->input('password'));
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('success', "Your Password has been updated");


        }
        $user->save();

        return redirect()->route('dashboard')->with('success', "Your profile has been updated");
    }

}
