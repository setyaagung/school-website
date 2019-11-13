@extends('backend.main')

@section('title', 'Edit Guru & Karyawan')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                      <div class="panel-heading">
                          <h3 class="panel-title">EDIT GURU & KARYAWAN</h3>
                      </div>
                      <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                <form action="{{route('staff.update', $staff->id)}}" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    @method('PATCH')
                                    <div class="form-group @error('nama') has-error @enderror">
                                        <label><b>Nama</b></label>
                                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $staff->nama}}">
                                        @error('nama')
                                            <span class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group @error('status') has-error @enderror">
                                        <label><b>Status</b></label>
                                        <select class="form-control" name="status">
                                            <option value="">-- Status --</option>
                                            <option value="Guru" @if($staff->status == "Guru")selected @endif>Guru</option>
                                            <option value="Karyawan" @if($staff->status == "Karyawan") selected @endif>Karyawan</option>
                                        </select>
                                        @error('status')
                                            <span class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group @error('deskripsi') has-error @enderror">
                                        <label><b>Deskripsi</b></label>
                                        <textarea class="form-control" name="deskripsi" rows="4">{{ $staff->deskripsi}}</textarea>
                                        @error('deskripsi')
                                            <span class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label><b>Foto</b></label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a id="lfm" data-input="foto" data-preview="holder" class="btn btn-primary">
                                                <i class="fa fa-picture-o"></i> Choose
                                            </a>
                                        </span>
                                        <input id="foto" class="form-control" type="text" name="foto">
                                    </div>
                                    <img id="holder" style="margin-top:15px;margin-bottom:15px;max-height:100px;">
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
    $(document).ready(function(){
        $('#lfm').filemanager('image');
    });
    
</script>
@endsection
