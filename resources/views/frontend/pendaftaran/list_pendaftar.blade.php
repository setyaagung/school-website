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
                    @foreach ($pendaftaran as $pdt)
                        <div class="alert alert-primary" role="alert">
                            <a href="{{route('site.list.pendaftar',$pdt->slug)}}">LIST DATA PENDAFTARAN PPDB TAHUN AJARAN {{$pdt->tahun_ajaran}}</a>
                        </div>
                    @endforeach
                    {{ $pendaftaran->links()}}
                </div>
            </div>
        </div>
    </section>
@endsection