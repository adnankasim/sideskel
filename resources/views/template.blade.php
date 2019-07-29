<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Sistem Informasi Desa & Kelurahan</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">

    <link rel="icon" type="image/png" href="{{ asset('assets-dashboard/images/logo-sideskel.png') }}">

    <link rel="stylesheet" href="{{ asset('assets-dashboard/css/bootstrap41.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-dashboard/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-dashboard/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-dashboard/css/style.css') }}">
    <script src="{{ asset('assets-dashboard/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/js/Chart.bundle.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '.editor',
            plugins: "lists",
            toolbar: "numlist bullist",
            theme: 'modern',
            mobile: { theme: 'mobile' }
        });
    </script>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-title text-center border-bottom">
                        <img src="{{ asset('assets-dashboard/images/logo-sideskel.png') }}" width="45" class="mb-2">
                        <h3 class="font-weight-bold py-3 d-inline-block">SIDESKEL</h3> 
                        <h5 class="font-weight-bold py-3 d-inline-block">v. 1</h5> 
                        <!-- <small> (2019.6)</small> -->
                    </li>

@if(Session::has('admin'))
                @if(Request::segment(1) === 'dashboard')
                    <li class="active"><a href="{{ url('dashboard') }}"><i class="menu-icon fa fa-dashboard"></i>DASHBOARD </a></li>
                @else
                    <li><a href="{{ url('dashboard') }}"><i class="menu-icon fa fa-dashboard"></i> DASHBOARD </a></li>
                @endif

                @if(Request::segment(1) === 'profil' || Request::segment(1) === 'batas' || Request::segment(1) === 'tanaman-komoditas' || Request::segment(1) === 'orbitasi' || Request::segment(1) === 'tipologi' || Request::segment(1) === 'iklim' || Request::segment(1) === 'kesuburan-tanah' || Request::segment(1) === 'penggunaan-tanah' || Request::segment(1) === 'infrastruktur-melintasi')
                    <li class="menu-item-has-children dropdown active">
                @else
                    <li class="menu-item-has-children dropdown">
                @endif
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-home fa-lg"></i>TENTANG</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-info"></i> <a href="{{ url('profil') }}">PROFIL</a></li>
                            <li><i class="fa fa-map-marker"></i> <a href="{{ url('batas') }}">BATAS WILAYAH</a></li>
                            <li><i class="fa fa-leaf"></i> <a href="{{ url('tanaman-komoditas') }}">TANAMAN KOMODITAS</a></li>
                            <li><i class="fa fa-car"></i> <a href="{{ url('orbitasi') }}">ORBITASI</a></li>
                            <li><i class="fa fa-pagelines"></i> <a href="{{ url('tipologi') }}">TIPOLOGI</a></li>
                            <li><i class="fa fa-cloud"></i> <a href="{{ url('iklim') }}">IKLIM</a></li>
                            <li><i class="fa fa-square"></i> <a href="{{ url('kesuburan-tanah') }}">KESUBURAN TANAH</a></li>
                            <li><i class="fa fa-book"></i> <a href="{{ url('penggunaan-tanah') }}">PENGGUNAAN TANAH</a></li>
                            <li><i class="fa fa-binoculars"></i> <a href="{{ url('infrastruktur-melintasi') }}">INFRASTRUKTUR</a></li>
                        </ul>
                    </li>

                @if(Request::segment(1) === 'lembaga')
                    <li class="menu-item-has-children dropdown active">
                @else
                    <li class="menu-item-has-children dropdown">
                @endif
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-bank"></i>LEMBAGA</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bank"></i> <a href="{{ url('lembaga') }}">MASTER</a></li>
                            <li><i class="fa fa-users"></i><a href="{{ url('anggota-lembaga') }}">ANGGOTA</a></li>
                        </ul>
                    </li>

                @if(Request::segment(1) === 'fasilitas-ekonomi' || Request::segment(1) === 'fasilitas-kesehatan' || Request::segment(1) === 'fasilitas-pemerintahan' || Request::segment(1) === 'fasilitas-pemukiman' || Request::segment(1) === 'fasilitas-pendidikan' || Request::segment(1) === 'fasilitas-peribadatan' || Request::segment(1) === 'fasilitas-prasarana')
                    <li class="menu-item-has-children dropdown active">
                @else
                    <li class="menu-item-has-children dropdown">
                @endif
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-building-o"></i>FASILITAS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-bed"></i><a href="{{ url('fasilitas-pemukiman') }}">PEMUKIMAN</a></li>
                            <li><i class="fa fa-building"></i><a href="{{ url('fasilitas-pemerintahan') }}">PEMERINTAHAN</a></li>
                            <li><i class="fa fa-moon-o"></i><a href="{{ url('fasilitas-peribadatan') }}">PERIBADATAN</a></li>
                            <li><i class="fa fa-heart"></i><a href="{{ url('fasilitas-kesehatan') }}">KESEHATAN</a></li>
                            <li><i class="fa fa-dollar"></i><a href="{{ url('fasilitas-ekonomi') }}">EKONOMI</a></li>
                            <li><i class="fa fa-wifi"></i><a href="{{ url('fasilitas-prasarana') }}">PRA-SARANA</a></li>
                            <li><i class="fa fa-book"></i><a href="{{ url('fasilitas-pendidikan') }}">PENDIDIKAN</a></li>
                        </ul>
                    </li>

                @if(Request::segment(1) === 'belanja' || Request::segment(1) === 'pendapatan')
                    <li class="menu-item-has-children dropdown active">
                @else
                    <li class="menu-item-has-children dropdown">
                @endif
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-money"></i>KEUANGAN</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-credit-card"></i> <a href="{{ url('belanja') }}">BELANJA</a></li>
                            <li><i class="fa fa-dollar"></i><a href="{{ url('pendapatan') }}">PENDAPATAN</a></li>
                        </ul>
                    </li>

                @if(Request::segment(1) === 'penduduk')
                    <li class="menu-item-has-children dropdown active">
                @else
                    <li class="menu-item-has-children dropdown">
                @endif
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-users"></i>PENDUDUK</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-users"></i><a href="{{ url('penduduk') }}">MASTER</a></li>
                            <li><i class="fa fa-bar-chart"></i><a href="{{ url('penduduk/presentasi') }}">PRESENTASI</a></li>
                        </ul>
                    </li>
@endif

                @if(Request::segment(1) === 'artikel')
                    <li class="active"><a href="{{ url('artikel') }}"><i class="menu-icon fa fa-newspaper-o"></i>ARTIKEL 
                    
                    @if(Session::has('admin'))
                    &nbsp;<span class="badge badge-primary">{{ $artikel_invalid->count() }} </span>
                    @endif

                    </a></li>
                @else
                    <li><a href="{{ url('artikel') }}"><i class="menu-icon fa fa-newspaper-o"></i>ARTIKEL 
                    
                    @if(Session::has('admin'))
                    &nbsp;<span class="badge badge-primary"> {{ $artikel_invalid->count() }} </span>
                    @endif
                    </a></li>
                @endif

@if(Session::has('admin'))
                @if(Request::segment(1) === 'kegiatan')
                    <li class="active"><a href="{{ url('kegiatan') }}"><i class="menu-icon fa fa-camera"></i>KEGIATAN</a></li>
                @else
                    <li><a href="{{ url('kegiatan') }}"><i class="menu-icon fa fa-camera"></i>KEGIATAN</a></li>
                @endif

                @if(Request::segment(1) === 'dokumen')
                    <li class="active"><a href="{{ url('dokumen') }}"><i class="menu-icon fa fa-file"></i>DOKUMEN</a></li>
                @else
                    <li><a href="{{ url('dokumen') }}"><i class="menu-icon fa fa-file"></i>DOKUMEN</a></li>
                @endif

                @if(Request::segment(1) === 'pelayanan')
                    <li class="active"><a href="{{ url('pelayanan') }}"><i class="menu-icon fa fa-info-circle"></i>PELAYANAN</a></li>
                @else
                    <li><a href="{{ url('pelayanan') }}"><i class="menu-icon fa fa-info-circle"></i>PELAYANAN</a></li>
                @endif

                @if(Request::segment(1) === 'pengguna')
                    <li class="active"><a href="{{ url('pengguna') }}"><i class="menu-icon fa fa-user"></i>PENGGUNA</a></li>
                @else
                    <li><a href="{{ url('pengguna') }}"><i class="menu-icon fa fa-user"></i>PENGGUNA</a></li>
                @endif

                @if(Request::segment(1) === 'admin')
                    <li class="active"><a href="{{ url('admin') }}"><i class="menu-icon fa fa-user-secret"></i>ADMIN</a></li>
                @else
                    <li><a href="{{ url('admin') }}"><i class="menu-icon fa fa-user-secret"></i>ADMIN</a></li>
                @endif

                @if(Request::segment(1) === 'pengaturan')
                    <li class="active"><a href="{{ url('pengaturan') }}"><i class="menu-icon fa fa-wrench"></i>PENGATURAN</a></li>
                @else
                    <li><a href="{{ url('pengaturan') }}"><i class="menu-icon fa fa-wrench"></i>PENGATURAN</a></li>
                @endif
@endif
                    <li><a href="{{ url('keluar') }}"><i class="menu-icon fa fa-sign-out"></i>KELUAR</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->

    @yield('main-dashboard')

    <script src="{{ asset('assets-dashboard/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/js/jquery.matchHeight.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/js/main.js') }}"></script>
</body>
</html>