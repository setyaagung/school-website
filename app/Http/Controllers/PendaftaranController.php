<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Date::setLocale('id');
        $pendaftaran = Pendaftaran::all();
        return view('backend/pendaftaran/index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/pendaftaran/tambah_pendaftaran');
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
            'tahun_ajaran' => 'required',
            'buka' => 'required',
            'tutup' => 'required',
            'kuota' => 'required'
        ]);

        $pendaftaran = Pendaftaran::create([
            'tahun_ajaran' => $request->tahun_ajaran,
            'buka' => $request->buka,
            'tutup' => $request->tutup,
            'user_id' => auth()->user()->id,
            'kuota' => $request->kuota,
            'status' => 0,
        ]);
        return redirect()->route('pendaftaran.index')->with('create', 'Data staff baru berhasil ditambahkan');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function ubahstatus($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->status = !$pendaftaran->status;
        if ($pendaftaran->save()) {
            return redirect()->route('pendaftaran.index')->with('update', 'Pendaftaran yang dipilih berhasil diperbarui');
        } else {
            return redirect()->route('ubahstatus');
        }
    }
}
