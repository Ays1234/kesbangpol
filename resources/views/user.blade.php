<!DOCTYPE html>
<html lang="en">



<head>

	<title>Halaman Login</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="SigerProject" />
	<!-- Favicon icon -->
	<link rel="icon" href="admin/assets/images/favicon.ico" type="image/x-icon">
	<!-- vendor css -->
	<link rel="stylesheet" href="admin/assets/css/style.css">
	
	


</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">

				@if(session()->has('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						{{ session('success') }}</strong>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
@endif

		@if(session()->has('loginError'))
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						{{ session('loginError') }}</strong>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
@endif
				
				<div class="col-md-12">
					<div class="card-body">
						<img src="admin/assets/images/logo-dark.png" alt="" class="img-fluid mb-4">
						
						<h4 class="mb-3 f-w-400">Masuk</h4>

<form action="/user" method="POST">
   @csrf
						<div class="form-group mb-3">
							<label class="floating-label" for="Email">Email / Username</label>
							<input type="text" name="email" class="form-control @error('email') is-invalid
							@enderror" id="Email" placeholder="" value="{{ old ('email')}}" autofocus>
							@error('email')

							<div class="invalid-feedback">
							{{ $message }}
							</div>
								
							@enderror
						</div>
						<div class="form-group mb-4">
							<label class="floating-label" for="Password">Password</label>
							<input type="password" name="password" class="form-control @error('password')is-invalid
								
							@enderror" id="Password" placeholder="">
							@error('password')

							<div class="invalid-feedback">
							{{ $message }}
							</div>
								
							@enderror
						</div>
						<div class="form-check text-start mb-4 mt-2">
							<input type="checkbox" class="form-check-input" id="customCheck1">
							<label class="form-check-label" for="customCheck1">Save.</label>
						</div>
						<button class="btn btn-block btn-primary mb-4">Signin</button>
						<p class="mb-2 text-muted">Lupa password? <a href="auth-reset-password.html" class="f-w-400">Reset</a></p>
						<p class="mb-0 text-muted">Belum Punya Akun? <a href="auth-signup.html" class="f-w-400">Daftar</a></p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="admin/assets/js/vendor-all.min.js"></script>
<script src="admin/assets/js/plugins/bootstrap.min.js"></script>
<script src="admin/assets/js/ripple.js"></script>
<script src="admin/assets/js/pcoded.min.js"></script>
<script src="admin/assets/js/jquery.min.js"></script>


<!-- notification Js -->

<script>
    $(document).ready(function() {
        window.setTimeout(function() {
            $(".alert").fadeTo(600, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 6000);
    });    
</script>


</body>


<!-- Mirrored from ableproadmin.com/bootstrap/default/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Mar 2022 16:32:49 GMT -->
</html>
