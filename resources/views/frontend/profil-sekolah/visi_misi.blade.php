@extends('frontend.layout')

@section('content')
    <section class="jumbotron sambutan">
        <div class="container">
            <h3 class="animated fadeInDown delay-1s">VISI & MISI</h3>
            <p class="animated fadeInDown delay-1s"><a href="/">Home </a>  <span class="fa fa-arrow-right"></span>  <a href="/profil-sekolah/visi-misi"> Visi & Misi</a></p>
        </div>
    </section>
    <section class="kata-sambutan">
        <div class="container">
            <div class="row">
                @foreach ($kontak as $k)
                <div class="col-md-1">
                    <h4>VISI</h4>
                </div>
                <div class="col-md-12">
                    <p>{!!$k->visi!!}</p>
                </div>
                <div class="col-md-1">
                    <h4>MISI</h4>
                </div>
                <div class="col-md-12">
                    <p>{!!$k->misi!!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection