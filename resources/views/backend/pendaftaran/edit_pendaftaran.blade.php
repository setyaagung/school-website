@extends('backend.main')

@section('title', 'Edit PPDB Online')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">EDIT PPDB ONLINE</h3>
						</div>
						<div class="panel-body">
                            <form action="{{route('pendaftaran.update',$pendaftaran->id_pendaftaran)}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                @method('PATCH')
                                    <div class="form-group @error('tahun_ajaran') has-error @enderror">
                                        <label><b>Tahun Ajaran</b></label>
                                        <input type="text" class="form-control" name="tahun_ajaran" placeholder="ex: 2018-2019" value="{{$pendaftaran->tahun_ajaran}}">
                                        @error('tahun_ajaran')
                                            <span class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group @error('buka') has-error @enderror">
                                        <label><b>Buka</b></label>
                                        <input type="date" class="form-control" name="buka" value="{{$pendaftaran->buka->format('Y-m-d')}}">
                                        @error('buka')
                                            <span class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group @error('tutup') has-error @enderror">
                                        <label><b>Tutup</b></label>
                                        <input type="date" class="form-control" name="tutup" value="{{$pendaftaran->tutup->format('Y-m-d')}}">
                                        @error('tutup')
                                            <span class="help-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group @error('kuota') has-error @enderror">
                                        <label><b>Kuota</b></label>
                                        <input type="number" class="form-control" name="kuota" value="{{$pendaftaran->kuota}}">
                                        @error('kuota')
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