@extends('frontend.layout')

@section('content')
    <section class="jumbotron sambutan">
        <div class="container">
            <h3 class="display-4 animated fadeInDown delay-1s">INFORMASI</h3>
            <p class="animated fadeInDown delay-1s"><a href="/">Home </a>  <span class="fa fa-arrow-right"></span>  <a href="/informasi"> Informasi</a></p>
        </div>
    </section>
    <section class="kata-sambutan news">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Cari Informasi</h4>
                    <form action="#">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                            <div class="input-group-prepend">
                                <button class="input-group-text" id="inputGroup-sizing-lg">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <div class="item">
                        @foreach($informasi as $info)
                        <a href="{{route('site.single.informasi', $info->slug)}}"><img src="{{$info->gambar()}}" alt="Informasi" class="img-fluid"></a>
                        <p>{{$info->created_at->format('d M Y')}} | By {{$info->user->name}}</p>
                        <a href="{{route('site.single.informasi', $info->slug)}}"><h6>{{$info->judul}}</h6></a>
                        <hr>
                        <p style="margin-top: -10px;">{!!substr($info->isi,0,180)!!}...</p>
                        @endforeach
                    </div>
                    <div style="margin-top:80px">
                        {{ $informasi->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection