<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ $profil->nama }} &mdash; Sistem Informasi Desa & Kelurahan</title>
    <meta name="description" content="{{ $profil->deskripsi }}">
    <meta name="keywords" content="Sistem Informasi Desa dan Kelurahan {{ $profil->nama }}">
    <meta name="author" content="{{ $profil->nama }}">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="{{ asset('assets-dashboard/images/'.$profil->logo) }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-beranda/css/style.css') }}">
    <script src="{{ asset('assets-dashboard/js/Chart.bundle.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <style>
      *{
        font-family: 'Montserrat', sans-serif;
      }
    </style>
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
            
            <div class="col-5 text-center">
              <a href="{{ url('/') }}">
                <img src="{{ asset('assets-dashboard/images/'.$profil->logo) }}" style="margin-top: -30px" width="45" class="d-none d-xl-inline-block">

                <img src="{{ asset('assets-dashboard/images/'.$profil->logo) }}" width="45" class="d-inline-block d-xl-none">

                <h5 class="ml-2 mt-2 site-logo text-white d-none d-xl-inline-block text-uppercase" style="text-align: left;">
                PEMERINTAH {{ $profil->nama }}
                <br>
                KECAMATAN LIMBOTO, GORONTALO
                </h5>
              </a>
            </div>

            <div class="col-7">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container-fluid">
                  <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-xl-block text-center">
                    <li class="has-children">
                      <a href="#"> <i class="fa fa-home"></i> TENTANG</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="{{ url('beranda/profil') }}"> <i class="fa fa-info"></i> PROFIL</a></li>
                        <li><a href="{{ url('beranda/tanaman-komoditas') }}"><i class="fa fa-leaf"></i> TANAMAN KOMODITAS</a></li>
                        <li><a href="{{ url('beranda/pelayanan') }}"><i class="fa fa-info-circle"></i> PELAYANAN</a></li>
                        <li><a href="{{ url('beranda/lembaga') }}"><i class="fa fa-bank"></i> LEMBAGA</a></li>
                        <li><a href="{{ url('beranda/dokumen') }}"><i class="fa fa-file"></i> DOKUMEN</a></li>
                        
                        <li class="has-children">
                          <a href="#"><i class="fa fa-building-o"></i> FASILITAS</a>
                          <ul class="dropdown arrow-top">
                            <li><a href="{{ url('beranda/fasilitas-pemukiman') }}"><i class="fa fa-bed"></i> PEMUKIMAN</a></li>
                            <li><a href="{{ url('beranda/fasilitas-pemerintahan') }}"><i class="fa fa-building"></i> PEMERINTAHAN</a></li>
                            <li><a href="{{ url('beranda/fasilitas-peribadatan') }}"><i class="fa fa-moon-o"></i> PERIBADATAN</a></li>
                            <li><a href="{{ url('beranda/fasilitas-kesehatan') }}"><i class="fa fa-heart"></i> KESEHATAN</a></li>
                            <li><a href="{{ url('beranda/fasilitas-ekonomi') }}"><i class="fa fa-dollar"></i> EKONOMI</a></li>
                            <li><a href="{{ url('beranda/fasilitas-prasarana') }}"><i class="fa fa-wifi"></i> PRA-SARANA</a></li>
                            <li><a href="{{ url('beranda/fasilitas-pendidikan') }}"><i class="fa fa-book"></i> PENDIDIKAN</a></li>
                          </ul>
                        </li>

                      </ul>
                    </li>
                    
                    <li class="has-children">
                      <a href="#"><i class="fa fa-money"></i> KEUANGAN</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="{{ url('beranda/belanja') }}"><i class="fa fa-credit-card"></i> BELANJA</a></li>
                        <li><a href="{{ url('beranda/pendapatan') }}"><i class="fa fa-dollar"></i> PENDAPATAN</a></li>
                      </ul>
                    </li>
                    <li class="has-children">
                      <a href="#"><i class="fa fa-users"></i> PENDUDUK</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="{{ url('beranda/penduduk-usia') }}"><i class="fa fa-calendar"></i> USIA</a></li>
                        <li><a href="{{ url('beranda/penduduk-pekerjaan') }}"><i class="fa fa-car"></i> PEKERJAAN</a></li>
                        <li><a href="{{ url('beranda/penduduk-pendidikan') }}"><i class="fa fa-graduation-cap"></i> PENDIDIKAN</a></li>
                        <li><a href="{{ url('beranda/penduduk-golongan-darah') }}"><i class="fa fa-tint"></i> GOL. DARAH</a></li>
                        <li><a href="{{ url('beranda/penduduk-menikah') }}"><i class="fa fa-female"></i><i class="fa fa-male"></i> MENIKAH</a></li>
                        <li><a href="{{ url('beranda/penduduk-agama') }}"><i class="fa fa-moon-o"></i> AGAMA</a></li>
                        <li><a href="{{ url('beranda/penduduk-jenis-kelamin') }}"> <i class="fa fa-male"></i> JENIS KELAMIN</a></li>
                      </ul>
                    </li>
                    <li><a href="{{ url('beranda/artikel') }}"><i class="fa fa-newspaper-o"></i> ARTIKEL</a></li>
                    <li><a href="{{ url('beranda/kegiatan') }}"><i class="fa fa-camera"></i> KEGIATAN</a></li>

@if(Session::has('pengguna'))
                    <li class="has-children">
                      <a href="#"><i class="fa fa-user"></i> {{ substr(Session::get('nama'), 0, 5) }} </a>
                      <ul class="dropdown arrow-top">
                        <li><a href="{{ url('beranda/dashboard') }}"><i class="fa fa-dashboard"></i> PROFIL</a></li>
                        <li><a href="{{ url('keluar') }}"><i class="fa fa-sign-out"></i> KELUAR</a></li>
                      </ul>
                    </li>
@else
                    <li><a href="{{ url('masuk') }}"><i class="fa fa-sign-in"></i> MASUK</a></li>
@endif
                  </ul>
                </div>
              </nav>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url({{ asset('assets-beranda/images/' . $pengaturan->gambar) }});" data-aos="fade-up" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center text-center justify-content-center">
          <div class="col-md-12">
            <span class="sub-text">Sistem informasi desa & kelurahan</span>
            <h1 class="text-uppercase"> {{ $profil->nama }} </h1>
            <span class="sub-text"> {{ $profil->alamat }} </span>
          </div>
        </div>
      </div>
    </div>  

    <div class="site-section border-bottom" data-aos="flip-left">
      <div class="container">
        
        <div class="row">
          <div class="col-12 text-center">
            <a href="{{ url('beranda/profil') }}"><h2 class="font-weight-bold text-black mb-5"><i class="fa fa-eye"></i><i class="fa fa-eye"></i> VISI MISI</h2></a>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 col-md-12 mb-3 mb-lg-0 text-center">
            <div class="media custom-media">
              <div class="media-body text-center">
                <img src="{{ asset('assets-beranda/images/ayah-kayubulan.png') }}" class="img img-responsive" width="300">
                <h4 class="mt-3 font-weight-bold">
                    HALID KADIR, S.IP
                </h4>
                <hr>
                <h4 >
                    LURAH KAYUBULAN
                </h4>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-12 mb-12 mb-lg-0 text-center">
            <div class="media custom-media">
              <div class="media-body text-justify font-weight-bold">
                  {!! $profil->visi_misi !!}
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section border bg-info" data-aos="zoom-out">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <a href="{{ url('beranda/penduduk-usia') }}">
              <h2 class="font-weight-bold text-black mb-5"> <i class="fa fa-users"></i> PENDUDUK</h2>
            </a>
          </div>
        </div>
        
        <div class="row">
                
                <div class="col-lg-6 col-md-12 p-2">
                <div class="card">
                    <div class="card-body">
                        <canvas id="pendudukPendidikan"></canvas>
                    </div>
                </div>
                </div>

                <div class="col-lg-6 col-md-12 p-2">
                <div class="card">
                    <div class="card-body">
                        <canvas id="pendudukUsia"></canvas>
                    </div>
                </div>
                </div>
                
                <script>
                      var ctx = document.getElementById( "pendudukPendidikan" );
                      ctx.height = 200;
                      var myChart = new Chart( ctx, {
                          type: 'bar',
                          data: {
                              labels: [ 
                              @foreach($daftar_pendidikan as $pendidikan)
                                  "{{ strtoupper($pendidikan->pendidikan_terakhir) }}",
                              @endforeach
                              ],
                              datasets: [
                                  {
                                      label: "PENDUDUK BERDASARKAN PENDIDIKAN TERAKHIR",
                                      data: [ 
                              @foreach($daftar_pendidikan as $pendidikan)
                                  " {{ $pendidikan->total }} ",
                              @endforeach             
                                          ],
                                      borderColor: "rgba(0, 194, 146, 0.9)",
                                      borderWidth: "0",
                                      backgroundColor: "rgba(0, 194, 146, 0.5)"
                                              }
                                          ]
                          },
                          options: {
                              scales: {
                                  yAxes: [ {
                                      ticks: {
                                          beginAtZero: true
                                      }
                                                  } ]
                              }
                          }
                      } );
                </script>
                
                <script>
                    var ctx = document.getElementById( "pendudukUsia" );
                    ctx.height = 200;
                    var myChart = new Chart( ctx, {
                        type: 'bar',
                        data: {
                            labels: ['0-5', '6-11', '12-16', '17-25', '26-35', '36-45', '46-55', '56-65', '65 Keatas']  ,
                            datasets: [
                                {
                                    label: "PENDUDUK BERDASARKAN USIA",
                                    data: [ 
                                        {{ $balita }}, {{ $kanak_kanak }}, {{ $remaja_awal }}, {{ $remaja_akhir }}, {{ $dewasa_awal }}, {{ $dewasa_akhir }}, {{ $lansia_awal }}, {{ $lansia_akhir }}, {{ $manula }} ],
                                    borderColor: "rgba(241, 196, 15,1.0)",
                                    borderWidth: "0",
                                    backgroundColor: "rgba(241, 196, 15,1.0)"
                                            }
                                        ]
                        },
                        options: {
                            scales: {
                                yAxes: [ {
                                    ticks: {
                                        beginAtZero: true
                                    }
                                                } ]
                            }
                        }
                    } );
                </script>

        </div>  
    
      </div>
    </div>

    <div class="site-section border" data-aos="zoom-out">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <a href="{{ url('beranda/artikel') }}">
              <h2 class="font-weight-bold text-black mb-5"> <i class="fa fa-newspaper-o"></i> ARTIKEL</h2>
            </a>
          </div>
        </div>
        
        <div class="row">
          
          @foreach($daftar_artikel as $artikel)
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
            <a href="{{ url('beranda/artikel/'.$artikel->slug_artikel) }}" class="d-block figure">
              <img src="{{ asset('assets-beranda/images/'.$artikel->gambar_artikel) }}" alt="Image" class="img-fluid">
            </a>
            <i class="text-muted d-inline-block fa fa-calendar"></i>
            <span> {{ $artikel->created_at->diffForHumans() }} </span>
            <i class="d-inline-block ml-3 fa fa-user"></i>
            <span> {{ $artikel->pengguna->nama_pengguna }} </span>
            <h3><a href="{{ url('beranda/artikel/'.$artikel->slug_artikel) }}">  {{ $artikel->judul_artikel }} </a></h3>
          </div>
          @endforeach          
    
        </div>

        <div class="row mt-2 text-center">
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
              <h3 class="text-light"> FASILITAS</h3>
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
      <div class="container" >
        <div class="row">
          <div class="col-12 text-center">
            <a href="{{ url('beranda/belanja') }}"><h2 class="font-weight-bold text-black mb-5"><i class="fa fa-money"></i> KEUANGAN</h2></a>
          </div>
        </div>
        <div class="row">
          
          <div class="col-lg-6 col-md-12 p-2 mb-lg-0 post-entry">
          <a href="{{ url('beranda/pendapatan/'. date('Y') ) }}">
                          <div class="card">
                            <div class="card-body bg-info" style="background-color:#5edfff">
                                    <div class="d-inline-block">
                                        <i class="fa fa-dollar fa-4x text-white"></i>
                                    </div>
                                    <div class="d-inline-block mx-2">
                                        <div class="text-left dib">
                                            <h2 class="text-white"> Rp. {{ number_format($total_pendapatan, 0, ',', '.') }},- </h2>
                                            <h3 class="text-white">TOTAL PENDAPATAN TAHUN {{ date('Y') }}</h3>
                                        </div>
                                    </div>
                            </div>
                        </div>
          </a>
          </div>

          <div class="col-lg-6 col-md-12 p-2 mb-lg-0 post-entry">
          <a href="{{ url('beranda/belanja/'. date('Y') ) }}">
                          <div class="card">
                            <div class="card-body" style="background-color:#7ecfc0">
                                    <div class="d-inline-block">
                                        <i class="fa fa-credit-card fa-4x text-white"></i>
                                    </div>
                                    <div class="d-inline-block mx-2">
                                        <div class="text-left dib">
                                            <h2 class="text-white">Rp. {{ number_format($total_belanja, 0, ',', '.') }},- </h2>
                                            <h3 class="text-white">TOTAL BELANJA TAHUN {{ date('Y') }}</h3>
                                        </div>
                                    </div>
                            </div>
                        </div>
          </a>
          </div>
          

        </div>
        
      </div>
    </div>

    <hr>

    <div class="site-section" data-aos="zoom-in">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <a href="{{ url('beranda/kegiatan') }}"><h2 class="font-weight-bold text-black mb-5"><i class="fa fa-camera"></i> KEGIATAN</h2></a>
          </div>
        </div>
        <div class="row mb-5">
          
          @foreach($daftar_kegiatan as $kegiatan)
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
            <a href="{{ url('beranda/kegiatan'.$kegiatan->slug_kegiatan) }}" class="d-block figure">
              <img src="{{ asset('assets-beranda/images/'.$kegiatan->poster_kegiatan) }}" alt="Image" class="img-fluid">
            </a>
            <span class="text-muted d-block mb-2"> <i class="fa fa-calendar"></i> {{ $kegiatan->created_at->diffForHumans() }} </span>
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
        <div class="row pt-2 text-left">
          <div class="col-md-6">
            <img src="{{ asset('assets-dashboard/images/'.$profil->logo) }}" width="100" class="my-2">
            <p>
            Alamat: {{ $profil->alamat }} <br>
            Telepon: {{ $profil->telepon }} <br>   
            Email: {{ $profil->email }} <br>   
            
            <br>
            Copyright &copy; <script>document.write(new Date().getFullYear());</script>  <strong class="font-weight-bold">{{ $profil->nama }}</strong>

            <br> SIDESKEL Dikembangkan oleh <strong class="font-weight-bold">TIM IT KKN-PPM UGM, UNG, UMGo 2019 </strong>
            <br> Didukung oleh <strong class="font-weight-bold">Dinas Komunikasi dan Informatika Kabupaten Gorontalo </strong>
            </p>
          </div>
          
          <div class="col-md-6">
            <h5>Lokasi </h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63833.414100565715!2d122.9484132327109!3d0.61513371305782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32792e74a1a437d1%3A0xf71f75fa36a24350!2sKayubulan%2C+Limboto%2C+Gorontalo!5e0!3m2!1sen!2sid!4v1563680141208!5m2!1sen!2sid" style="width:100%; height:300px;" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        </div>
      </div>
    </footer>
  
  </div>

  <script src="{{ asset('assets-beranda/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/aos.js') }}"></script>
  <script src="{{ asset('assets-beranda/js/main.js') }}"></script>

  </body>
</html>