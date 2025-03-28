<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
class SuperAdminAuthController extends Controller
{
    //
    public function login():View
    {
        return view('auth.superAdminLogin');
    }

    public function loginSubmit(Request $request){

        $request->validate([
                'email'=>'required|email',
                'password'=>'required'
            ]
        );

        $input = $request->all();
        $data = [
            'email' => $input['email'],
            'password' => $input['password']
        ];

        if(Auth::check()) {
            return redirect()->route('error.doublelogin');
        }
        else
        {
            // check if the given user exists in db
            if(Auth::attempt(['email'=> $data['email'], 'password'=> $data['password']])){
                // check the user role
                if (Auth::user()->type == 2) {
                    return redirect()->route('superAdminDashboardShow');
                }else{
                    return redirect()->route('superAdminLogin')->with('error', "You dont have permission to access");
                }

            }
            else{
                return redirect()->route('superAdminLogin')->with('error', "Wrong credentials");
            }

        }




    }

    public function superAdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }




}

