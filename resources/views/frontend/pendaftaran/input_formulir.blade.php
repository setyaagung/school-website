@extends('frontend.layout')

@section('title', 'PPDB Online')

@section('content')
    <section class="jumbotron sambutan">
        <div class="container">
            <h3 class="display-4 animated fadeInDown delay-1s">PPDB Online</h3>
            <p class="animated fadeInDown delay-1s"><a href="/">Home </a>  <span class="fa fa-arrow-right"></span>  <a href="/pendaftaran"> PPDB Online</a></p>
        </div>
    </section>
    <section class="kata-sambutan news">
        <div class="container">
            <div class="row">
                @include('frontend/sidebar')
    
                <div class="col-lg-8">
                    <h6>FORMULIR PENDAFTARAN ONLINE</h6>
                    <hr>
                    <form action="{{route('site.form.store',$pendaftaran->id_pendaftaran)}}" method="POST">
                        {{ csrf_field() }}
                        <h6>A. Biodata</h6>
                        <div class="container">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{old('nama')}}">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" placeholder="contoh: Semarang" value="{{old('tempat_lahir')}}">
                                    @error('tempat_lahir')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                                    @error('tanggal_lahir')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                                        <option value="">-- Pilih --</option>
                                        <option value="Laki-Laki" {{(old('jenis_kelamin') == 'Laki-Laki') ? 'selected' : ''}}>Laki - Laki</option>
                                        <option value="Perempuan" {{(old('jenis_kelamin') == 'Perempuan') ? 'selected' : ''}}>Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9">
                                    <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                                        <option value="">-- Pilih --</option>
                                        <option value="Islam" {{(old('agama') == 'Islam') ? 'selected' : ''}}>Islam</option>
                                        <option value="Kristen" {{(old('agama') == 'Kristen') ? 'selected' : ''}}>Kristen</option>
                                        <option value="Katholik" {{(old('agama') == 'Katholik') ? 'selected' : ''}}>Katholik</option>
                                        <option value="Hindu" {{(old('agama') == 'Hindu') ? 'selected' : ''}}>Hindu</option>
                                        <option value="Budha" {{(old('agama') == 'Budha') ? 'selected' : ''}}>Budha</option>
                                    </select>
                                    @error('agama')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status Dalam Keluarga</label>
                                <div class="col-sm-9">
                                    <select class="form-control @error('status_keluarga') is-invalid @enderror" name="status_keluarga">
                                        <option value="">-- Pilih --</option>
                                        <option value="Anak Kandung" {{(old('status_keluarga') == 'Anak Kandung') ? 'selected' : ''}}>Anak Kandung</option>
                                        <option value="Anak Angkat" {{(old('status_keluarga') == 'Anak Angkat') ? 'selected' : ''}}>Anak Angkat</option>
                                    </select>
                                    @error('status_keluarga')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jumlah Saudara</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('jml_saudara') is-invalid @enderror" name="jml_saudara" value="{{old('jml_saudara')}}">
                                    @error('jml_saudara')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="4">{{old('alamat')}}</textarea>
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <h6>B. SMP/MTs Asal</h6>
                        <div class="container">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama SMP/MTs</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" name="asal_sekolah" value="{{old('asal_sekolah')}}">
                                    @error('asal_sekolah')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ijasah SMP/MTs</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('ijasah') is-invalid @enderror" name="ijasah" value="{{old('ijasah')}}">
                                    @error('ijasah')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NISN</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{old('nisn')}}">
                                    @error('nisn')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <h6>C. Ayah</h6>
                        <div class="container">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" name="nama_ayah" value="{{old('nama_ayah')}}">
                                    @error('nama_ayah')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9">
                                    <select class="form-control @error('agama_ayah') is-invalid @enderror" name="agama_ayah">
                                        <option value="">-- Pilih --</option>
                                        <option value="Islam" {{(old('agama_ayah') == 'Islam') ? 'selected' : ''}}>Islam</option>
                                        <option value="Kristen" {{(old('agama_ayah') == 'Kristen') ? 'selected' : ''}}>Kristen</option>
                                        <option value="Katholik" {{(old('agama_ayah') == 'Katholik') ? 'selected' : ''}}>Katholik</option>
                                        <option value="Hindu" {{(old('agama_ayah') == 'Hindu') ? 'selected' : ''}}>Hindu</option>
                                        <option value="Budha" {{(old('agama_ayah') == 'Budha') ? 'selected' : ''}}>Budha</option>
                                    </select>
                                    @error('agama_ayah')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9">
                                    <select class="form-control @error('pekerjaan_ayah') is-invalid @enderror" name="pekerjaan_ayah">
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
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control @error('alamat_ayah') is-invalid @enderror" name="alamat_ayah" rows="4">{{old('alamat_ayah')}}</textarea>
                                    @error('alamat_ayah')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <h6>D. Ibu</h6>
                        <div class="container">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" name="nama_ibu" value="{{old('nama_ibu')}}">
                                    @error('nama_ibu')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9">
                                    <select class="form-control @error('agama_ibu') is-invalid @enderror" name="agama_ibu">
                                        <option value="">-- Pilih --</option>
                                        <option value="Islam" {{(old('agama_ibu') == 'Islam') ? 'selected' : ''}}>Islam</option>
                                        <option value="Kristen" {{(old('agama_ibu') == 'Kristen') ? 'selected' : ''}}>Kristen</option>
                                        <option value="Katholik" {{(old('agama_ibu') == 'Katholik') ? 'selected' : ''}}>Katholik</option>
                                        <option value="Hindu" {{(old('agama_ibu') == 'Hindu') ? 'selected' : ''}}>Hindu</option>
                                        <option value="Budha" {{(old('agama_ibu') == 'Budha') ? 'selected' : ''}}>Budha</option>
                                    </select>
                                    @error('agama_ibu')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9">
                                    <select class="form-control @error('pekerjaan_ibu') is-invalid @enderror" name="pekerjaan_ibu">
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
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control @error('alamat_ibu') is-invalid @enderror" rows="4" name="alamat_ibu">{{old('alamat_ibu')}}</textarea>
                                    @error('alamat_ibu')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="float-right">
                                <button type="submit" class="btn main_btnLogin"><i class="fa fa-check"></i>DAFTAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection