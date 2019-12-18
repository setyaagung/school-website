<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/fav.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>
    <header data-scroll-header class="fixed-top">
        <div class="upper-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <i class="fa fa-phone"></i> 024-09774888
                        <i class="fa fa-envelope-o" style="margin-left:20px"></i> ma_hidsyubb@gmail.com
                    </div>
                    <div class="col-sm kanan">
                        <a href="#kontak"><span class="fa fa-facebook-square"></span></a>
                        <a href="#kontak"><span class="fa fa-twitter-square"></span></a>
                        <a href="#kontak"><span class="fa fa-instagram"></span></a>
                        <a href="#kontak"><span class="fa fa-youtube-play"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <img src="{{asset('images/logo.png')}}" width="5%">
                <a class="navbar-brand" href="/"><span>HidSyubb</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->segment(1) == '') ? 'active' : ''}}" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ (request()->segment(1) == 'profil-sekolah') ? 'active' : ''}}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tentang Sekolah
                            </a>
                            <div class="dropdown-menu animated fadeIn faster" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item {{ (request()->segment(2) == 'katasambutan') ? 'active' : ''}}" href="/profil-sekolah/katasambutan">Kata Sambutan</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item {{ (request()->segment(2) == 'sejarah') ? 'active' : ''}}" href="/profil-sekolah/sejarah">Sejarah</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item {{ (request()->segment(2) == 'visi-misi') ? 'active' : ''}}" href="/profil-sekolah/visi-misi">Visi & Misi</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Struktur Organisasi</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/#staff">Guru & Karyawan</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#ekstrakurikuler">Ekstrakurikuler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->segment(1) == 'informasi') ? 'active' : ''}}" href="/#informasi">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#kontak">Kontak</a>
                        </li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link {{ (request()->segment(1) == 'login') ? 'active' : ''}}" href="/login">Log in</a>
                            </li>
                        @else                           
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i>{{Auth::user()->nickname}}
                                </a>
                                <div class="dropdown-menu animated fadeIn faster" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#"><i class="fa fa-cog"></i> Profil Anda</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><i class="fa fa-key"></i>Ganti Password</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/logout"><i class="fa fa-sign-out"></i> Log out</a>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer class="page-footer">
       <div class="container">
            <div class="footer-copyright text-center py-4">&copy; 2019 Copyright 
                <a href="/"> Madrasah Aliyah Hidayatus Syubban</a>
            </div>
       </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.min.js"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script>
       $('.owl-carousel').owlCarousel({
            autoplay:true,
            autoplayHoverPause:true,
            margin: 30,
            loop:true,
            nav:true,
            dots:true,
            item: 3,
            responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
        });
        var scroll = new SmoothScroll('a[href*="#"]', {
        	speed: 1250,
            header: '[data-scroll-header]'
        });
    </script>
</body>
</html>