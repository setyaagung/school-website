<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi;
use App\Staff;

class SiteController extends Controller
{
    public function home()
    {
        $informasi = Informasi::orderBy('created_at', 'desc')->get();
        $staff = Staff::all();
        return view('frontend/home', compact('informasi', 'staff'));
    }
    public function login()
    {
        return view('frontend/auth/login');
    }
    public function postLogin()
    {
        return view();
    }
    public function register()
    { }
}
