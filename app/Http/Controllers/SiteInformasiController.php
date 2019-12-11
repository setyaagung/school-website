<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi;

class SiteInformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::orderBy('created_at', 'desc')->paginate(5);
        return view('frontend/site-informasi/informasi', compact('informasi'));
    }
    public function singleinformasi($slug)
    {
        $informasi = Informasi::where('slug', '=', $slug)->first();
        return view('frontend/site-informasi/singleinformasi', compact('informasi'));
    }
}
