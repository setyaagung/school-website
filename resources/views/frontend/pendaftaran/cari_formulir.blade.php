@extends('frontend.layout')

@section('title', 'Cari / Cetak Formulir')

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
                    <div class="card text-center">
                        <div class="card-header">
                            <h6>CARI / CETAK FORMULIR PENDAFTARAN</h6>
                            <p>Silahkan mengisi nama Anda untuk mencari/mencetak formulir</p>
                        </div>
                        <div class="card-body">
                            <form class="form-group row" action="/cari_formulir" method="GET">
                                <label class="col-sm-4 col-form-label">Isikan Nama</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" name="cari">
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn main_btnLogin"><i class="fa fa-search"></i>Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div style="margin-top:20px">
                        @if (isset($formulir))
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <td>NO. DAFTAR</td>
                                    <td>NAMA</td>
                                    <td>ASAL SEKOLAH</td>
                                    <td>STATUS</td>
                                    <td>AKSI</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($formulir as $form)
                                    <tr>
                                        <td>{{$form->no_pendaftaran}}</td>
                                        <td>{{$form->nama}}</td>
                                        <td>{{$form->asal_sekolah}}</td>
                                        <td>{{$form->status_daftar}}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                    <div style="margin-top:40px">
                        {{ $formulir->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection