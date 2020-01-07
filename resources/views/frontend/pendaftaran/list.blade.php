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
                @include('frontend/sidebar')
                
                <div class="col-lg-8">
                    <h6>LIST DATA PENDAFTAR TAHUN AJARAN {{$pendaftaran->tahun_ajaran}}</h6>
                    <hr>
                    @foreach ($pendaftaran->formulir as $form)
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <td>NO. DAFTAR</td>
                                <td>NAMA</td>
                                <td>ASAL SEKOLAH</td>
                                <td>STATUS</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($formulir as $form)
                                <tr>
                                    <td>{{$form->no_pendaftaran}}</td>
                                    <td>{{$form->nama}}</td>
                                    <td>{{$form->asal_sekolah}}</td>
                                    <td>{{$form->status_daftar}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection