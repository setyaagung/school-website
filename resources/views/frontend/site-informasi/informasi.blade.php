@extends('frontend.layout')

@section('title', 'Informasi')

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
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget search-widget">
                            <form class="search-form" action="/informasi" method="GET">
                                <input placeholder="Cari Informasi..." name="cari" type="text">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="single-sidebar-widget user-info-widget">
                            <img src="{{asset('images/logo.png')}}"  class="rounded-circle">
                            <h6>Madrasah Aliyah<br>Hidayatus Syubban</h6>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi obcaecati porro harum odit est non modi saepe libero dicta explicabo.</p>
                        </div>
                        <div class="single-sidebar-widget post-category-widget">
                            <h6 class="category-title">KATEGORI INFORMASI</h6>
                            <ul class="cat-list">
                                <li>
                                    <a href="/informasi/berita" class="d-flex justify-content-between">
                                        <p>Berita</p>
                                        <p>{{ \DB::table('informasi')->where('kategori', 'Berita')->count()}}</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="/informasi/pengumuman" class="d-flex justify-content-between">
                                        <p>Pengumuman</p>
                                        <p>{{ \DB::table('informasi')->where('kategori', 'Pengumuman')->count()}}</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-8">
                    <div class="item">
                        @foreach($informasi as $info)
                        <a href="{{route('site.single.informasi', $info->slug)}}"><img src="{{$info->gambar()}}" alt="Informasi" class="img-fluid"></a>
                        <p>{{$info->created_at->format('d M Y')}} | By {{$info->user->nickname}}</p>
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