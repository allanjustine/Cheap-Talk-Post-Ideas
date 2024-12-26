<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        if(auth()->check()) {
            return redirect('/');
        }
        return view('pages.auth.login');
    }
    public function logout()
    {
        auth()->logout();
        return redirect('/login')->with('message', 'Log out successfully');
    }
    public function register()
    {
        if(auth()->check()) {
            return redirect('/');
        }
        return view('pages.auth.register');
    }
}
