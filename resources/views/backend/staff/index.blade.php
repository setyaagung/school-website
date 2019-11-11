@extends('backend.main')

@section('title', 'Pendidik & Karyawan')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
						<div class="panel-heading">
						    <h3 class="panel-title">Data Tenaga Guru & Karyawan</h3>
                            <div class="right">
                                <a href="{{route('staff.create')}}" class="btn btn-primary btn-sm">Tambah</a>  
                            </div>
						</div>
						<div class="panel-body">
							<table class="table table-hover" id="myTable">
								<thead>
									<tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>STATUS</th>
                                        <th>DESKRIPSI</th>
                                        <th>AKSI</th>
									</tr>
								</thead>
								<tbody>
                                @foreach($staff as $staff)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$staff->nama}}</td>
                                        <td>{{$staff->status}}</td>
                                        <td>{{$staff->deskripsi}}</td>
                                        <td>
                                            <form action="{{ route('staff.destroy', $staff->id)}}" method="POST">
                                                <a href="https://www.youtube.com/watch?v=wOK0h9ausO4" class="btn btn-sm btn-warning">Edit</a>
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