
<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login Administrator</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('backend/assets/vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('backend/assets/vendor/toastr/toastr.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('backend/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('backend/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('backend/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/logo.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<h3 class="logo text-center">MA HIDAYATUS SYUBBAN</h3>
								<p class="lead">Login to your account</p>
							</div>
              				<form class="form-auth-small" action="/admin/postlogin" method="POST">
              				  	{{ csrf_field() }}
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" name="email" class="form-control" id="signin-email" placeholder="Email" required>
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" name="password" class="form-control" id="signin-password" placeholder="Password" required>
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
  <!-- END WRAPPER -->
  <script src="{{asset('backend/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		@if (Session::has('success'))
			toastr.success("{{Session::get('success')}}", "Berhasil!");
		@endif

		@if (Session::has('failed'))
			toastr.error("{{Session::get('failed')}}", "Gagal!");
		@endif
	</script>
</body>

</html>
