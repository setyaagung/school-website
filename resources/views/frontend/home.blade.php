@extends('frontend.layout')

@section('title', 'Madrasah Aliyah Hidayatus Syubban')
    
@section('content')
    <!-- jumbotron -->
    <section class="jumbotron jumbotron-fluid a">
        <div class="container">
            <h3 class="animated fadeInDown delay-1s">MADRASAH ALIYAH<br>HIDAYATUS SYUBBAN</h3>
            <p class="animated fadeInDown delay-1s">Penyejuk Hati Penguat Iman, Iman dan Taqwa Kuat, Ilmu Pengetahuan dan Teknologi Mantap IMTAQ KUAT IPTEK MANTAP</p>
            <div class="text-center">
                <a href="/pendaftaran" class="main_btn">Pendaftaran Siswa Baru</a>
            </div>
        </div>
    </section>
    <!-- keunggulan -->
    <div class="keunggulan text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-lg-4">
                    <img src="{{asset('images/education.png')}}" class="img-fluid" width="20%">
                    <h5 style="margin-top:10px">KURIKULUM TERBARU</h5>
                    <p>Kurikulum kami sangat menyesuaikan dinas pendidikan serta ajaran ilmu agama islam</p>
                </div>
                <div class="col-sm-8 col-lg-4">
                    <img src="{{asset('images/university.png')}}" class="img-fluid" width="20%">
                    <h5 style="margin-top:10px">LINGKUNGAN NYAMAN</h5>
                    <p>Kami sangat memperhatikan kenyamanan lingkungan sekolah dalam kegiatan belajar mengajar</p>
                </div>
                <div class="col-sm-8 col-lg-4">
                    <img src="{{asset('images/learning.png')}}" class="img-fluid" width="20%">
                    <h5 style="margin-top:10px">FASILITAS MEMADAI</h5>
                    <p>Memiliki fasilitas yang memadai untuk mendukung kegiatan belajar mengajar</p>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis veniam, exercitationem ad quia iusto deserunt nostrum modi unde tenetur officiis nemo in et velit minima corrupti! Illo!</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-3 ekstra">
                    <img src="{{asset('images/uniform.png')}}" alt="Staff" class="float-left">
                    <h4>PRAMUKA</h4>
                </div>
                <div class="col-sm-6 col-lg-3 ekstra ekstra-mobile">
                    <img src="{{asset('images/parade.png')}}" alt="Staff" class="float-left">
                    <h4>MARCHING BAND</h4>
                </div>
                <div class="col-sm-6 col-lg-3 ekstra ekstra-mobile">
                    <img src="{{asset('images/karate.png')}}" alt="Staff" class="float-left">
                    <h4>PENCAK SILAT</h4>
                </div>
            </div>
            <div class="row justify-content-center e-2">
                <div class="col-sm-6 col-lg-3 ekstra ekstra-mobile">
                    <img src="{{asset('images/tambourine.png')}}" alt="Staff" class="float-left">
                    <h4>SENI REBANA</h4>
                </div>
                <div class="col-sm-6 col-lg-3 ekstra ekstra-mobile">
                    <img src="{{asset('images/computer.png')}}" alt="Staff" class="float-left">
                    <h4>KOMPUTER</h4>
                </div>
                <div class="col-sm-6 col-lg-3 ekstra ekstra-mobile">
                    <img src="{{asset('images/lecture.png')}}" alt="Staff" class="float-left">
                    <h4>ENGLISH CLUB</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- informasi -->
    <section id="informasi" class="informasi">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 style="margin-top: 35px">Informasi Terbaru</h3>
                    <p class="info-terbaru">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum rerum recusandae, vel obcaecati corrupti facilis id repudiandae quasi eum laboriosam a saepe in odit sit.</p>
                </div>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach($informasi as $info)
                <div class="item">
                    <a href="{{route('site.single.informasi', $info->slug)}}"><img src="{{$info->gambar()}}" alt="Informasi" class="img-fluid"></a>
                    <p>{{\Date::parse($info->created_at)->format('d F Y')}} | By {{$info->user->nickname}}</p>
                    <a href="{{route('site.single.informasi', $info->slug)}}"><h6>{{$info->judul}}</h6></a>
                    <hr>
                    <p style="margin-top: -10px;">{!!substr($info->isi,0,130)!!}...</p>
                </div>
                @endforeach
            </div>
            <div class="col-md-12 text-center" style="margin-bottom:35px;margin-top:20px">
                <a href="/informasi" class="btn btn-md btn-outline-dark">LIHAT SEMUA INFORMASI</a>
            </div>
        </div>
    </section>
    <!-- kata-kata -->
    <!--<section class="slogan">

    </section> -->
    <!-- staff -->
    <section id="staff" class="staff">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 style="margin-top: 35px">Guru & Karyawan</h3>
                </div>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach($staff as $s)
                <div class="item">
                    <div class="card shadow">
                        <img src="{{$s->foto()}}" alt="Staff" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$s->nama}}</h5>
                            <p class="card-text">{{$s->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-md btn-outline-dark" style="margin-bottom:35px;margin-top: 20px;">LIHAT SEMUA GURU & KARYAWAN</a>
            </div>
        </div>
    </section>
    <!-- kata-kata -->
    <!--<section class="slogan">

    </section>-->
    <!-- kontak -->
    <section id="kontak" class="kontak">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 style="margin-top: 35px">Hubungi Kami</h3>
                </div>
            </div>
            <div class="row" style="margin-top:40px;">
                <div class="col-md-5">
                    <h5>LOKASI</h5>
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.3648318593023!2d110.4944271143579!3d-6.966216570142757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70f2c60e0c66b7%3A0x8b363d5adffd8dc!2sMadrasah%20Aliyah%20Hidayatus%20Syubban!5e0!3m2!1sid!2sid!4v1575113394381!5m2!1sid!2sid" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
                <div style="margin-left:55px;margin-right:55px;margin-top:30px"></div>
                <div class="col-md-5">
                    <h5>KONTAK</h5>
                    @foreach ($kontak as $k)
                    <div class="col-md">
                        <i class="fa fa-envelope float-left"></i>
                        <p>Email<br>{{$k->email}}</p>
                    </div>
                    <div class="col-md">
                        <i class="fa fa-map float-left"></i>
                        <p>Alamat<br>{{$k->alamat}}</p>
                    </div>
                    <div class="col-md">
                        <i class="fa fa-phone float-left"></i>
                        <p>Phone<br>{{$k->telepon}}</p>
                    </div>
                    <div class="col-md">
                        <i class="fa fa-fax float-left"></i>
                        <p>Fax<br>{{$k->fax}}</p>
                    </div>
                    <p style="margin-left:20px">Sosial Media</p>
                    <div class="col-md">
                        <a href="{{$k->facebook}}"><i class="fa fa-facebook"></i></a>
                        <a href="{{$k->twitter}}"><i class="fa fa-twitter"></i></a>
                        <a href="{{$k->instagram}}"><i class="fa fa-instagram"></i></a>
                        <a href="{{$k->youtube}}"><i class="fa fa-youtube-play"></i></a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection