@extends('backend/main')

@section('title', 'Tambah Berita Baru')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">TAMBAH BERITA BARU</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <form action="{{route('berita.store')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group {{$errors->has('judul') ? 'has-error' : ''}}">
                        <label><b>Judul</b></label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{old('judul')}}">
                        @if($errors->has('judul'))
                        <span class="help-block">{{$errors->first('judul')}}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label><b>Isi</b></label>
                        <textarea class="form-control" id="isi" name="isi">{{old('isi')}}</textarea>
                    </div>
            </div>
            <div class="col-md-4">
                <label><b>Gambar</b></label>
                <div class="input-group">
                    <span class="input-group-btn">
                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fas fa-fw fa-image" style="color:white"></i> <font color="white"> Choose</font>
                      </a>
                    </span>
                    <input id="thumbnail" class="form-control" type="text" name="gambar">
                </div>
                <img id="holder" style="margin-top:15px;margin-bottom:15px;max-height:100px;">
                <div class="input-group">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </div>
        </form>
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
        $(document).ready(function() {
            $('#lfm').filemanager('image');
        });
</script>
@endsection