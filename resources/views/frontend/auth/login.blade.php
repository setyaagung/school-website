@extends('frontend.layout')

@section('title', 'Login Akun')

@section('content')
    <section class="jumbotron login">
        <div class="container">
            <h3 class="animated fadeInDown delay-1s">LOG IN</h3>
            <p class="animated fadeInDown delay-1s"><a href="/">Home </a>  <span class="fa fa-arrow-right"></span>  <a href="/login"> Log In Akun</a></p>
        </div>
    </section>
    <section class="kata-sambutan">
        <div class="container log">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <p>Sebelum anda melakukan pendaftaran siswa baru secara online, anda diharuskan memasukkan email dan password yang benar sesuai akun anda. Jika anda belum memiliki akun silahkan pilih tombol daftar akun di bawah.</p>
                    <hr>
                    <form action="/postlogin" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
                        </div>
                        <div>
                            <button type="submit" class="btn main_btnLogin"><i class="fa fa-sign-in"></i> LOG IN</button>
                            <a href="/register" class=" btn main_btnDaftar"><i class="fa fa-user"></i> DAFTAR AKUN</a>
                            <a href="#" class="forgot-password">Lupa Password ?</a>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-1"></div>
                <div class="col-12 col-lg-3 text-center" style="margin-top:40px">
                    <img src="{{asset('/images/logo.png')}}" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection