@extends('backend.main')

@section('title', 'Dashboard')

@section('content')
    <!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Data Website MA Hidayatus Syubban Semarang</h3>
							<p class="panel-subtitle">Periode: {{ \Date::now()->format('d F Y')}}</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-user"></i></span>
										<p>
                      						<span class="number">{{ \DB::table('users')->count()}}</span>
											<span class="title">User</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-newspaper-o"></i></span>
										<p>
                      						<span class="number">{{ \DB::table('informasi')->count()}}</span>
											<span class="title">Informasi</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-users"></i></span>
										<p>
											<span class="number">{{ \DB::table('staff')->count()}}</span>
											<span class="title">Guru & Karyawan</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-inbox"></i></span>
										<p>
											<span class="number">{{ \DB::table('pendaftaran')->where('status',1)->count()}}</span>
											<span class="title">PPDB Online</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->

@endsection