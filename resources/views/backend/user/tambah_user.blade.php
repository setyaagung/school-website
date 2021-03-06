@extends('backend.main')

@section('title', 'Tambah Pengguna')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">TAMBAH PENGGUNA</h3>
						</div>
						<div class="panel-body">
                            <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group @error('fullname') has-error @enderror">
                                            <label><b>Nama Lengkap</b></label>
                                            <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap" value="{{old('fullname')}}">
                                            @error('fullname')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('nickname') has-error @enderror">
                                            <label><b>Nama Panggilan</b></label>
                                            <input type="text" class="form-control" name="nickname" placeholder="Nama Panggilan" value="{{old('nickname')}}">
                                            @error('nickname')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    
                                        <div class="form-group @error('role') has-error @enderror">
                                            <label><b>Role</b></label>
                                            <select class="form-control" name="role">
                                                <option value="">-- Role --</option>
                                                <option value="Administrator" {{(old('role') == 'Administrator') ? 'selected' : ''}}>Administrator</option>
                                                <option value="Siswa" {{(old('role') == 'Siswa') ? 'selected' : ''}}>Siswa</option>
                                             </select>
                                            @error('role')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('email') has-error @enderror">
                                            <label><b>Email</b></label>
                                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
                                            @error('email')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('password') has-error @enderror">
                                            <label><b>Password</b></label>
                                            <input type="password" class="form-control" name="password" placeholder="Password" value="{{old('password')}}">
                                            @error('password')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div style="float: right;">
                                            <button type="button" class="btn btn-secondary" onclick="javascript:history.back()">Kembali</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                </form>
                        </div>
					</div>
				</div>
					<!-- END INPUTS -->
            </div>
        </div>
    </div>
</div>

@endsection