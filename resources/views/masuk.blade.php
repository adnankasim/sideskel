<!DOCTYPE html>
<html lang="en">
<head>
	<title>Masuk SIDESKEL | Sistem Informasi Desa & Kelurahan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{ asset('assets-dashboard/images/logo-sideskel.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets-beranda/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets-beranda/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets-beranda/assets/fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets-beranda/assets/vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets-beranda/assets/vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets-beranda/assets/vendor/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets-beranda/assets/vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets-beranda/assets/vendor/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets-beranda/assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets-beranda/assets/css/main.css') }}">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
					<span class="login100-form-title p-b-26">
						MASUK SIDESKEL
					</span>
					<span class="login100-form-title p-b-48">
                        <img src="{{ asset('assets-dashboard/images/logo-sideskel.png') }}" class="image" width="100">
					</span>
					@if($errors->any())
					<div class="content text-center">
					  @foreach($errors->all() as $error)
					   <p class="alert alert-danger text-center">{{$error}}</p>
					  @endforeach
					</div>
					@endif

					@if (session('pesan'))
    				<div class="alert alert-danger text-center">
    				    {{ session('pesan') }}
    				</div>
					@endif

					@if (session('info'))
    				<div class="alert alert-primary text-center">
    				    {{ session('info') }}
    				</div>
					@endif

                    {!! Form::open(['url' => 'masuk', 'class' => 'login100-form validate-form']) !!}
					<div class="wrap-input100 validate-input">
                    {!! Form::text('email', null, ['class' => 'input100']) !!}
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input">
                    {!! Form::password('password', ['class' => 'input100']) !!}
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

                <button type="submit" class="btn btn-primary btn-block">Masuk</button>

				{!! Form::close() !!}

                <a href="{{ url('daftar') }}" class="btn btn-outline-info btn-block mt-2">Daftar</a>

			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	<script src="{{ asset('assets-beranda/assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('assets-beranda/assets/vendor/animsition/js/animsition.min.js') }}"></script>
	<script src="{{ asset('assets-beranda/assets/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assets-beranda/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets-beranda/assets/vendor/select2/select2.min.js') }}"></script>
	<script src="{{ asset('assets-beranda/assets/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('assets-beranda/assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('assets-beranda/assets/vendor/countdowntime/countdowntime.js') }}"></script>
	<script src="{{ asset('assets-beranda/assets/js/main.js') }}"></script>
</body>
</html>