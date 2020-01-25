@extends('backend.main')

@section('title', 'Edit Informasi Berita & Pengumuman')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                      <div class="panel-heading">
                          <h3 class="panel-title">EDIT INFORMASI BERITA & PENGUMUMAN BARU</h3>
                      </div>
                      <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8"> 
                                <form action="{{route('informasi.update', $informasi->id_informasi)}}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    @method('PATCH')
                                    <div class="form-group @error('judul') has-error @enderror">
                                        <label><b>Judul</b></label>
                                        <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{ $informasi->judul}}">
                                        @error('judul')
                                            <span class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group @error('kategori') has-error @enderror">
                                        <label><b>Kategori</b></label>
                                        <select class="form-control" name="kategori">
                                            <option value="">-- Kategori --</option>
                                            <option value="Berita" @if($informasi->kategori == "Berita")selected @endif>Berita</option>
                                            <option value="Pengumuman" @if($informasi->kategori == "Pengumuman") selected @endif>Pengumuman</option>    
                                        </select>
                                        @error('status')
                                            <span class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group @error('isi') has-error @enderror">
                                        <label><b>Isi</b></label>
                                        <textarea class="form-control" id="isi" name="isi">{{ $informasi->isi}}</textarea>
                                        @error('isi')
                                            <span class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label><b>Gambar</b></label>
                                    <div class="input-group @error('gambar') has-error @enderror">
                                        <span class="input-group-btn">
                                            <a id="lfm" data-input="gambar" data-preview="holder" class="btn btn-primary">
                                                <i class="fa fa-picture-o"></i> Choose
                                            </a>
                                        </span>
                                        <input id="gambar" class="form-control" type="text" name="gambar" value="{{ $informasi->gambar }}">
                                    </div>
                                    @error('gambar')
                                        <span class="help-block">{{ $message }}</span>
                                    @enderror
                                    <img id="holder" name="gambar" src="{{ $informasi->gambar }}" style="margin-top:15px;margin-bottom:15px;max-height:100px;">
                                    <div class="input-group">
                                        <input type="submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
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
    .create( document.querySelector( '#isi' ) )
    .catch( error => {
        console.error( error );
    } );
    $(document).ready(function(){
        $('#lfm').filemanager('image');
    });
    
</script>
@endsection
