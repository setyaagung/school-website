@extends('frontend.layout')

@section('content')
    <section class="jumbotron sambutan">
        <div class="container">
            <h3 class="animated fadeInDown delay-1s">KATA SAMBUTAN</h3>
            <p class="animated fadeInDown delay-1s"><a href="/">Home </a>  <span class="fa fa-arrow-right"></span>  <a href="/profil-sekolah/katasambutan"> Kata Sambutan</a></p>
        </div>
    </section>
    <section class="kata-sambutan">
        <div class="container">
            <div class="row">
                @foreach ($kontak as $k)
                    <p class="text-justify">{!!$k->kata_sambutan!!}</p>
                @endforeach
            </div>
        </div>
    </section>
@endsection