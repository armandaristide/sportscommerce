<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    public function customLogin(Request $request){

        $input = $request->all();
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // check if the given user exists in db
        if (Auth::attempt(['email'=> $input['email'], 'password'=> $input['password']])) {
            // Check the user role
            if (Auth::user()->type == 0) {
                return redirect()->route('index')->with('success', 'You have successfully logged in!');
            } elseif (Auth::user()->type == 1) {
                return redirect()->route('adminDashboardShow')->with('success', 'You have successfully logged in!');
            } elseif (Auth::user()->type == 2) {
                return redirect()->route('superAdminDashboardShow')->with('success', 'You have successfully logged in!');
            }
        } else {
            return redirect()->route('login')->with('error', "Wrong credentials");
        }

    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // Redirect based on user role
        if (Auth::user()->type == 0) {
            return redirect()->route('index')->with('success', 'You have successfully logged in!');
        } elseif (Auth::user()->type == 1) {
            return redirect()->route('adminDashboardShow')->with('success', 'You have successfully logged in!');
        } elseif (Auth::user()->type == 2) {
            return redirect()->route('superAdminDashboardShow')->with('success', 'You have successfully logged in!');
        }
        return redirect()->route('index')->with('error', 'Unauthorized access');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
