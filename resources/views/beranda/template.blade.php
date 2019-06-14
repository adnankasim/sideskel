<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $profil->nama }} &mdash; Sistem Informasi Desa & Kelurahan</title>
    
    @if(Request::segment(2) === 'profil')
        <meta name="keywords" content="Profil {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'batas')
        <meta name="keywords" content="Batas Wilayah {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'tanaman-komoditas')
        <meta name="keywords" content="Tanaman Komoditas {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'orbitasi')
        <meta name="keywords" content="Orbitasi {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'tipologi')
        <meta name="keywords" content="Tipologi {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'iklim')
        <meta name="keywords" content="Iklim {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'kesuburan-tanah')
        <meta name="keywords" content="Kesuburan Tanah {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'penggunaan-tanah')
        <meta name="keywords" content="Penggunaan Tanah {{ $profil->nama }}">
    @elseif(Request::segment(2) === 'infrastruktur-melintasi')
        <meta name="keywords" content="Infrastruktur Melintasi {{ $profil->nama }}">
    @endif
    
    <meta name="description" content="{{ $profil->deskripsi }}">
    <meta name="author" content="{{ $profil->nama }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="{{ asset('assets-beranda/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/style.css') }}">
    
</head>
<body>

    <div class="site-wrap">


    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="site-navbar-wrap" data-aos="fade-up" style="background-color: steelblue">
            <div class="site-navbar">
                <div class="container-fluid py-1">
                    <div class="row align-items-center">
                        <div class="col-3 text-center">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('assets-beranda/images/'.$profil->logo) }}" style="display: inline-block; margin-top: -10px" alt="Logo Kabupaten Gorontalo" width="40">
                            </a>
                            <h4 class="ml-1 mt-2 site-logo text-white d-none d-xl-inline-block"
                                style="display: inline-block;">
                                <a href="{{ url('/') }}">{{ $profil->nama }}</a></h4>
                        </div>
                        <div class="col-9">
                            <nav class="site-navigation text-right" role="navigation">
                                <div class="container">
                                    <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"><a href="#"
                                            class="site-menu-toggle js-menu-toggle text-white"><span
                                                class="icon-menu h3"></span></a></div>

                                    <ul class="site-menu js-clone-nav d-none d-xl-block text-center">
    @if(Request::segment(2) === 'profil' || Request::segment(2) === 'batas' || Request::segment(2) === 'tanaman-komoditas' || Request::segment(2) === 'orbitasi' || Request::segment(2) === 'tipologi' || Request::segment(2) === 'iklim' || Request::segment(2) === 'kesuburan-tanah' || Request::segment(2) === 'penggunaan-tanah')
                                        <li class="has-children active">
    @else
                                        <li class="has-children">
    @endif
                                            <a href="#">TENTANG</a>
                                            <ul class="dropdown arrow-top">
                                                <li><a href="{{ url('beranda/profil') }}">PROFIL</a></li>
                                                <li><a href="{{ url('beranda/batas') }}">BATAS WILAYAH</a></li>
                                                <li><a href="{{ url('beranda/tanaman-komoditas') }}">TANAMAN KOMODITAS</a></li>
                                                <li><a href="{{ url('beranda/orbitasi') }}">ORBITASI</a></li>
                                                <li><a href="{{ url('beranda/tipologi') }}">TIPOLOGI</a></li>
                                                <li><a href="{{ url('beranda/iklim') }}">IKLIM</a></li>
                                                <li><a href="{{ url('beranda/kesuburan-tanah') }}">KESUBURAN TANAH</a></li>
                                                <li><a href="{{ url('beranda/penggunaan-tanah') }}">PENGGUNAAN TANAH</a></li>
                                                <li><a href="{{ url('beranda/infrastruktur-melintasi') }}">INFRASTRUKTUR MELINTASI</a></li>
                                            </ul>
                                        </li>
@if(Request::segment(2) === 'pemerintahan')
                                        <li class="active"><a href="{{ url('beranda/pemerintahan') }}">PEMERINTAH</a></li>
@else
                                        <li><a href="{{ url('beranda/pemerintahan') }}">PEMERINTAH</a></li>
@endif

@if(Request::segment(2) === 'fasilitas-pemukiman' || Request::segment(2) === 'fasilitas-pemerintahan' || Request::segment(2) === 'fasilitas-peribadatan' || Request::segment(2) === 'fasilitas-kesehatan' || Request::segment(2) === 'fasilitas-ekonomi' || Request::segment(2) === 'fasilitas-prasarana' || Request::segment(2) === 'fasilitas-pendidikan')
                                        <li class="has-children active">
@else
                                        <li class="has-children">
@endif
                                            <a href="#">FASILITAS</a>
                                            <ul class="dropdown arrow-top">
                                                <li><a href="{{ url('beranda/fasilitas-pemukiman') }}">PEMUKIMAN</a></li>
                                                <li><a href="{{ url('beranda/fasilitas-pemerintahan') }}">PEMERINTAHAN</a></li>
                                                <li><a href="{{ url('beranda/fasilitas-peribadatan') }}">PERIBADATAN</a></li>
                                                <li><a href="{{ url('beranda/fasilitas-kesehatan') }}">KESEHATAN</a></li>
                                                <li><a href="{{ url('beranda/fasilitas-ekonomi') }}">EKONOMI</a></li>
                                                <li><a href="{{ url('beranda/fasilitas-prasarana') }}">PRA-SARANA</a></li>
                                                <li><a href="{{ url('beranda/fasilitas-pendidikan') }}">PENDIDIKAN</a></li>
                                            </ul>
                                        </li>
@if(Request::segment(2) === 'belanja' || Request::segment(2) === 'pendapatan')
                                        <li class="has-children active">
@else
                                        <li class="has-children">
@endif
                                            <a href="#">KEUANGAN</a>
                                            <ul class="dropdown arrow-top">
                                                <li><a href="{{ url('beranda/belanja') }}">BELANJA</a></li>
                                                <li><a href="{{ url('beranda/pendapatan') }}">PENDAPATAN</a></li>
                                            </ul>
                                        </li>
@if(Request::segment(2) === 'penduduk-usia' || Request::segment(2) === 'penduduk-pekerjaan' || Request::segment(2) === 'penduduk-pendidikan' || Request::segment(2) === 'penduduk-golongan-darah' || Request::segment(2) === 'penduduk-menikah' || Request::segment(2) === 'penduduk-agama' || Request::segment(2) === 'penduduk-jenis-kelamin')
                                        <li class="has-children active">
@else
                                        <li class="has-children">
@endif
                                            <a href="#">PENDUDUK</a>
                                            <ul class="dropdown arrow-top">
                                                <li><a href="{{ url('beranda/penduduk-usia') }}">USIA</a></li>
                                                <li><a href="{{ url('beranda/penduduk-pekerjaan') }}">PEKERJAAN</a></li>
                                                <li><a href="{{ url('beranda/penduduk-pendidikan') }}">PENDIDIKAN</a></li>
                                                <li><a href="{{ url('beranda/penduduk-golongan-darah') }}">GOL. DARAH</a></li>
                                                <li><a href="{{ url('beranda/penduduk-menikah') }}">MENIKAH</a></li>
                                                <li><a href="{{ url('beranda/penduduk-agama') }}">AGAMA</a></li>
                                                <li><a href="{{ url('beranda/penduduk-jenis-kelamin') }}">JENIS KELAMIN</a></li>
                                            </ul>
                                        </li>
@if(Request::segment(2) === 'dokumen')
                                        <li class="active"><a href="{{ url('beranda/dokumen') }}">DOKUMEN</a></li>
@else
                                        <li><a href="{{ url('beranda/dokumen') }}">DOKUMEN</a></li>
@endif

@if(Request::segment(2) === 'artikel')
                                        <li class="active"><a href="{{ url('beranda/artikel') }}">ARTIKEL</a></li>
@else
                                        <li><a href="{{ url('beranda/artikel') }}">ARTIKEL</a></li>
@endif

@if(Request::segment(2) === 'kegiatan')
                                        <li class="active"><a href="{{ url('beranda/kegiatan') }}">KEGIATAN</a></li>
@else
                                        <li><a href="{{ url('beranda/kegiatan') }}">KEGIATAN</a></li>
@endif

                                        <li><a href="{{ url('masuk') }}">MASUK</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    @yield('main-beranda')

        <footer class="site-footer border-top" data-aos="fade-down">
    <div class="container">
        <div class="row pt-2 text-center">
            <div class="col-md-12">
                <p>
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> {{ $profil->nama }}
                    <br> SIDESKEL Development by. <strong> <a href="https://facebook.com/adnan.indrakasim" target="_blank">Adnan Kasim</a></strong>
                    <br> and This template is made by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                </p>
            </div>

        </div>
    </div>
        </footer>

    </div>
<script src="{{ asset('assets-beranda/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets-beranda/js/popper.min.js') }}"></script>
<script src="{{ asset('assets-beranda/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets-beranda/js/aos.js') }}"></script>
<script src="{{ asset('assets-beranda/js/main.js') }}"></script>
</body>

</html>