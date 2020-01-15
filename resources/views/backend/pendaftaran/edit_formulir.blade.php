@extends('backend.main')

@section('title', 'Edit Formulir PPDB Online')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">EDIT FORMULIR PPDB TAHUN AJARAN {{$pendaftaran->tahun_ajaran}}</h3>
						</div>
						<div class="panel-body">
                            <form action="{{url('/administrator/pendaftaran/'.$pendaftaran->id.'/formulir/'.$formulir->id.'/update')}}" method="POST">
                                {{ csrf_field() }}
                                @method('PATCH')
                                    <h5><b>A. BIODATA</b></h5>
                                    <div style="margin-left:15px;margin-right:15px">
                                        <div class="form-group @error('nama') has-error @enderror">
                                            <label class="form-ppdb">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama" value="{{$formulir->nama}}">
                                            @error('nama')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('tempat_lahir') has-error @enderror">
                                            <label class="form-ppdb">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tempat_lahir" placeholder="ex: Semarang" value="{{$formulir->tempat_lahir}}">
                                            @error('tempat_lahir')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('tanggal_lahir') has-error @enderror">
                                            <label class="form-ppdb">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tanggal_lahir" value="{{$formulir->tanggal_lahir}}">
                                            @error('tanggal_lahir')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('jenis_kelamin') has-error @enderror">
                                            <label class="form-ppdb">Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin">
                                                <option value="">-- Pilih --</option>
                                                <option value="Laki-Laki" @if($formulir->jenis_kelamin == "Laki-Laki") selected @endif>Laki - Laki</option>
                                                <option value="Perempuan" @if($formulir->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
                                            </select>
                                            @error('jenis_kelamin')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('agama') has-error @enderror">
                                            <label class="form-ppdb">Agama</label>
                                            <select class="form-control" name="agama">
                                                <option value="">-- Pilih --</option>
                                                <option value="Islam" @if($formulir->agama == "Islam") selected @endif>Islam</option>
                                                <option value="Kristen" @if($formulir->agama == "Kristen") selected @endif>Kristen</option>
                                                <option value="Katholik" @if($formulir->agama == "Katholik") selected @endif>Katholik</option>
                                                <option value="Hindu" @if($formulir->agama == "Hindu") selected @endif>Hindu</option>
                                                <option value="Budha" @if($formulir->agama == "Budha") selected @endif>Budha</option>
                                            </select>
                                            @error('agama')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('status_keluarga') has-error @enderror">
                                            <label class="form-ppdb">Status Dalam Keluarga</label>
                                            <select class="form-control" name="status_keluarga">
                                                <option value="">-- Pilih --</option>
                                                <option value="Anak Kandung" @if($formulir->status_keluarga == "Anak Kandung") selected @endif>Anak Kandung</option>
                                                <option value="Anak Angkat"  @if($formulir->status_keluarga == "Anak Angkat") selected @endif>Anak Angkat</option>
                                            </select>
                                            @error('status_keluarga')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('jml_saudara') has-error @enderror">
                                            <label class="form-ppdb">Jumlah Saudara</label>
                                            <input type="number" class="form-control" name="jml_saudara" value="{{$formulir->jml_saudara}}">
                                            @error('jml_saudara')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('alamat') has-error @enderror">
                                            <label class="form-ppdb">Alamat</label>
                                            <textarea class="form-control" name="alamat" rows="3">{{$formulir->alamat}}</textarea>
                                            @error('alamat')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div> 
                                    <h5><b>B. SMP/MTs ASAL</b></h5>
                                    <div style="margin-left:15px;margin-right:15px">
                                        <div class="form-group @error('asal_sekolah') has-error @enderror">
                                            <label class="form-ppdb">Nama SMP/MTs</label>
                                            <input type="text" class="form-control" name="asal_sekolah" value="{{$formulir->asal_sekolah}}">
                                            @error('asal_sekolah')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('ijasah') has-error @enderror">
                                            <label class="form-ppdb">Ijasah SMP/MTs</label>
                                            <input type="number" class="form-control" name="ijasah" value="{{$formulir->ijasah}}">
                                            @error('ijasah')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('nisn') has-error @enderror">
                                            <label class="form-ppdb">NISN</label>
                                            <input type="number" class="form-control" name="nisn" value="{{$formulir->nisn}}">
                                            @error('nisn')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <h5><b>C. AYAH</b></h5>
                                    <div style="margin-left:15px;margin-right:15px">
                                        <div class="form-group @error('nama_ayah') has-error @enderror">
                                            <label class="form-ppdb">Nama Ayah</label>
                                            <input type="text" class="form-control" name="nama_ayah" value="{{$formulir->nama_ayah}}">
                                            @error('nama_ayah')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('agama_ayah') has-error @enderror">
                                            <label class="form-ppdb">Agama</label>
                                            <select class="form-control" name="agama_ayah">
                                                <option value="">-- Pilih --</option>
                                                <option value="Islam" @if($formulir->agama_ayah == "Islam") selected @endif>Islam</option>
                                                <option value="Kristen" @if($formulir->agama_ayah == "Kristen") selected @endif>Kristen</option>
                                                <option value="Katholik" @if($formulir->agama_ayah == "Katholik") selected @endif>Katholik</option>
                                                <option value="Hindu" @if($formulir->agama_ayah == "Hindu") selected @endif>Hindu</option>
                                                <option value="Budha" @if($formulir->agama_ayah == "Budha") selected @endif>Budha</option>
                                            </select>
                                            @error('agama_ayah')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('pekerjaan_ayah') has-error @enderror">
                                            <label class="form-ppdb">Pekerjaan</label>
                                            <select class="form-control" name="pekerjaan_ayah">
                                                <option value="">-- Pilih --</option>
                                                <option value="PNS" @if($formulir->pekerjaan_ayah == "PNS") selected @endif>PNS</option>
                                                <option value="TNI/Polri" @if($formulir->pekerjaan_ayah == "TNI/Polri") selected @endif>TNI/Polri</option>
                                                <option value="Guru/Dosen" @if($formulir->pekerjaan_ayah == "Guru/Dosen") selected @endif>Guru/Dosen</option>
                                                <option value="BUMN" @if($formulir->pekerjaan_ayah == "BUMN") selected @endif>BUMN</option>
                                                <option value="Pedagang" @if($formulir->pekerjaan_ayah == "Pedagang") selected @endif>Pedagang</option>
                                                <option value="Swasta" @if($formulir->pekerjaan_ayah == "Swasta") selected @endif>Swasta</option>
                                                <option value="Wiraswasta" @if($formulir->pekerjaan_ayah == "Wiraswasta") selected @endif>Wiraswasta</option>
                                                <option value="Pensiunan" @if($formulir->pekerjaan_ayah == "Pensiunan") selected @endif>Pensiunan</option>
                                                <option value="Lainnya" @if($formulir->pekerjaan_ayah == "Lainnya") selected @endif>Lainnya</option>
                                            </select>
                                            @error('pekerjaan_ayah')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('alamat_ayah') has-error @enderror">
                                            <label class="form-ppdb">Alamat</label>
                                            <textarea class="form-control" name="alamat_ayah" rows="3">{{$formulir->alamat_ayah}}</textarea>
                                            @error('alamat_ayah')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <h5><b>D. IBU</b></h5>
                                    <div style="margin-left:15px;margin-right:15px">
                                        <div class="form-group @error('nama_ibu') has-error @enderror">
                                            <label class="form-ppdb">Nama Ibu</label>
                                            <input type="text" class="form-control" name="nama_ibu" value="{{$formulir->nama_ibu}}">
                                            @error('nama_ibu')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('agama_ibu') has-error @enderror">
                                            <label class="form-ppdb">Agama</label>
                                            <select class="form-control" name="agama_ibu">
                                                <option value="">-- Pilih --</option>
                                                <option value="Islam" @if($formulir->agama_ibu == "Islam") selected @endif>Islam</option>
                                                <option value="Kristen" @if($formulir->agama_ibu == "Kristen") selected @endif>Kristen</option>
                                                <option value="Katholik" @if($formulir->agama_ibu == "Katholik") selected @endif>Katholik</option>
                                                <option value="Hindu" @if($formulir->agama_ibu == "Hindu") selected @endif>Hindu</option>
                                                <option value="Budha" @if($formulir->agama_ibu == "Budha") selected @endif>Budha</option>
                                            </select>
                                            @error('agama_ibu')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('pekerjaan_ibu') has-error @enderror">
                                            <label class="form-ppdb">Pekerjaan</label>
                                            <select class="form-control" name="pekerjaan_ibu">
                                                <option value="">-- Pilih --</option>
                                                <option value="PNS" @if($formulir->pekerjaan_ibu == "PNS") selected @endif>PNS</option>
                                                <option value="TNI/Polri" @if($formulir->pekerjaan_ibu == "TNI/Polri") selected @endif>TNI/Polri</option>
                                                <option value="Guru/Dosen" @if($formulir->pekerjaan_ibu == "Guru/Dosen") selected @endif>Guru/Dosen</option>
                                                <option value="BUMN" @if($formulir->pekerjaan_ibu == "BUMN") selected @endif>BUMN</option>
                                                <option value="Pedagang" @if($formulir->pekerjaan_ibu == "Pedagang") selected @endif>Pedagang</option>
                                                <option value="Swasta" @if($formulir->pekerjaan_ibu == "Swasta") selected @endif>Swasta</option>
                                                <option value="Wiraswasta" @if($formulir->pekerjaan_ibu == "Wiraswasta") selected @endif>Wiraswasta</option>
                                                <option value="Pensiunan" @if($formulir->pekerjaan_ibu == "Pensiunan") selected @endif>Pensiunan</option>
                                                <option value="Lainnya" @if($formulir->pekerjaan_ibu == "Lainnya") selected @endif>Lainnya</option>
                                            </select>
                                            @error('pekerjaan_ibu')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('alamat_ibu') has-error @enderror">
                                            <label class="form-ppdb">Alamat</label>
                                            <textarea class="form-control" name="alamat_ibu" rows="3">{{$formulir->alamat_ibu}}</textarea>
                                            @error('alamat_ibu')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                    <h5><b>E. KELENGKAPAN BERKAS</b></h5>
                                    <div style="margin-left:15px;margin-right:15px">
                                        <div class="form-group">
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="berkas[]" value="foto" {{in_array("foto",$berkas)? "checked":""}}>
                                                <span> Pas photo ukuran 3 x 4 ( 3 lembar )</span>
                                            </label>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="berkas[]" value="raport" {{in_array("raport",$berkas)? "checked":""}}>
                                                <span> Foto copy raport SMP/MTs ( semester 1 sd 5 )</span>
                                            </label>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="berkas[]" value="skhun" {{in_array("skhun",$berkas)? "checked":""}}>
                                                <span> Foto copy SKHUN ( jika sudah ada ) yang sudah dilegalisir</span>
                                            </label>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="berkas[]" value="ijasah" {{in_array("ijasah",$berkas)? "checked":""}}>
                                                <span> Foto copy Ijazah ( jika sudah ada ) yang sudah dilegalisir</span>
                                            </label>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="berkas[]" value="piagam" {{in_array("piagam",$berkas)? "checked":""}}>
                                                <span> Foto copy Piagam penghargaan Akademik / Non Akademik( jika ada )</span>
                                            </label>
                                        </div>
                                        <div class="form-group @error('status_daftar') has-error @enderror">
                                            <label class="form-ppdb">Status Daftar</label>
                                            <select class="form-control" name="status_daftar">
                                                <option value="">-- Pilih --</option>
                                                <option value="DAFTAR ONLINE" @if($formulir->status_daftar == "DAFTAR ONLINE") selected @endif>DAFTAR ONLINE</option>
                                                <option value="DAFTAR TEMPAT"  @if($formulir->status_daftar == "DAFTAR TEMPAT") selected @endif>DAFTAR TEMPAT</option>
                                                <option value="DAFTAR TUNGGU"  @if($formulir->status_daftar == "DAFTAR TUNGGU") selected @endif>DAFTAR TUNGGU</option>
                                                <option value="KONFIRMASI" @if($formulir->status_daftar == "KONFIRMASI") selected @endif>KONFIRMASI</option>
                                                <option value="DAFTAR ULANG"  @if($formulir->status_daftar == "DAFTAR ULANG") selected @endif>DAFTAR ULANG</option>
                                                <option value="DITERIMA" @if($formulir->status_daftar == "DITERIMA") selected @endif>DITERIMA</option>
                                            </select>
                                            @error('status_daftar')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div style="float: right;">
                                            <button type="button" class="btn btn-secondary" onclick="javascript:history.back()">Kembali</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
					</div>
				</div>
					<!-- END INPUTS -->
            </div>
        </div>
    </div>
</div>

@endsection