<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sufee Admin - HTML5 Admin Template</title>
	<meta name="description" content="Sufee Admin - HTML5 Admin Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="apple-touch-icon" href="apple-icon.png">
	<link rel="shortcut icon" href="favicon.ico">


	<link rel="stylesheet" href="{{ asset('/designAdmin/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/designAdmin/vendors/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/designAdmin/vendors/themify-icons/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('/designAdmin/vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/designAdmin/vendors/selectFX/css/cs-skin-elastic.css') }}">

	<link rel="stylesheet" href="{{ asset('/designAdmin/assets/css/style.css') }}">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


	<div class="sufee-login d-flex align-content-center flex-wrap">
		<div class="container">
			<div class="login-content">
				<div class="login-logo">
					<a href="index.html">
						<img class="align-content" src="images/logo.png" alt="">
					</a>
				</div>
				<div class="login-form">
					<form role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">





						<div class="form-group">
							<label>Email address</label>
							<input type="email" class="form-control" name="email"
								value="{{ old('email') }}">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember"> Remember Me
							</label>
							<label class="pull-right">
								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your
									Password?</a>
							</label>

						</div>
						<button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign
							in</button>

						<div class="register-link m-t-15 text-center">
							<p>Don't have account ? <a href="{{ url('/auth/register') }}"> Sign Up
									Here</a></p>
						</div>
					</form>
				</div>


				<a href="{{ route('welcome') }}"><button type="button"
						class="btn btn-danger btn-lg btn-block">Back Home page</button></a>

			</div>
		</div>
	</div>


	<script src="{{ asset('/designAdmin/vendors/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('/designAdmin/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
	<script src="{{ asset('/designAdmin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/designAdmin/assets/js/main.js') }}"></script>


</body>

</html>