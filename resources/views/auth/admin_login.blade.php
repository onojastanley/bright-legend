<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/dark.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/custom.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/font-icons.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">



<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/include/rs-plugin/css/settings.css') }}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/include/rs-plugin/css/layers.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/include/rs-plugin/css/navigation.css') }}">

<!-- Document Title
============================================= -->
<title>Login - Admin | Bright Legend</title>



</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

	<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0">

				<div class="section dark p-0 m-0 h-100 position-absolute"></div>

				<div class="section bg-transparent min-vh-100 p-0 m-0 d-flex">
					<div class="vertical-middle">
						<div class="container py-5">

							<div class="text-center">
								<a href="index.html"><img src="{{ asset('frontend/assets/images/logo-dark@2x.png') }} " alt="Canvas Logo" style="height: 100px;"></a>
							</div>

							<div class="card mx-auto rounded-0 border-0" style="max-width: 400px;">
								<div class="card-body" style="padding: 40px;">
									<form id="login-form" name="login-form" class="mb-0" action="#" method="post">
										<h3>Login to your Account</h3>

										<div class="row">
											<div class="col-12 form-group">
												<label for="login-form-username">Username:</label>
												<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control not-dark" />
											</div>

											<div class="col-12 form-group">
												<label for="login-form-password">Password:</label>
												<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark" />
											</div>

											<div class="col-12 form-group mb-0">
												<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
												<a href="#" class="float-end">Forgot Password?</a>
											</div>
										</div>
									</form>

									<div class="line line-sm"></div>

									<div class="center">
										<h4 style="margin-bottom: 15px;">or Login with:</h4>
										<a href="#" class="button button-rounded si-facebook si-colored">Facebook</a>
										<span class="d-none d-md-inline-block">or</span>
										<a href="#" class="button button-rounded si-twitter si-colored">Twitter</a>
									</div>
								</div>
							</div>

							<div class="text-center text-muted mt-3"><small>Copyrights &copy; All Rights Reserved by Canvas Inc.</small></div>

						</div>
					</div>
				</div>

			</div>
		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->


	<script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
	<script src="{{ asset('frontend/assets/js/plugins.min.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('frontend/assets/js/functions.js') }}"></script>

	
</body>
</html>