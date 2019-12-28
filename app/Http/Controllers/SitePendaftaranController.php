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
    public function prosedur()
    {
        return view('frontend/pendaftaran/prosedur_pendaftaran');
    }
    public function formulir()
    {
        return view('frontend/pendaftaran/formulir_pendaftaran');
    }
    public function list_pendaftar()
    {
        return view('frontend/pendaftaran/list_pendaftar');
    }
    public function cari_formulir()
    {
        return view('frontend/pendaftaran/cari_formulir');
    }
}
