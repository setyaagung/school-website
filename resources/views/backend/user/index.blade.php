@extends('backend.main')

@section('title', 'Data User')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
						<div class="panel-heading">
						    <h3 class="panel-title">Data Pengguna</h3>
                            <div class="right">
                                <a href="#" class="btn btn-primary btn-sm">Tambah</a>  
                            </div>
						</div>
						<div class="panel-body">
							<table class="table table-hover" id="myTable">
								<thead>
									<tr>
                                        <th>NO</th>
                                        <th>ROLE</th>
                                        <th>NAMA</th>
                                        <th>EMAIL</th>
                                        <th>AKSI</th>
									</tr>
								</thead>
								<tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$user->role}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            
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