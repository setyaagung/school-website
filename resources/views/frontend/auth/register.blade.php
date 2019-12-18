@extends('frontend.layout')

@section('title', 'Daftar Akun')

@section('content')
    <section class="jumbotron login">
        <div class="container">
            <h3 class="animated fadeInDown delay-1s">DAFTAR AKUN</h3>
            <p class="animated fadeInDown delay-1s"><a href="/">Home </a>  <span class="fa fa-arrow-right"></span>  <a href="/register"> Daftar Akun</a></p>
        </div>
    </section>
    <section class="kata-sambutan">
        <div class="container log">
            <div class="row">
                <div class="col-12 col-lg-3 text-center" style="margin-top:40px">
                    <img src="{{asset('/images/logo.png')}}" class="img-fluid">
                </div>
                <div class="col-12 col-lg-1"></div>
                <div class="col-12 col-lg-8">
                    <p>Sebelum anda melakukan pendaftaran siswa baru secara online, anda diharuskan memasukkan email dan password yang benar sesuai akun anda. Jika anda belum memiliki akun silahkan pilih tombol daftar akun di bawah.</p>
                    <hr>
                    <form action="/postregister" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
					            	{{ $message }}
					            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
					            	{{ $message }}
					            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">
					            	{{ $message }}
					            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Konfirmasi Password</label>
                            <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" placeholder="Konfirmasi Password">
                            @error('confirm_password')
                                <div class="invalid-feedback">
					            	{{ $message }}
					            </div>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn main_btnLogin"><i class="fa fa-sign-in"></i> DAFTAR SEKARANG</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection