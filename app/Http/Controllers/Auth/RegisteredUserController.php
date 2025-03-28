<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Userprofile;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required', 'string', 'numeric', 'digits_between:5,12'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $username = str_replace(' ', '', $request->name);
        $digits = 3;
        $randnum =  str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'username' => $username.'_U'.$randnum,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        $loggeduser = new Userprofile();
        $loggeduser->name = $user->name;
        $loggeduser->username = $user->username;
        $loggeduser->email = $user->email;
        $loggeduser->phone = $user->phone;
        $loggeduser->type = 0;
        $loggeduser->session = 1;
        $loggeduser->save();

        //Auth::login($user);

        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}
