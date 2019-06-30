<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar SIDESKEL | Sistem Informasi Desa & Kelurahan</title>
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
						DAFTAR SIDESKEL
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

                    {!! Form::open(['url' => 'daftar', 'class' => 'login100-form validate-form']) !!}
					
					<div class="wrap-input100 validate-input">
                    {!! Form::text('nama_pengguna', null, ['class' => 'input100']) !!}
						<span class="focus-input100" data-placeholder="Nama"></span>
					</div>
					
					<div class="wrap-input100 validate-input">
                    {!! Form::text('email_pengguna', null, ['class' => 'input100']) !!}
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input">
                    {!! Form::password('password_pengguna', ['class' => 'input100']) !!}
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="wrap-input100 validate-input">
                    {!! Form::text('no_hp', null, ['class' => 'input100']) !!}
						<span class="focus-input100" data-placeholder="No. HP"></span>
					</div>

					<div class="wrap-input100 validate-input">
				        {!! Form::select('jenis_kelamin', ['perempuan' => 'Perempuan', 'laki-laki' => 'Laki - Laki'], null, ['placeholder' => 'Jenis Kelamin', 'class' => 'form-control']); !!}
					</div>

                	<button type="submit" class="btn btn-primary btn-block">Daftar</button>
				{!! Form::close() !!}

	                <a href="{{ url('masuk') }}" class="btn btn-outline-info btn-block mt-2">Masuk</a>

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