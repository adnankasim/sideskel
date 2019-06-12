<!DOCTYPE HTML>
<html>
<head>
<title> Daftar {{ $profil->nama }} | Sistem Informasi Desa & Kelurahan </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Daftar, daftar, register, Register {{ $profil->nama }}">
<meta name="description" content="Daftar SIDESKEL {{ $profil->nama }}">
<meta name="author" content="{{ $profil->nama }}"> 
<link href="{{ asset('assets-beranda/css/bootstrap.min.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('assets-beranda/css/style-login.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('assets-beranda/css/font-awesome.css') }}" rel="stylesheet"> 
<script src="{{ asset('assets-beranda/js/jquery.min.js') }}"> </script>
<script src="{{ asset('assets-beranda/js/bootstrap.min.js') }}"> </script>
</head>
<body>
	<div class="login">
		<h1 class="text-uppercase">SIDESKEL {{ $profil->nama }} </h1>
		<h5 class="text-center">SISTEM INFORMASI DESA & KELURAHAN</h5>
		<div class="login-bottom">
			<h2>DAFTAR</h2>
			<div class="col-md-6">
				<div class="login-mail">
					<input type="text" placeholder="Nama Lengkap" required="">
					<i class="fa fa-user"></i>
				</div>
				<div class="login-mail">
					<input type="text" placeholder="Email" required="">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input type="password" placeholder="Password" required="">
					<i class="fa fa-lock"></i>
				</div>
			</div>
			<div class="col-md-6 login-do">
				<label class="hvr-shutter-in-horizontal login-sub">
					<input type="submit" value="DAFTAR">
					</label>
					<p>Sudah Mendaftar ? Silahkan Masuk</p>
				<a href="{{ url('masuk') }}" class="hvr-shutter-in-horizontal">MASUK</a>
                <a href="{{ url('beranda') }}" class="btn btn-primary" style="margin-top:5px">BERANDA</a>
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
		<!---->
	<div class="copy-right">
		<p>
			&copy;
			<script>document.write(new Date().getFullYear());</script> {{ $profil->nama }}
			<br> SIDESKEL Development by. <strong> <a href="#">Adnan Kasim</a></strong> Design by <a
				href="http://w3layouts.com/" target="_blank">W3layouts</a>
		</p>
	</div>
	  
<!---->
<!--scrolling js-->
	
	<script src="{{ asset('assets-beranda/js/scripts-login.js') }}"></script>
	<!--//scrolling js-->
</body>
</html>

