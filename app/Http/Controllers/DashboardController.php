<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        \Date::setLocale('id');
        return view('backend/dashboard');
    }
}
