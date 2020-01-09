@extends('frontend.layout')

@section('title', 'Informasi')

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
                <b>{{\Date::parse($informasi->created_at)->format('d F Y')}} | By {{$informasi->user->nickname}}</b>
                <p class="text-justify">{!!$informasi->isi!!}</p>
            </div>
            <hr class="hr">
            <section style="min-height:100px">
                <div style="color:black !important;" class="nextprevious">
                    @if (isset($previous))
                    <a href="{{$previous->slug}}"><img src="{{$previous->gambar}}" class="img-fluid float-left"></a>
                    <p class="previous">Previous</p>
                    @endif
                    @if (isset($next))
                        <a href="{{$next->slug}}"><img src="{{$next->gambar}}" class="img-fluid float-right"></a>
                        <p class="next">Next</p>
                    @endif
                </div>
            </section>
        </div>
    </section>
@endsection