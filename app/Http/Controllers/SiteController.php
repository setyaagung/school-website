<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi;
use App\Kontak;
use App\Staff;
use App\User;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function home()
    {
        \Date::setLocale('id');
        $informasi = Informasi::orderBy('created_at', 'desc')->get();
        $staff = Staff::all();
        $kontak = Kontak::all();
        return view('frontend/home', compact('informasi', 'staff', 'kontak'));
    }
    public function login()
    {
        return view('frontend/auth/login');
    }
    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
            'role' => 'Siswa'
        ];
        if (Auth::attempt($credentials)) {
            return redirect('/')->with('sukses', 'Selamat Datang Di MA Hidayatus Syubban');
        }
        return redirect('/login')->with('gagal', 'email dan password anda tidak sesuai');
    }
    public function register()
    {
        return view('frontend/auth/register');
    }
    public function postregister(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string',
            'nickname' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);
        $user = new \App\User;
        $user->fullname = $request->fullname;
        $user->nickname = $request->nickname;
        $user->role = 'Siswa';
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();
        //autologin
        Auth::loginUsingId($user->id);
        return redirect('/');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
