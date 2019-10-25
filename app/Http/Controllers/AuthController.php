<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function admin()
    {
        return view('backend/auth/login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard')->with('sukses', 'Selamat Datang Di MA Hidayatus Syubban');
        }
        return redirect('/admin')->with('gagal', 'username dan password anda tidak sesuai');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin');
    }
}
