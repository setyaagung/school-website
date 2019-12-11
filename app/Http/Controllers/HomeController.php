<?php

namespace App\Http\Controllers;

use App\Informasi;
use App\Staff;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $informasi = Informasi::orderBy('created_at', 'desc')->get();
        $staff = Staff::all();
        return view('frontend/home', compact('informasi', 'staff'));
    }
}
