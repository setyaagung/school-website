@extends('backend.main')

@section('title', 'Data Formulir PPDB Online')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
						<div class="panel-heading">
                            <h3 class="panel-title">Data Formulir PPDB Online {{$pendaftaran->tahun_ajaran}}</h3>
                            <div class="right">
                                <a href="{{route('pendaftaran.index')}}" class="btn btn-default btn-sm">Kembali</a>
                                <a href="{{route('pendaftaran.cetak',$pendaftaran->id_pendaftaran)}}" class="btn btn-danger btn-sm" target="_blank">Cetak</a>
                                <a href="{{route('formulir.create',$pendaftaran->id_pendaftaran)}}" class="btn btn-primary btn-sm">Tambah</a>  
                            </div>
						</div>
						<div class="panel-body">
							<table class="table table-hover" id="myTable">
								<thead>
									<tr>
                                        <th>NO</th>
                                        <th>NO. PENDAFTARAN</th>
                                        <th>NAMA</th>
                                        <th>ASAL SEKOLAH</th>
                                        <th>STATUS</th>
                                        <th>AKSI</th>
									</tr>
								</thead>
								<tbody>
                                @foreach($pendaftaran->formulir as $form)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><a href="{{ url('/administrator/pendaftaran/'.$pendaftaran->id_pendaftaran.'/formulir'.'/'.$form->id_formulir.'/cetak_formulir')}}" target="_blank">{{$form->no_pendaftaran}}</a></td>
                                        <td>{{$form->nama}}</td>
                                        <td>{{$form->asal_sekolah}}</td>
                                        <td>{{$form->status_daftar}}</td>
                                        <td>
                                            <form action="{{ route('formulir.destroy', $form->id_formulir)}}" method="POST">
                                                <a href="{{ url('/administrator/pendaftaran/'.$pendaftaran->id_pendaftaran.'/formulir'.'/'.$form->id_formulir.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection