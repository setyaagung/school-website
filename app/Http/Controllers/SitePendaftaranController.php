<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;

class SitePendaftaranController extends Controller
{
    public function index()
    {
        $kontak = Kontak::all();
        return view('frontend/pendaftaran/home', compact('kontak'));
    }
}
