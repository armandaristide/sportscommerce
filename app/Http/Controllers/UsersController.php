<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Order;

class UsersController extends Controller
{
    public function generalUserDashboard()
    {
        $user = Auth::user();
        $orders = Order::where('buyer_id', $user->id)->paginate(10); // Paginate the orders for the authenticated user

        if ($user->type != 0) {
            return redirect()->route('login')->with('error', "YOU ARE ALREADY LOGGED IN AS A CUSTOMER");
        } else {
            return view('generalUserDashboard', compact('user', 'orders'));
        }
    }

    public function submitEditProfile(Request $request)
    {
        $user = Auth::user();

        // Update user details
        $user->name = $request->name;
        $user->phone = $request->phone;

        // Update password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Save the updated user
        $user->save();

        return redirect()->route('generalUserDashboard')->with('message', 'Profile updated successfully');
    }
}
