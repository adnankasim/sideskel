<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ $profil->nama }} &mdash; Sistem Informasi Desa & Kelurahan</title>
    <meta name="description" content="{{ $profil->deskripsi }}">
    <meta name="keywords" content="Sistem Informasi Desa dan Kelurahan {{ $profil->nama }}">
    <meta name="author" content="{{ $profil->nama }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    
    <div class="site-navbar-wrap">
      <div class="site-navbar">
        <div class="container-fluid py-1">
          <div class="row align-items-center">
            <div class="col-3 text-center">
              <a href="{{ url('/') }}">
                <img src="{{ asset('assets-beranda/images/'.$profil->logo) }}" style="display: inline-block; margin-top: -10px" alt="Logo Kabupaten Gorontalo" width="40">
              </a>
              <h4 class="ml-1 mt-2 site-logo text-white d-none d-xl-inline-block" style="display: inline-block;"><a href="{{ url('/') }}"> {{ $profil->nama }} </a></h4>
            </div>
            <div class="col-9">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-xl-block text-center">
                    <li class="has-children">
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
                      </ul>
                    </li>
                    <li><a href="{{ url('beranda/pemerintahan') }}">PEMERINTAH</a></li>
                    <li class="has-children">
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
                    <li class="has-children">
                      <a href="#">KEUANGAN</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="{{ url('beranda/belanja') }}">BELANJA</a></li>
                        <li><a href="{{ url('beranda/pendapatan') }}">PENDAPATAN</a></li>
                      </ul>
                    </li>
                    <li class="has-children">
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
                    <li><a href="{{ url('beranda/dokumen') }}">DOKUMEN</a></li>
                    <li><a href="{{ url('beranda/artikel') }}">ARTIKEL</a></li>
                    <li><a href="{{ url('beranda/kegiatan') }}">KEGIATAN</a></li>
                    <li><a href="{{ url('masuk') }}">MASUK</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url({{ asset('assets-beranda/images/bg1.jpg') }});" data-aos="fade-up" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center text-center justify-content-center">
          <div class="col-md-12">
            <span class="sub-text">Sistem informasi desa & kelurahan</span>
            <h1> {{ $profil->nama }} </h1>
            <span class="sub-text"> {{ $profil->alamat }} </span>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section border-bottom" data-aos="flip-left">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 col-md-12 mb-12 mb-lg-0 text-center">
            <div class="media custom-media">
              <div class="media-body text-center">
                <span class="fa fa-eye fa-3x"></span>
                <span class="fa fa-eye fa-3x"></span>
                <h5 class="mt-3">VISI & MISI</h5>
                  {!! $profil->visi_misi !!}
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section border" data-aos="zoom-out">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <a href="#">
              <h2 class="font-weight-bold text-black mb-5">ARTIKEL</h2>
            </a>
          </div>
        </div>
        
        <div class="row mb-5">
          
          @foreach($daftar_artikel as $artikel)
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
            <a href="{{ url('beranda/artikel/'.$artikel->slug_artikel) }}" class="d-block figure">
              <img src="{{ asset('assets-beranda/images/'.$artikel->gambar_artikel) }}" alt="Image" class="img-fluid">
            </a>
            <i class="text-muted d-inline-block fa fa-calendar"></i>
            <span> {{ $artikel->waktu_artikel }} </span>
            <i class="d-inline-block ml-3 fa fa-user"></i>
            <span> {{ $artikel->pengguna->nama_pengguna }} </span>
            <h3><a href="{{ url('beranda/artikel/'.$artikel->slug_artikel) }}">  {{ $artikel->judul_artikel }} </a></h3>
          </div>
          @endforeach          
    
        </div>

        <div class="row mt-5 text-center">
          <div class="col-12">
            <p><a href="{{ url('beranda/artikel') }}" class="btn btn-primary btn-lg rounded-0">Lihat Semua Artikel</a></p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-info" data-aos="flip-right">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-12 col-md-12 mb-12 mb-lg-0 mb-3 text-center">
              <span class="fa fa-building-o fa-3x text-light mb-3"></span>
              <h3 class="text-light">FASILITAS</h3>
          </div>

          <div class="col-lg-3 col-md-auto my-1 text-center">
            <div class="media custom-media">
              <div class="media-body text-center m-3">
                <a href="{{ url('beranda/fasilitas-pemukiman') }}">
                  <span class="fa fa-home fa-lg text-light"></span>
                  <h5 class="text-light">PEMUKIMAN</h5>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-auto my-1 text-center">
            <div class="media custom-media">
              <div class="media-body text-center m-3">
                <a href="{{ url('beranda/fasilitas-pemerintahan') }}">
                  <span class="fa fa-bank fa-lg text-light"></span>
                  <h5 class="text-light">PEMERINTAHAN</h5>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-auto my-1 text-center">
            <div class="media custom-media">
              <div class="media-body text-center m-3">
                <a href="{{ url('beranda/fasilitas-peribadatan') }}">
                  <span class="fa fa-moon-o fa-lg text-light"></span>
                  <h5 class="text-light">PERIBADATAN</h5>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-auto my-1 text-center">
            <div class="media custom-media">
              <div class="media-body text-center m-3">
                <a href="{{ url('beranda/fasilitas-kesehatan') }}">
                  <span class="fa fa-hospital-o fa-lg text-light"></span>
                  <h5 class="text-light">KESEHATAN</h5>
                </a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-auto my-1 text-center">
            <div class="media custom-media">
              <div class="media-body text-center m-3">
                <a href="{{ url('beranda/fasilitas-ekonomi') }}">
                  <span class="fa fa-leaf fa-lg text-light"></span>
                  <h5 class="text-light">EKONOMI</h5>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-auto my-1 text-center">
            <div class="media custom-media">
              <div class="media-body text-center m-3">
                <a href="{{ url('beranda/fasilitas-prasarana') }}">
                  <span class="fa fa-wifi fa-lg text-light"></span>
                  <h5 class="text-light">PRA-SARANA</h5>
                </a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-auto my-1 text-center">
            <div class="media custom-media">
              <div class="media-body text-center m-3">
                <a href="{{ url('beranda/fasilitas-pendidikan') }}">
                  <span class="fa fa-book fa-lg text-light"></span>
                  <h5 class="text-light">PENDIDIKAN</h5>
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section" data-aos="zoom-in">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <a href="#"><h2 class="font-weight-bold text-black mb-5">KEGIATAN</h2></a>
          </div>
        </div>
        <div class="row mb-5">
          
          @foreach($daftar_kegiatan as $kegiatan)
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
            <a href="{{ url('beranda/kegiatan'.$kegiatan->slug_kegiatan) }}" class="d-block figure">
              <img src="{{ asset('assets-beranda/images/'.$kegiatan->poster_kegiatan) }}" alt="Image" class="img-fluid">
            </a>
            <span class="text-muted d-block mb-2"> {{ $kegiatan->waktu_kegiatan }} </span>
            <h3><a href="{{ url('beranda/kegiatan/'.$kegiatan->slug_kegiatan) }}"> {{ $kegiatan->nama_kegiatan }} </a></h3>
          </div>
          @endforeach

        </div>
        <div class="row mt-5 text-center">
          <div class="col-12">
            <p><a href="{{ url('beranda/kegiatan') }}" class="btn btn-primary btn-lg rounded-0">Lihat Semua Kegiatan</a></p>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer border-top" data-aos="fade-down">
      <div class="container">
        <div class="row pt-2 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> {{ $profil->nama }} 
            <br> SIDESKEL Development by. <strong> <a href="https://facebook.com/adnan.indrakasim" target="_blank">Adnan Kasim</a></strong>
            <br> and This template is made by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
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