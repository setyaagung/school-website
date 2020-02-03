<?php

namespace App\Http\Controllers;

use App\Kontak;
use App\Pendaftaran;
use App\Formulir;
use PDF;
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
        $kontak = Kontak::all();
        return view('frontend/pendaftaran/prosedur_pendaftaran', compact('kontak'));
    }
    public function formulir()
    {
        \Date::setLocale('id');
        $kontak = Kontak::all();
        $pendaftaran = Pendaftaran::where('status', 1)->get();
        return view('frontend/pendaftaran/formulir_pendaftaran', compact('pendaftaran', 'kontak'));
    }
    public function site_create_formulir($id)
    {
        $kontak = Kontak::all();
        $pendaftaran = Pendaftaran::find($id);
        return view('frontend/pendaftaran/input_formulir', compact('pendaftaran', 'kontak'));
    }
    public function site_store_formulir(Request $request, $id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'status_keluarga' => 'required',
            'jml_saudara' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'ijasah' => 'required|unique:formulir',
            'nisn' => 'required|unique:formulir',
            'nama_ayah' => 'required',
            'agama_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'alamat_ayah' => 'required',
            'nama_ibu' => 'required',
            'agama_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'alamat_ibu' => 'required',
        ]);
        if (Formulir::where('id_pendaftaran', $id)->count() >= $pendaftaran->kuota) {
            $formulir = Formulir::create([
                'id_pendaftaran' => $id,
                'id_user' => auth()->user()->id_user,
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'status_keluarga' => $request->status_keluarga,
                'jml_saudara' => $request->jml_saudara,
                'alamat' => $request->alamat,
                'asal_sekolah' => $request->asal_sekolah,
                'ijasah' => $request->ijasah,
                'nisn' => $request->nisn,
                'nama_ayah' => $request->nama_ayah,
                'agama_ayah' => $request->agama_ayah,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'alamat_ayah' => $request->alamat_ayah,
                'nama_ibu' => $request->nama_ibu,
                'agama_ibu' => $request->agama_ibu,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'alamat_ibu' => $request->alamat_ibu,
                'status_daftar' => 'DAFTAR TUNGGU'
            ]);
            $pendaftaran->formulir()->save($formulir);
            return redirect()->route('site.pendaftaran')->with('tunggu', 'Sukses Daftar Tunggu');
        } else {
            $formulir = Formulir::create([
                'id_pendaftaran' => $id,
                'id_user' => auth()->user()->id_user,
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
                'status_keluarga' => $request->status_keluarga,
                'jml_saudara' => $request->jml_saudara,
                'alamat' => $request->alamat,
                'asal_sekolah' => $request->asal_sekolah,
                'ijasah' => $request->ijasah,
                'nisn' => $request->nisn,
                'nama_ayah' => $request->nama_ayah,
                'agama_ayah' => $request->agama_ayah,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'alamat_ayah' => $request->alamat_ayah,
                'nama_ibu' => $request->nama_ibu,
                'agama_ibu' => $request->agama_ibu,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'alamat_ibu' => $request->alamat_ibu,
                'status_daftar' => 'DAFTAR ONLINE'
            ]);
            $pendaftaran->formulir()->save($formulir);
        }
        return redirect()->route('site.pendaftaran')->with('online', 'Sukses Daftar Online');
    }
    public function list_pendaftar()
    {
        $kontak = Kontak::all();
        $pendaftaran = Pendaftaran::paginate(5);
        return view('frontend/pendaftaran/list_pendaftar', compact('pendaftaran', 'kontak'));
    }
    public function list(Pendaftaran $pendaftaran)
    {
        $kontak = Kontak::all();
        $formulir = Formulir::all();
        return view('frontend/pendaftaran/list_all', compact('pendaftaran', 'formulir', 'kontak'));
    }
    public function cari_formulir(Request $request)
    {
        $kontak = Kontak::all();
        if ($request->has('cari')) {
            $formulir = Formulir::where('nama', 'LIKE', '%' . $request->cari . '%')->orderBy('created_at', 'asc')->paginate(15);
        } else {
            $formulir = Formulir::orderBy('created_at', 'asc')->paginate(15);
        }
        return view('frontend/pendaftaran/cari_formulir', compact('formulir', 'kontak'));
    }
    public function cetak(Formulir $formulir)
    {
        \Date::setLocale('id');
        $kontak = Kontak::all();
        $pdf = PDF::loadView('frontend/export/cetak_formulir', compact('formulir', 'kontak'))->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
}
