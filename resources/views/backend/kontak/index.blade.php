@extends('backend.main')

@section('title', 'Kontak Sekolah')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">KONTAK SEKOLAH</h3>
                        </div>
                        <div class="panel-body">
                            <form action="{{route('kontak.update', 1)}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @method('PATCH')
                                <div class="form-group @error('nama_sekolah') has-error @enderror">
                                    <label><b>Nama Sekolah</b></label>
                                    <input type="text" class="form-control" name="nama_sekolah" placeholder="Nama Sekolah" value="{{ $kontak->nama_sekolah}}">
                                    @error('nama_sekolah')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('alamat') has-error @enderror">
                                    <label><b>Alamat</b></label>
                                    <textarea class="form-control" name="alamat" rows="3">{{ $kontak->alamat}}</textarea>
                                    @error('alamat')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('email') has-error @enderror">
                                    <label><b>Email</b></label>
                                    <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $kontak->email}}">
                                    @error('email')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('telepon') has-error @enderror">
                                    <label><b>Telepon</b></label>
                                    <input type="number" class="form-control" name="telepon" placeholder="xxx-xxxxxx" value="{{ $kontak->telepon }}">
                                    @error('telepon')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('fax') has-error @enderror">
                                    <label><b>Fax</b></label>
                                    <input type="number" class="form-control" name="fax" placeholder="xxx-xxxxxx" value="{{ $kontak->fax}}">
                                    @error('fax')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div style="float: right;">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
