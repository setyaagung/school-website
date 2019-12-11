<?php

namespace App\Http\Controllers;

use App\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasi = Informasi::orderBy('created_at', 'desc')->get();
        return view('backend/informasi/index', compact('informasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/informasi/tambah_informasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'isi' => 'required',
            'gambar' => 'required'
        ]);

        $informasi = Informasi::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'isi' => $request->isi,
            'user_id' => auth()->user()->id,
            'gambar' => $request->gambar,

        ]);
        return redirect()->route('informasi.index')->with('create', 'Data informasi baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi $informasi)
    {
        return view('backend/informasi/edit_informasi', compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasi $informasi)
    {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'isi' => 'required',
            'gambar' => 'required'
        ]);
        $informasi->update($request->all());
        return redirect()->route('informasi.index')->with('update', 'Data informasi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $informasi = Informasi::find($id);
        $informasi->delete();
        return redirect()->back()->with('delete', 'Data informasi berhasil dihapus');
    }
}
