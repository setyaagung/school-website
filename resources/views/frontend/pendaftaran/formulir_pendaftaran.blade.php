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
                
                @if (Auth::check())
                    <div class="col-lg-8 text-center">
                        @foreach ($pendaftaran as $pdt)
                            <div class="alert alert-primary" role="alert">
                                <a href="{{route('site.form.create',$pdt->id)}}">FORMULIR PENDAFTARAN ONLINE TAHUN AJARAN {{$pdt->tahun_ajaran}}</a>
                            </div>
                        @endforeach
                        <div class="alert alert-info prosedur" role="alert">
                            <ol>
                                <li><p>Tekan formulir pendaftaran diatas untuk melakukan pendaftaran online.</p></li>
                                <li><p>Isikan biodata lengkap anda sesuai dengan yang diminta dalam formulir.</p></li>
                                <li><p>Jika semua sudah terisi lalu tekan daftar.</p></li>
                                <li><p>Jika kuota pendaftaran belum terpenuhi maka anda bisa langsung menuju ke sekolah untuk konfirmasi kelengkapan berkas.</p></li>
                                <li><p>Tetapi jika kuota pendaftaran sudah penuh maka anda berada pada daftar tunggu 1x24 jam jika pendaftar sebelum anda belum melakukan konfirmasi ke sekolah.</p></li>
                                <li><p>Untuk informasi lengkapnya anda bisa langsung menuju ke sekolah.</p></li>
                            </ol>
                        </div>
                    </div>
                @else
                <div class="col-lg-8">
                    <div class="alert alert-danger">
                        <p>Untuk melakukan pendaftaran online anda harus login akun terlebih dahulu. 
                            Jika belum memiliki akun silahkan lakukan register akun. Pilih menu login dipojok kanan atas 
                            lalu pilih daftar akun dan isi form yang tersedia.
                        </p>
                    </div>
                    <h6>FORMULIR PENDAFTARAN ONLINE</h6>
                    <hr>
                    <form>
                        <h6>A. Biodata</h6>
                        <div class="container">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="contoh: Semarang" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <select class="form-control" readonly>
                                        <option value="">-- Pilih --</option>
                                        <option value="Laki - Laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9">
                                    <select class="form-control" readonly>
                                        <option value="">-- Pilih --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status Dalam Keluarga</label>
                                <div class="col-sm-9">
                                    <select class="form-control" readonly>
                                        <option value="">-- Pilih --</option>
                                        <option value="Anak Kandung">Anak Kandung</option>
                                        <option value="Anak Angkat">Anak Angkat</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jumlah Saudara</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="4" readonly></textarea>
                                </div>
                            </div>
                        </div>
                        <h6>B. SMP/MTs Asal</h6>
                        <div class="container">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama SMP/MTs</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ijasah SMP/MTs</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NISN</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <h6>C. Ayah</h6>
                        <div class="container">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9">
                                    <select class="form-control" readonly>
                                        <option value="">-- Pilih --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" readonly>
                                        <option value="">-- Pilih --</option>
                                        <option value="PNS">PNS</option>
                                        <option value="TNI/Polri">TNI/Polri</option>
                                        <option value="Guru/Dosen">Guru/Dosen</option>
                                        <option value="BUMN">BUMN</option>
                                        <option value="Pedagang">Pedagang</option>
                                        <option value="Swasta">Swasta</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Pensiunan">Pensiunan</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="4" readonly></textarea>
                                </div>
                            </div>
                        </div>
                        <h6>D. Ibu</h6>
                        <div class="container">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9">
                                    <select class="form-control" readonly>
                                        <option value="">-- Pilih --</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                <div class="col-sm-9">
                                    <select class="form-control" readonly>
                                        <option value="">-- Pilih --</option>
                                        <option value="PNS">PNS</option>
                                        <option value="TNI/Polri">TNI/Polri</option>
                                        <option value="Guru/Dosen">Guru/Dosen</option>
                                        <option value="BUMN">BUMN</option>
                                        <option value="Pedagang">Pedagang</option>
                                        <option value="Swasta">Swasta</option>
                                        <option value="Wiraswasta">Wiraswasta</option>
                                        <option value="Pensiunan">Pensiunan</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="4" readonly></textarea>
                                </div>
                            </div>
                            <div class="float-right">
                                <button type="button" class="btn main_btnLogin"><i class="fa fa-check"></i>DAFTAR</button>
                            </div>
                        </div>
                    </form>
                </div>
                @endif
                
            </div>
        </div>
    </section>
@endsection