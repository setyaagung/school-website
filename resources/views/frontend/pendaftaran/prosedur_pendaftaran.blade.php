@extends('frontend.layout')

@section('title', 'Prosedur PPDB Online')

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
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget post-category-widget">
                            <h6 class="category-title">MAIN MENU</h6>
                            <ul class="cat-list">
                                <li>
                                    <a href="/pendaftaran" class="d-flex justify-content-between">
                                        <p>Home</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="/prosedur_pendaftaran" class="d-flex justify-content-between">
                                        <p>Prosedur Pendaftaran</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="/formulir_pendaftaran" class="d-flex justify-content-between">
                                        <p>Formulir Pendaftaran Online</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="/list_pendaftar" class="d-flex justify-content-between">
                                        <p>List Pendaftar</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="/cari_formulir" class="d-flex justify-content-between">
                                        <p>Cari / Cetak Formulir</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8">
                    <div class="prosedur">
                        <h6>PROSEDUR PENDAFTARAN</h6>
                        <ol>
                            <li>Mengisi formulir pendaftaran online</li>
                            <li>Mencetak Formulir pendaftaran yang sudah diisi</li>
                            <li>Datang ke administrasi pendaftaran dengan membawa hasil cetak formulir pendaftaran dan membayar uang pendaftaran Rp. 50.000</li>
                            <li>Wawancara SPI</li>
                            <li>Daftar ulang, membayar paket dan SPI</li>
                            <li>DITERIMA</li>
                        </ol>
                    </div>
                    <div class="prosedur">
                        <h6>SYARAT-SYARAT PENDAFTARAN SISWA BARU</h6>
                        <ol>
                            <li>Mengisi formulir pendaftaran</li>
                            <li>Pas photo ukuran 3 x 4 ( 3 lembar )</li>
                            <li>Foto copy raport SMP/MTs ( semester 1 sd 5 )</li>
                            <li>Foto copy SKHUN ( jika sudah ada ) yang sudah dilegalisir</li>
                            <li>Foto copy Ijazah ( jika sudah ada ) yang sudah dilegalisir</li>
                            <li>Foto copy Piagam penghargaan Akademik / Non Akademik( jika ada )</li>
                            <li>Foto copy Hasil Tes Psikologi (jika ada)</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection