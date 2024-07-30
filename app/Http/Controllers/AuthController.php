<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login.index');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();

            // Redirect to the intended page or dashboard
            return redirect()->intended('/dashboard');
        }

        // Authentication failed, redirect back with an error message
        return back()->withErrors([
            'username' => 'Username atau kata sandi salah. Silakan coba lagi.',
        ]);
    }
}
