<html>
	<head>
		<title>Graduatesonline</title>
		<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="webcta">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<img class="logo-style" src="{{ asset('/img/logo.png') }}">
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-5">
								<h2 class="titlecta">Connect. Study. Network.</h2>
								<p  class="slider_text">Graduates online in an interactive forum for  students pursuing
								their Master and pHD programs, in a community of researchers,
								graduates alumni, lecturers and practising professionals from
								agricultural labour markets. </p>
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-6">
								<a href="auth/register" class="register_btn">Register</a>
								<a href="auth/login" class="login_btn">Log In</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>	
				<div class="row loginform">
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<h4 class="log_form_text">Already Registered?</h4>
							</div>
							
							<div class="col-md-9">
								<form class="" role="form" method="POST" action="{{ url('/auth/login') }}">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="email" class="email-field" name="email" placeholder="Enter your email">
									<input type="password" class="pass-field" name="password" placeholder="Password">
									<button type="submit" class="login-btn">Login</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="container">
						<div class="col-md-10 col-md-offset-1">
							<img class="partners" src="{{ asset('/img/parners.png') }}">
						</div>
					</div>
				</div>
			</div>
		
	</body>
</html>
