@extends('backend.main')

@section('title', 'Data Berita & Pengumuman')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
						<div class="panel-heading">
						    <h3 class="panel-title">Data Berita & Pengumuman</h3>
                            <div class="right">
                                <a href="{{route('berita.create')}}" class="btn btn-primary btn-sm">Tambah</a>  
                            </div>
						</div>
						<div class="panel-body">
							<table class="table table-hover" id="myTable">
								<thead>
									<tr>
                                        <th>NO</th>
                                        <th>JUDUL</th>
                                        <th>USER</th>
                                        <th>AKSI</th>
									</tr>
								</thead>
								<tbody>
                                @foreach($berita as $berita)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$berita->judul}}</td>
                                        <td>{{$berita->user->name}}</td>
                                        <td>#</td>
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