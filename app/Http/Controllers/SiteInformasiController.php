<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informasi;

class SiteInformasiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $informasi = Informasi::where('judul', 'LIKE', '%' . $request->cari . '%')->orderBy('created_at', 'desc')->paginate(5);
        } else {
            $informasi = Informasi::orderBy('created_at', 'desc')->paginate(5);
        }
        return view('frontend/site-informasi/informasi', compact('informasi'));
    }
    public function singleinformasi($slug)
    {
        $informasi = Informasi::where('slug', $slug)->first();
        $next = Informasi::where('id', '>', $informasi->id)->orderBy('id')->first();
        $previous = Informasi::where('id', '<', $informasi->id)->orderBy('id', 'desc')->first();
        return view('frontend/site-informasi/singleinformasi', compact('informasi', 'next', 'previous'));
    }
    public function berita()
    {
        $informasi = Informasi::where('kategori', 'Berita')->orderBy('created_at', 'desc')->paginate(5);
        return view('frontend/site-informasi/informasi', compact('informasi'));
    }
    public function pengumuman()
    {
        $informasi = Informasi::where('kategori', 'Pengumuman')->orderBy('created_at', 'desc')->paginate(5);
        return view('frontend/site-informasi/informasi', compact('informasi'));
    }
}
