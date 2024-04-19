<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('/home');
        }
        return redirect('login');
    }

    public function logout(Request $request)
    {
        // Logout user
        auth()->logout();

        // Redirect to login page
        return redirect()->route('login');
    }
}
