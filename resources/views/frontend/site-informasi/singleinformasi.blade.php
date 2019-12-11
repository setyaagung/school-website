@extends('frontend.layout')

@section('content')
    <section class="jumbotron sambutan">
        <div class="container">
            <h3 class="display-4 animated fadeInDown delay-1s">{{$informasi->judul}}</h3>
            <p class="animated fadeInDown delay-1s"><a href="/">Home </a>  <span class="fa fa-arrow-right"></span>  <a href="/informasi"> Informasi</a></p>
        </div>
    </section>
    <section class="kata-sambutan">
        <div class="container">
            <div class="row">
                <img src="{{$informasi->gambar}}" class="img-fluid" width="915px" height="500px">
                <b>{{$informasi->created_at->format('d M Y')}} | By {{$informasi->user->name}}</b>
                <p class="text-justify">{!!$informasi->isi!!}</p>
            </div>
        </div>
    </section>
@endsection