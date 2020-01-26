<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi;
use App\Kontak;

class SiteInformasiController extends Controller
{
    public function index(Request $request)
    {
        $kontak = Kontak::all();
        if ($request->has('cari')) {
            $informasi = Informasi::where('judul', 'LIKE', '%' . $request->cari . '%')->orderBy('created_at', 'desc')->paginate(5);
        } else {
            $informasi = Informasi::orderBy('created_at', 'desc')->paginate(5);
        }
        return view('frontend/site-informasi/informasi', compact('informasi', 'kontak'));
    }
    public function singleinformasi($slug)
    {
        \Date::setLocale('id');
        $kontak = Kontak::all();
        $informasi = Informasi::where('slug', $slug)->first();
        $next = Informasi::where('id_informasi', '>', $informasi->id_informasi)->orderBy('id_informasi')->first();
        $previous = Informasi::where('id_informasi', '<', $informasi->id_informasi)->orderBy('id_informasi', 'desc')->first();
        return view('frontend/site-informasi/singleinformasi', compact('informasi', 'kontak', 'next', 'previous'));
    }
    public function berita()
    {
        $kontak = Kontak::all();
        $informasi = Informasi::where('kategori', 'Berita')->orderBy('created_at', 'desc')->paginate(5);
        return view('frontend/site-informasi/informasi', compact('informasi', 'kontak'));
    }
    public function pengumuman()
    {
        $kontak = Kontak::all();
        $informasi = Informasi::where('kategori', 'Pengumuman')->orderBy('created_at', 'desc')->paginate(5);
        return view('frontend/site-informasi/informasi', compact('informasi', 'kontak'));
    }
}
