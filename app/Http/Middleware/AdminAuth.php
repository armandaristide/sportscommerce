<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()){
            if(!empty(Auth::user()->type == 1 || Auth::user()->type == 2)){ // admin = 1 superAdmin = 2
                return $next($request);
            }
            else{
                return redirect()->route('adminLogin')->with('error', 'You do not have permission to access this page !');
            }
        }
        else{
            return redirect()->route('adminLogin')->with('error', 'You are not Authenticated !');
        }

    }
}
