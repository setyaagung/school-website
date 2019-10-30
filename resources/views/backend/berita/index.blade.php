@extends('backend/main')

@section('title', 'Data Berita')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DATA BERITA</h6>
      <a href="/admin/berita/create" class="btn btn-sm btn-primary" style="float:right; margin-top:-20px">TAMBAH</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <th>#</th>
                    <th>JUDUL</th>
                    <th>USER</th>
                    <th>AKSI</th>
                </thead>
                <tbody>
                    @foreach ($berita as $berita)
                        <tr>
                            <td>{{$loop->iteration}}</td>
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
@endsection