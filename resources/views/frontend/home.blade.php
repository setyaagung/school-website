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

    <title>MA HIDAYATUS SYUBBAN</title>
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
                    <div class="col-sm text-right">
                        <a href="#kontak"><span class="fa fa-facebook-square"></span></a>
                        <a href="#kontak"><span class="fa fa-twitter-square"></span></a>
                        <a href="#kontak"><span class="fa fa-instagram"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <img src="{{asset('images/logo.png')}}" width="5%">
                <a class="navbar-brand" href="#"><span>HidSyubb</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profil Sekolah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#staff">Guru & Karyawan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ekstrakurikuler">Ekstrakurikuler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#informasi">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pendaftaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- jumbotron -->
    <section class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 animated fadeInDown delay-1s">MADRASAH ALIYAH<br>HIDAYATUS SYUBBAN</h1>
            <p class="animated fadeInDown delay-1s" style="color:white; margin:18px;">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
        </div>
    </section>
    <!-- keunggulan -->
    <div class="keunggulan text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <i class="fa fa-book fa-2x rounded-circle"></i>
                    <h5>KURIKULUM TERBARU</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse.</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fa fa-book fa-2x rounded-circle"></i>
                    <h5>KURIKULUM TERBARU</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse.</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fa fa-book fa-2x rounded-circle"></i>
                    <h5>KURIKULUM TERBARU</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse.</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fa fa-book fa-2x rounded-circle"></i>
                    <h5>KURIKULUM TERBARU</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- ekstra -->
    <section id="ekstrakurikuler" class="ekstrakurikuler">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 style="margin-top: 35px">Ekstrakurikuler</h3>
                    <hr>
                </div>
            </div>
        </div>
    </section>
     <!-- informasi -->
     <section id="informasi" class="informasi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Informasi Terbaru</h3>
                    <hr>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <img src="{{asset('images/no-thumbnail.jpg')}}" alt="Informasi" class="img-fluid">
                    <p>26 November 2019 | By Admin</p>
                    <a href="#"><h6>Informasi Baru</h6></a>
                    <hr>
                    <p style="margin-top: -10px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sit laboriosam tempora soluta odio obcaecati excepturi, in cum alias fugiat.</p>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('images/no-thumbnail.jpg')}}" alt="Informasi" class="img-fluid">
                    <p>26 November 2019 | By Admin</p>
                    <a href="#"><h6>Informasi Baru</h6></a>
                    <hr>
                    <p style="margin-top: -10px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sit laboriosam tempora soluta odio obcaecati excepturi, in cum alias fugiat.</p>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('images/no-thumbnail.jpg')}}" alt="Informasi" class="img-fluid">
                    <p>26 November 2019 | By Admin</p>
                    <a href="#"><h6>Informasi Baru</h6></a>
                    <hr>
                    <p style="margin-top: -10px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sit laboriosam tempora soluta odio obcaecati excepturi, in cum alias fugiat.</p>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('images/no-thumbnail.jpg')}}" alt="Informasi" class="img-fluid">
                    <p>26 November 2019 | By Admin</p>
                    <a href="#"><h6>Informasi Baru</h6></a>
                    <hr>
                    <p style="margin-top: -10px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sit laboriosam tempora soluta odio obcaecati excepturi, in cum alias fugiat.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-md-3">
                        <img src="{{asset('images/no-thumbnail.jpg')}}" alt="Informasi" class="img-fluid">
                        <p>26 November 2019 | By Admin</p>
                        <a href="#"><h6>Informasi Baru</h6></a>
                        <hr>
                        <p style="margin-top: -10px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sit laboriosam tempora soluta odio obcaecati excepturi, in cum alias fugiat.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('images/no-thumbnail.jpg')}}" alt="Informasi" class="img-fluid">
                        <p>26 November 2019 | By Admin</p>
                        <a href="#"><h6>Informasi Baru</h6></a>
                        <hr>
                        <p style="margin-top: -10px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sit laboriosam tempora soluta odio obcaecati excepturi, in cum alias fugiat.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('images/no-thumbnail.jpg')}}" alt="Informasi" class="img-fluid">
                        <p>26 November 2019 | By Admin</p>
                        <a href="#"><h6>Informasi Baru</h6></a>
                        <hr>
                        <p style="margin-top: -10px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sit laboriosam tempora soluta odio obcaecati excepturi, in cum alias fugiat.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="{{asset('images/no-thumbnail.jpg')}}" alt="Informasi" class="img-fluid">
                        <p>26 November 2019 | By Admin</p>
                        <a href="#"><h6>Informasi Baru</h6></a>
                        <hr>
                        <p style="margin-top: -10px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus sit laboriosam tempora soluta odio obcaecati excepturi, in cum alias fugiat.</p>
                    </div>
                </div>
            <div class="col-md-12 text-center" style="margin-bottom:35px;margin-top:20px">
                <a href="#" class="btn btn-md btn-outline-dark">LIHAT SEMUA INFORMASI</a>
            </div>
        </div>
    </section>
    <!-- kata-kata -->
    <section class="slogan">

    </section>
    <!-- staff -->
    <section id="staff" class="staff">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 style="margin-top: 35px">Guru & Karyawan</h3>
                    <hr>
                </div>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="card shadow">
                        <img src="{{asset('images/guru.png')}}" alt="Staff" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">SITI KHUMAIROH, S.Pd</h5>
                            <p class="card-text">GURU PENDIDIKAN PANCASILA</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card shadow">
                        <img src="{{asset('images/guru.png')}}" alt="Staff" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">EKA FITRIYANA, S.Pd</h5>
                            <p class="card-text">WAKA KESISWAAN</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card shadow">
                        <img src="{{asset('images/guru.png')}}" alt="Staff" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">WALUYO, S.Pd</h5>
                            <p class="card-text">GURU MATEMATIKA</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card shadow">
                        <img src="{{asset('images/guru.png')}}" alt="Staff" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">WALUYO, S.Pd</h5>
                            <p class="card-text">GURU MATEMATIKA</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card shadow">
                        <img src="{{asset('images/guru.png')}}" alt="Staff" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">WALUYO, S.Pd</h5>
                            <p class="card-text">GURU MATEMATIKA</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card shadow">
                        <img src="{{asset('images/guru.png')}}" alt="Staff" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">WALUYO, S.Pd</h5>
                            <p class="card-text">GURU MATEMATIKA</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card shadow">
                        <img src="{{asset('images/guru.png')}}" alt="Staff" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">WALUYO, S.Pd</h5>
                            <p class="card-text">GURU MATEMATIKA</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card shadow">
                        <img src="{{asset('images/guru.png')}}" alt="Staff" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">WALUYO, S.Pd</h5>
                            <p class="card-text">GURU MATEMATIKA</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-md btn-outline-dark" style="margin-bottom:35px;margin-top: 20px;">LIHAT SEMUA GURU & KARYAWAN</a>
            </div>
        </div>
    </section>
    <!-- kontak -->
    <section id="kontak" class="kontak">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 style="margin-top: 35px">Hubungi Kami</h3>
                    <hr>
                </div>
            </div>
        </div>
    </section>
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
            speed: 1000,
            header: '[data-scroll-header]'
        });
        function checkScroll(){
            var startY = $('.navbar').height() * 1; //The point where the navbar changes in px
                
            if($(window).scrollTop() > startY){
                $('.upper-bar').addClass("scrolled");
                $('.navbar').addClass("scrolled");
                $('.navbar-brand').addClass("scrolled");
                $('.nav-link').addClass("scrolled");
            }else{
                $('.upper-bar').removeClass("scrolled");
                $('.navbar').removeClass("scrolled");
                $('.navbar-brand').removeClass("scrolled");
                $('.nav-link').removeClass("scrolled");
            }
        }

        if($('.navbar').length > 0){
            $(window).on("scroll load resize", function(){
                checkScroll();
            });
        }
    </script>
</body>
</html>