@extends('frontend.layout')

@section('content')
    <section class="jumbotron sambutan">
        <div class="container">
            <h3 class="animated fadeInDown delay-1s">SEJARAH SEKOLAH</h3>
            <p class="animated fadeInDown delay-1s"><a href="/">Home </a>  <span class="fa fa-arrow-right"></span>  <a href="/profil-sekolah/sejarah"> Sejarah Sekolah</a></p>
        </div>
    </section>
    <section class="kata-sambutan">
        <div class="container">
            @foreach ($kontak as $k)
            <div class="row">
                <h4>Sejarah Madrasah Aliyah Hidayatus Syubban</h4>
                <br>
                <br>
                    <p class="text-justify">{!!$k->sejarah_sekolah!!}</p>
            </div>
            @endforeach
        </div>
    </section>
@endsection