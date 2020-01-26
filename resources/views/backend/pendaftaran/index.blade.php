@extends('backend.main')

@section('title', 'Administrator PPDB Online')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
						<div class="panel-heading">
						    <h3 class="panel-title">Administrator PPDB Online</h3>
                            <div class="right">
                                <a href="{{route('pendaftaran.create')}}" class="btn btn-primary btn-sm">Tambah</a>  
                            </div>
						</div>
						<div class="panel-body">
							<table class="table table-hover" id="myTable">
								<thead>
									<tr>
                                        <th>NO</th>
                                        <th>TAHUN AJARAN</th>
                                        <th>BUKA</th>
                                        <th>TUTUP</th>
                                        <th>KUOTA</th>
                                        <th>STATUS</th>
                                        <th>AKSI</th>
									</tr>
								</thead>
								<tbody>
                                @foreach($pendaftaran as $pdt)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><a href="{{route('pendaftaran.show', $pdt->id_pendaftaran)}}">{{$pdt->tahun_ajaran}}</a></td>
                                        <td>{{\Date::parse($pdt->buka)->format('d F Y')}}</td>
                                        <td>{{\Date::parse($pdt->tutup)->format('d F Y')}}</td>
                                        <td>{{$pdt->kuota}}</td>
                                        <td>
                                            @if ($pdt->status == 1)
                                                <a href="{{route('ubahstatus', $pdt->id_pendaftaran)}}" class="label label-success">AKTIF</a>
                                            @else
                                                <a href="{{route('ubahstatus', $pdt->id_pendaftaran)}}" class="label label-danger">TIDAK AKTIF</a>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('pendaftaran.destroy', $pdt->id_pendaftaran)}}" method="POST">
                                            <a href="{{route('pendaftaran.edit', $pdt->id_pendaftaran)}}" class="btn btn-sm btn-warning">Edit</a>
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