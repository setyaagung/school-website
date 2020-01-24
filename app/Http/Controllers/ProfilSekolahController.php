<?php

namespace App\Http\Controllers;

use App\Kontak;
use Illuminate\Http\Request;

class ProfilSekolahController extends Controller
{
    public function kata_sambutan()
    {
        $kontak = Kontak::all();
        return view('frontend/profil-sekolah/kata_sambutan', compact('kontak'));
    }
    public function sejarah()
    {
        $kontak = Kontak::all();
        return view('frontend/profil-sekolah/sejarah', compact('kontak'));
    }
    public function visi_misi()
    {
        $kontak = Kontak::all();
        return view('frontend/profil-sekolah/visi_misi', compact('kontak'));
    }
}
