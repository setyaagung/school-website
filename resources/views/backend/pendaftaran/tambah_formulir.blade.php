@extends('backend.main')

@section('title', 'Tambah Formulir PPDB Online')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">FORMULIR PPDB TAHUN AJARAN {{$pendaftaran->tahun_ajaran}}</h3>
						</div>
						<div class="panel-body">
                            <form action="{{route('formulir.store',$pendaftaran->id_pendaftaran)}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <h5><b>A. BIODATA</b></h5>
                                    <div style="margin-left:15px;margin-right:15px">
                                        <div class="form-group @error('nama') has-error @enderror">
                                            <label class="form-ppdb">Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama" value="{{old('nama')}}">
                                            @error('nama')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('tempat_lahir') has-error @enderror">
                                            <label class="form-ppdb">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tempat_lahir" placeholder="ex: Semarang" value="{{old('tempat_lahir')}}">
                                            @error('tempat_lahir')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('tanggal_lahir') has-error @enderror">
                                            <label class="form-ppdb">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                                            @error('tanggal_lahir')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('jenis_kelamin') has-error @enderror">
                                            <label class="form-ppdb">Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin">
                                                <option value="">-- Pilih --</option>
                                                <option value="Laki-Laki" {{(old('jenis_kelamin') == 'Laki-Laki') ? 'selected' : ''}}>Laki - Laki</option>
                                                <option value="Perempuan" {{(old('jenis_kelamin') == 'Perempuan') ? 'selected' : ''}}>Perempuan</option>
                                            </select>
                                            @error('jenis_kelamin')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('agama') has-error @enderror">
                                            <label class="form-ppdb">Agama</label>
                                            <select class="form-control" name="agama">
                                                <option value="">-- Pilih --</option>
                                                <option value="Islam" {{(old('agama') == 'Islam') ? 'selected' : ''}}>Islam</option>
                                                <option value="Kristen" {{(old('agama') == 'Kristen') ? 'selected' : ''}}>Kristen</option>
                                                <option value="Katholik" {{(old('agama') == 'Katholik') ? 'selected' : ''}}>Katholik</option>
                                                <option value="Hindu" {{(old('agama') == 'Hindu') ? 'selected' : ''}}>Hindu</option>
                                                <option value="Budha" {{(old('agama') == 'Budha') ? 'selected' : ''}}>Budha</option>
                                            </select>
                                            @error('agama')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('status_keluarga') has-error @enderror">
                                            <label class="form-ppdb">Status Dalam Keluarga</label>
                                            <select class="form-control" name="status_keluarga">
                                                <option value="">-- Pilih --</option>
                                                <option value="Anak Kandung" {{(old('status_keluarga') == 'Anak Kandung') ? 'selected' : ''}}>Anak Kandung</option>
                                                <option value="Anak Angkat" {{(old('status_keluarga') == 'Anak Angkat') ? 'selected' : ''}}>Anak Angkat</option>
                                            </select>
                                            @error('status_keluarga')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('jml_saudara') has-error @enderror">
                                            <label class="form-ppdb">Jumlah Saudara</label>
                                            <input type="number" class="form-control" name="jml_saudara" value="{{old('jml_saudara')}}">
                                            @error('jml_saudara')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('alamat') has-error @enderror">
                                            <label class="form-ppdb">Alamat</label>
                                            <textarea class="form-control" name="alamat" rows="3">{{old('alamat')}}</textarea>
                                            @error('alamat')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div> 
                                    <h5><b>B. SMP/MTs ASAL</b></h5>
                                    <div style="margin-left:15px;margin-right:15px">
                                        <div class="form-group @error('asal_sekolah') has-error @enderror">
                                            <label class="form-ppdb">Nama SMP/MTs</label>
                                            <input type="text" class="form-control" name="asal_sekolah" value="{{old('asal_sekolah')}}">
                                            @error('asal_sekolah')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('ijasah') has-error @enderror">
                                            <label class="form-ppdb">Ijasah SMP/MTs</label>
                                            <input type="text" class="form-control" name="ijasah" value="{{old('ijasah')}}">
                                            @error('ijasah')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('nisn') has-error @enderror">
                                            <label class="form-ppdb">NISN</label>
                                            <input type="number" class="form-control" name="nisn" value="{{old('nisn')}}">
                                            @error('nisn')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <h5><b>C. AYAH</b></h5>
                                    <div style="margin-left:15px;margin-right:15px">
                                        <div class="form-group @error('nama_ayah') has-error @enderror">
                                            <label class="form-ppdb">Nama Ayah</label>
                                            <input type="text" class="form-control" name="nama_ayah" value="{{old('nama_ayah')}}">
                                            @error('nama_ayah')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('agama_ayah') has-error @enderror">
                                            <label class="form-ppdb">Agama</label>
                                            <select class="form-control" name="agama_ayah">
                                                <option value="">-- Pilih --</option>
                                                <option value="Islam" {{(old('agama_ayah') == 'Islam') ? 'selected' : ''}}>Islam</option>
                                                <option value="Kristen" {{(old('agama_ayah') == 'Kristen') ? 'selected' : ''}}>Kristen</option>
                                                <option value="Katholik" {{(old('agama_ayah') == 'Katholik') ? 'selected' : ''}}>Katholik</option>
                                                <option value="Hindu" {{(old('agama_ayah') == 'Hindu') ? 'selected' : ''}}>Hindu</option>
                                                <option value="Budha" {{(old('agama_ayah') == 'Budha') ? 'selected' : ''}}>Budha</option>
                                            </select>
                                            @error('agama_ayah')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('pekerjaan_ayah') has-error @enderror">
                                            <label class="form-ppdb">Pekerjaan</label>
                                            <select class="form-control" name="pekerjaan_ayah">
                                                <option value="">-- Pilih --</option>
                                                <option value="PNS" {{(old('pekerjaan_ayah') == 'PNS') ? 'selected' : ''}}>PNS</option>
                                                <option value="TNI/Polri" {{(old('pekerjaan_ayah') == 'TNI/Polri') ? 'selected' : ''}}>TNI/Polri</option>
                                                <option value="Guru/Dosen" {{(old('pekerjaan_ayah') == 'Guru/Dosen') ? 'selected' : ''}}>Guru/Dosen</option>
                                                <option value="BUMN" {{(old('pekerjaan_ayah') == 'BUMN') ? 'selected' : ''}}>BUMN</option>
                                                <option value="Pedagang" {{(old('pekerjaan_ayah') == 'Pedagang') ? 'selected' : ''}}>Pedagang</option>
                                                <option value="Swasta" {{(old('pekerjaan_ayah') == 'Swasta') ? 'selected' : ''}}>Swasta</option>
                                                <option value="Wiraswasta" {{(old('pekerjaan_ayah') == 'Wiraswasta') ? 'selected' : ''}}>Wiraswasta</option>
                                                <option value="Pensiunan" {{(old('pekerjaan_ayah') == 'Pensiunan') ? 'selected' : ''}}>Pensiunan</option>
                                                <option value="Lainnya" {{(old('pekerjaan_ayah') == 'Lainnya') ? 'selected' : ''}}>Lainnya</option>
                                            </select>
                                            @error('pekerjaan_ayah')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('alamat_ayah') has-error @enderror">
                                            <label class="form-ppdb">Alamat</label>
                                            <textarea class="form-control" name="alamat_ayah" rows="3">{{old('alamat_ayah')}}</textarea>
                                            @error('alamat_ayah')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <h5><b>D. IBU</b></h5>
                                    <div style="margin-left:15px;margin-right:15px">
                                        <div class="form-group @error('nama_ibu') has-error @enderror">
                                            <label class="form-ppdb">Nama Ibu</label>
                                            <input type="text" class="form-control" name="nama_ibu" value="{{old('nama_ibu')}}">
                                            @error('nama_ibu')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('agama_ibu') has-error @enderror">
                                            <label class="form-ppdb">Agama</label>
                                            <select class="form-control" name="agama_ibu">
                                                <option value="">-- Pilih --</option>
                                                <option value="Islam" {{(old('agama_ibu') == 'Islam') ? 'selected' : ''}}>Islam</option>
                                                <option value="Kristen" {{(old('agama_ibu') == 'Kristen') ? 'selected' : ''}}>Kristen</option>
                                                <option value="Katholik" {{(old('agama_ibu') == 'Katholik') ? 'selected' : ''}}>Katholik</option>
                                                <option value="Hindu" {{(old('agama_ibu') == 'Hindu') ? 'selected' : ''}}>Hindu</option>
                                                <option value="Budha" {{(old('agama_ibu') == 'Budha') ? 'selected' : ''}}>Budha</option>
                                            </select>
                                            @error('agama_ibu')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('pekerjaan_ibu') has-error @enderror">
                                            <label class="form-ppdb">Pekerjaan</label>
                                            <select class="form-control" name="pekerjaan_ibu">
                                                <option value="">-- Pilih --</option>
                                                <option value="PNS" {{(old('pekerjaan_ibu') == 'PNS') ? 'selected' : ''}}>PNS</option>
                                                <option value="TNI/Polri" {{(old('pekerjaan_ibu') == 'TNI/Polri') ? 'selected' : ''}}>TNI/Polri</option>
                                                <option value="Guru/Dosen" {{(old('pekerjaan_ibu') == 'Guru/Dosen') ? 'selected' : ''}}>Guru/Dosen</option>
                                                <option value="BUMN" {{(old('pekerjaan_ibu') == 'BUMN') ? 'selected' : ''}}>BUMN</option>
                                                <option value="Pedagang" {{(old('pekerjaan_ibu') == 'Pedagang') ? 'selected' : ''}}>Pedagang</option>
                                                <option value="Swasta" {{(old('pekerjaan_ibu') == 'Swasta') ? 'selected' : ''}}>Swasta</option>
                                                <option value="Wiraswasta" {{(old('pekerjaan_ibu') == 'Wiraswasta') ? 'selected' : ''}}>Wiraswasta</option>
                                                <option value="Pensiunan" {{(old('pekerjaan_ibu') == 'Pensiunan') ? 'selected' : ''}}>Pensiunan</option>
                                                <option value="Lainnya" {{(old('pekerjaan_ibu') == 'Lainnya') ? 'selected' : ''}}>Lainnya</option>
                                            </select>
                                            @error('pekerjaan_ibu')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('alamat_ibu') has-error @enderror">
                                            <label class="form-ppdb">Alamat</label>
                                            <textarea class="form-control" name="alamat_ibu" rows="3">{{old('alamat_ibu')}}</textarea>
                                            @error('alamat_ibu')
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