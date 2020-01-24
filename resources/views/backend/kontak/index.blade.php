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
                                <div class="form-group @error('kata_sambutan') has-error @enderror">
                                    <label><b>Kata Sambutan</b></label>
                                    <textarea class="form-control" id="kata_sambutan" name="kata_sambutan">{{$kontak->kata_sambutan}}</textarea>
                                    @error('kata_sambutan')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('visi') has-error @enderror">
                                    <label><b>Visi</b></label>
                                    <textarea class="form-control" id="visi" name="visi">{{$kontak->visi}}</textarea>
                                    @error('visi')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('misi') has-error @enderror">
                                    <label><b>Misi</b></label>
                                    <textarea class="form-control" id="misi" name="misi">{{$kontak->misi}}</textarea>
                                    @error('misi')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('sejarah_sekolah') has-error @enderror">
                                    <label><b>Sejarah Sekolah</b></label>
                                    <textarea class="form-control" id="sejarah_sekolah" name="sejarah_sekolah">{{ $kontak->sejarah_sekolah }}</textarea>
                                    @error('sejarah_sekolah')
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
                                <div class="form-group @error('facebook') has-error @enderror">
                                    <label><b>Facebook</b></label>
                                    <input type="text" class="form-control" name="facebook" value="{{ $kontak->facebook}}">
                                    @error('facebook')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('twitter') has-error @enderror">
                                    <label><b>Twitter</b></label>
                                    <input type="text" class="form-control" name="twitter" value="{{ $kontak->twitter}}">
                                    @error('twitter')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('instagram') has-error @enderror">
                                    <label><b>Instagram</b></label>
                                    <input type="text" class="form-control" name="instagram" value="{{ $kontak->instagram}}">
                                    @error('instagram')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group @error('youtube') has-error @enderror">
                                    <label><b>Youtube</b></label>
                                    <input type="text" class="form-control" name="youtube" value="{{ $kontak->youtube}}">
                                    @error('youtube')
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

@section('footer')
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    ClassicEditor
    .create( document.querySelector( '#kata_sambutan' ) )
    .catch( error => {
        console.error( error );
    } );
    ClassicEditor
    .create( document.querySelector( '#visi' ) )
    .catch( error => {
        console.error( error );
    } );
    ClassicEditor
    .create( document.querySelector( '#misi' ) )
    .catch( error => {
        console.error( error );
    } );
    ClassicEditor
    .create( document.querySelector( '#sejarah_sekolah' ) )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection
