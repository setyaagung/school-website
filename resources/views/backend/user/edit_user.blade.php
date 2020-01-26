@extends('backend.main')

@section('title', 'Edit Pengguna')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">EDIT PENGGUNA</h3>
						</div>
						<div class="panel-body">
                            <form action="{{route('user.update', $user->id_user)}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    @method('PATCH')
                                        <div class="form-group @error('fullname') has-error @enderror">
                                            <label><b>Nama Lengkap</b></label>
                                            <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap" value="{{$user->fullname}}">
                                            @error('fullname')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('nickname') has-error @enderror">
                                            <label><b>Nama Panggilan</b></label>
                                            <input type="text" class="form-control" name="nickname" placeholder="Nama Panggilan" value="{{$user->nickname}}">
                                            @error('nickname')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    
                                        <div class="form-group @error('role') has-error @enderror">
                                            <label><b>Role</b></label>
                                            <select class="form-control" name="role">
                                                <option value="">-- Role --</option>
                                                <option value="Administrator" @if($user->role == "Administrator")selected @endif>Administrator</option>
                                                <option value="Siswa" @if($user->role == "Siswa") selected @endif>Siswa</option>
                                            </select>
                                            @error('role')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('email') has-error @enderror">
                                            <label><b>Email</b></label>
                                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
                                            @error('email')
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