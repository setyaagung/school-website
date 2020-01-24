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
                    @if ($message = Session::get('online'))
                        <div class="alert alert-success">
                            <strong>{{$message}}</strong>
                        </div>
                    @endif
                    @if ($message = Session::get('tunggu'))
                        <div class="alert alert-info">
                            <strong>{{$message}}</strong>
                        </div>
                    @endif
                    <h5 style="margin-bottom:40px">INFORMASI PENDAFTARAN PESERTA DIDIK BARU (PPDB) MA HIDAYATUS SYUBBAN SEMARANG</h5>
                    <div class="tempat">
                        <h6>A. TEMPAT PENDAFTARAN DAN INFORMASI</h6>
                        @foreach ($kontak as $k)
                        <ul>
                            <li>{{$k->alamat}}</li>
                            <li>Telp. {{$k->telepon}}, Fax. {{$k->fax}}</li>
                            <li>Email : {{$k->email}}</li>
                        </ul>
                        @endforeach
                    </div>
                    <div class="waktu">
                        <h6>B. WAKTU PENDAFTARAN</h6>
                        <ul>
                            <li>Hari : Senin - Sabtu</li>
                            <li>Waktu : Pukul 07.00 s/d 16.00 WIB</li>
                        </ul>
                    </div>
                    <div class="kuota">
                        <h6>C. KUOTA PENERIMAAN PESERTA DIDIK</h6>
                        <ul>
                            <li>Rencana penerimaan 2 kelas</li>
                            <li>Rencana jumlah siswa yang diterima 60 siswa</li>
                            <li>Rencana masing - masing 1 kelas 30 siswa</li>
                        </ul>
                    </div>
                    <div class="biaya">
                        <h6>D. BIAYA - BIAYA</h6>
                        <ul>
                            <li>SPP Kelas Flat (Tidak naik sampai kelas 12)</li>
                            <li>Formulir pendaftaran Rp. 50.000</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection