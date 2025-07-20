<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Show login form
    public function showLogin()
    {
        return view('auth.signin');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);

        // Support login via email or phone
        $loginType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'ponsel';

        if (Auth::attempt([$loginType => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'Email/Phone or password is incorrect.',
        ])->withInput();
    }

    // Show register form
    public function showRegister()
    {
        return view('auth.signup');
    }

    // Handle register
    public function register(Request $request)
    {
        $request->validate([
            'email'    => 'required|email|unique:users,email',
            'nama' => 'required|string|max:255',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'nama'     => $request->nama,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'ponsel'   => $request->ponsel ?? null,
        ]);

        Auth::login($user);

        return redirect('/home');
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/signin');
    }
}