@extends('backend.main')

@section('title', 'Tambah PPDB Online')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- INPUTS -->
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">TAMBAH PPDB ONLINE</h3>
						</div>
						<div class="panel-body">
                            <form action="{{route('pendaftaran.store')}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group @error('tahun_ajaran') has-error @enderror">
                                            <label><b>Tahun Ajaran</b></label>
                                            <input type="text" class="form-control" name="tahun_ajaran" placeholder="ex: 2018/2019" value="{{old('tahun_ajaran')}}">
                                            @error('tahun_ajaran')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('buka') has-error @enderror">
                                            <label><b>Buka</b></label>
                                            <input type="date" class="form-control" name="buka" value="{{old('buka')}}">
                                            @error('buka')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('tutup') has-error @enderror">
                                            <label><b>Tutup</b></label>
                                            <input type="date" class="form-control" name="tutup" value="{{old('tutup')}}">
                                            @error('tutup')
                                                <span class="help-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group @error('kuota') has-error @enderror">
                                            <label><b>Kuota</b></label>
                                            <input type="number" class="form-control" name="kuota"vvalue="{{old('kuota')}}">
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