<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilSekolahController extends Controller
{
    public function kata_sambutan()
    {
        return view('frontend/profil-sekolah/kata_sambutan');
    }
    public function sejarah()
    {
        return view('frontend/profil-sekolah/sejarah');
    }
    public function visi_misi()
    {
        return view('frontend/profil-sekolah/visi_misi');
    }
}
