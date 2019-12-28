@extends('frontend.layout')

@section('title', 'List Pendaftar')

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
                    <h6>LIST DATA PENDAFTAR</h6>
                    <hr>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>NO</td>
                                <td>NAMA</td>
                                <td>ASAL SEKOLAH</td>
                                <td>STATUS</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>MUHAMMAD AGUNG SETYA BUDI</td>
                                <td>SMP N 34 SEMARANG</td>
                                <td>KONFIRMASI</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>MUHAMMAD AGUNG SETYA BUDI</td>
                                <td>SMP N 34 SEMARANG</td>
                                <td>KONFIRMASI</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection