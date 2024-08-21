<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminAuthController extends Controller
{
    //
    public function login(): View
    {
        return view('auth.adminLogin');
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
                if(Auth::user()->type == 1){
                    return redirect()->route('adminDashboardShow');
                }else{
                    return redirect()->route('adminLogin')->with('error', "You dont have permission to access");
                }
            }
            else{
                return redirect()->route('adminLogin')->with('error', "Wrong credentials");
            }
        }


    }

    public function adminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('adminLogin');
    }

}
