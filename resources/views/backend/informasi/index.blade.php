@extends('backend.main')

@section('title', 'Data Informasi Berita & Pengumuman')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
						<div class="panel-heading">
						    <h3 class="panel-title">Data Informasi Berita & Pengumuman</h3>
                            <div class="right">
                                <a href="{{route('informasi.create')}}" class="btn btn-primary btn-sm">Tambah</a>  
                            </div>
						</div>
						<div class="panel-body">
							<table class="table table-hover" id="myTable">
								<thead>
									<tr>
                                        <th>NO</th>
                                        <th>JUDUL</th>
                                        <th>KATEGORI</th>
                                        <th>USER</th>
                                        <th>AKSI</th>
									</tr>
								</thead>
								<tbody>
                                @foreach($informasi as $informasi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$informasi->judul}}</td>
                                        <td>{{$informasi->kategori}}</td>
                                        <td>{{$informasi->user->name}}</td>
                                        <td>
                                            <form action="{{ route('informasi.destroy', $informasi->id_informasi)}}" method="POST">
                                            <a href="{{route('informasi.edit', $informasi->id_informasi)}}" class="btn btn-sm btn-warning">Edit</a>
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