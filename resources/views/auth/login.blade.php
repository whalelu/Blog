{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
						@csrf
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/images/login_v9/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/login_v9/bootstrap/css/bootstrap.min.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/login_v9/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/login_v9/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/login_v9/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/login_v9/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/login_v9/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/login_v9/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/login_v9/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/login_v9/util.css">
	<link rel="stylesheet" type="text/css" href="/css/login_v9//main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="container-login100" style="background-image: url('/images/login_v9/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form " method="POST" action="{{ route('login') }}">
				@csrf
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input id="email" class="input100" type="email" name="email" placeholder="email"  value="{{ old('email') }}" required autofocus>
					<span class="focus-input100"></span>
					
				</div>
				@if ($errors->has('email'))
						<div class="alert alert-danger">
							<strong>{{ $errors->first('email') }}</strong>
						</div>
				@endif

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input id="password" type="password" class="input100"  name="password" placeholder="password" required>
					
					<span class="focus-input100"></span>
				</div>
				@if ($errors->has('password'))
					<div class="alert alert-danger">
						<strong>{{ $errors->first('password') }}</strong>
					</div>
				@endif

				<div class="container-login100-form-btn">
					<button type="submit" class="login100-form-btn">
						{{ __('Login') }}
					</button>

					<a class="btn btn-link" href="{{ route('password.request') }}">
						{{ __('Forgot Your Password?') }}
					</a>
				</div>

				

				{{-- <div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="/images/login_v9/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div> --}}
				<br>
				<div class="text-center">
					<a href="{{ route('register') }}" class="txt2 hov1">
						Sign Up
					</a>
				</div>
			</form>


		</div>
	</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="/vendor/login_v9/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/login_v9/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/login_v9/bootstrap/js/popper.js"></script>
	<script src="/vendor/login_v9/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->

</body>
</html>


	{{-- <script src="/vendor/login_v9/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/login_v9/daterangepicker/moment.min.js"></script>
	<script src="/vendor/login_v9/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/vendor/login_v9/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/js/login_v9/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script> --}}