<?php

namespace App\Http\Controllers;

use App\Formulir;
use App\Pendaftaran;
use PDF;
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
        return redirect()->route('pendaftaran.index')->with('create', 'Pendaftaran baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran $pendaftaran)
    {
        $formulir = Formulir::all();
        return view('backend/pendaftaran/formulir', compact('pendaftaran', 'formulir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        return view('backend/pendaftaran/edit_pendaftaran', compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        $request->validate([
            'tahun_ajaran' => 'required',
            'buka' => 'required',
            'tutup' => 'required',
            'kuota' => 'required'
        ]);
        $pendaftaran->update($request->all());
        return redirect()->route('pendaftaran.index')->with('create', 'pendaftaran berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->delete();
        return redirect()->back()->with('delete', 'Pendaftaran berhasil dihapus');
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
    public function create_formulir($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        return view('backend/pendaftaran/tambah_formulir', compact('pendaftaran'));
    }
    public function store_formulir(Request $request, $id)
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
        $formulir = Formulir::create([
            'pendaftaran_id' => $id,
            'user_id' => auth()->user()->id,
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
            'status_daftar' => 'DAFTAR TEMPAT'
        ]);
        $pendaftaran->formulir()->save($formulir);
        return redirect()->route('pendaftaran.show', $id)->with('create', 'Formulir pendaftaran baru berhasil ditambahkan');
    }
    public function edit_formulir(Pendaftaran $pendaftaran, Formulir $formulir)
    {
        return view('backend/pendaftaran/edit_formulir', compact('pendaftaran', 'formulir'));
    }
    public function update_formulir(Request $request, $id, Formulir $formulir)
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
            'ijasah' => 'required|unique:formulir,ijasah,' . $formulir->id . ',id',
            'nisn' => 'required|unique:formulir,nisn,' . $formulir->id . ',id',
            'nama_ayah' => 'required',
            'agama_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'alamat_ayah' => 'required',
            'nama_ibu' => 'required',
            'agama_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'alamat_ibu' => 'required',
            'status_daftar' => 'required'
        ]);
        $pendaftaran->formulir()->update($request->except('_token', '_method'));
        return redirect()->route('pendaftaran.show', $id)->with('update', 'Formulir pendaftaran yang dipilih berhasil diperbarui');
    }
    public function destroy_formulir($id)
    {
        $formulir = Formulir::where('id', $id);
        $formulir->delete();
        return redirect()->back()->with('delete', 'Formulir pendaftaran berhasil dihapus');
    }
    public function cetak_pendaftar($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $formulir = Formulir::where('pendaftaran_id', $id);
        $pdf = PDF::loadView('backend/export/cetak_pendaftar', compact('pendaftaran', 'formulir'))->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
    public function cetak_formulir(Pendaftaran $pendaftaran, Formulir $formulir)
    {
        \Date::setLocale('id');
        $pdf = PDF::loadView('backend/export/cetak_formulir', compact('pendaftaran', 'formulir'))->setPaper('A4', 'portrait');
        return $pdf->stream();
    }
}
