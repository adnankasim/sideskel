@extends('template')
@section('main-dashboard')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Content -->
        <div class="content" style="">
            <!-- Widgets  -->
            <div class="row">
                
                <div class="col-12">
                    <h5 class="font-weight-bold mb-2"> <i class="fa fa-users"></i> PENDUDUK </h5>
                </div>

                <div class="col-lg-6 col-md-6">
                    <a href="{{ url('penduduk') }}">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="pendudukUsia"></canvas>
                            </div>
                        </div>
                    </a>
                </div>
                <script>
                    var ctx = document.getElementById( "pendudukUsia" );
                    ctx.height = 150;
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

                <div class="col-lg-6 col-md-6">
                    <a href="{{ url('penduduk') }}">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="pendudukGolonganDarah"></canvas>
                            </div>
                        </div>
                    </a>
                </div>
                <script>
                    var ctx = document.getElementById( "pendudukGolonganDarah" );
                    ctx.height = 150;
                    var myChart = new Chart( ctx, {
                        type: 'bar',
                        data: {
                            labels: [ 
                            @foreach($daftar_darah as $darah)
                                "{{ strtoupper($darah->golongan_darah) }}",
                            @endforeach
                            ],
                            datasets: [
                                {
                                    label: "PENDUDUK BERDASARKAN GOLONGAN DARAH",
                                    data: [ 
                            @foreach($daftar_darah as $darah)
                                " {{ $darah->total }} ",
                            @endforeach             
                                        ],
                                    borderColor: "rgba(155, 89, 182,1.0)",
                                    borderWidth: "0",
                                    backgroundColor: "rgba(155, 89, 182,1.0)"
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

                <div class="col-12">
                    <h5 class="font-weight-bold mb-2"> <i class="fa fa-money"></i> KEUANGAN </h5>
                </div>

                <div class="col-lg-6 col-md-6">
                    <a href="{{ url('belanja') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-1">
                                        <i class="fa fa-credit-card"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>TOTAL Rp. {{ number_format($total_belanja, 0, ',', '.') }},- </div>
                                            <div class="stat-heading">BELANJA TAHUN {{ date('Y') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6">
                    <a href="{{ url('pendapatan') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-2">
                                        <i class="fa fa-leaf"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>TOTAL  Rp. {{ number_format($total_pendapatan, 0, ',', '.') }},- </div>
                                            <div class="stat-heading">PENDAPATAN TAHUN {{ date('Y') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12">
                    <h5 class="font-weight-bold mb-2"> <i class="fa fa-home"></i> TENTANG &nbsp; & &nbsp; <i class="fa fa-bank"></i> PEMERINTAHAN</h5>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('batas') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-1">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_batas }} BATAS</div>
                                            <div class="stat-heading">WILAYAH</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('tanaman-komoditas') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-2">
                                        <i class="fa fa-leaf"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_komoditas }} TANAMAN</div>
                                            <div class="stat-heading">KOMODITAS</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('orbitasi') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-3">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_orbitasi }} </div>
                                            <div class="stat-heading">ORBITASI</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('tipologi') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-4">
                                        <i class="fa fa-pagelines"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_tipologi }} </div>
                                            <div class="stat-heading">TIPOLOGI</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('iklim') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-5">
                                        <i class="fa fa-cloud"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_iklim }} </div>
                                            <div class="stat-heading">IKLIM</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('kesuburan-tanah') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-6">
                                        <i class="fa fa-square"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_kesuburan_tanah }} KESUBURAN</div>
                                            <div class="stat-heading">TANAH</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('penggunaan-tanah') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-1">
                                        <i class="fa fa-book"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_penggunaan_tanah }} PENGGUNAAN</div>
                                            <div class="stat-heading">TANAH</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('infrastruktur-melintasi') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-2">
                                        <i class="fa fa-binoculars"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_infra_melintasi }} INFRASTRUKTUR</div>
                                            <div class="stat-heading">MELINTASI</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('pemerintahan') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-3">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_pemerintahan }} PEJABAT</div>
                                            <div class="stat-heading">PEMERINTAHAN</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12">
                    <h5 class="font-weight-bold mb-2"> <i class="fa fa-binoculars"></i> FASILITAS, &nbsp; <i class="fa fa-newspaper-o"></i> ARTIKEL &nbsp; & &nbsp; <i class="fa fa-feed"></i> KEGIATAN</h5>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('fasilitas-pemukiman') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-4">
                                        <i class="fa fa-bed"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_fasilitas_pemukiman }} FASILITAS</div>
                                            <div class="stat-heading">PEMUKIMAN</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('fasilitas-pemerintahan') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-5">
                                        <i class="fa fa-building"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_fasilitas_pemerintahan }} FASILITAS</div>
                                            <div class="stat-heading">PEMERINTAHAN</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('fasilitas-peribadatan') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-6">
                                        <i class="fa fa-moon-o"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_fasilitas_peribadatan }} FASILITAS</div>
                                            <div class="stat-heading">PERIBADATAN</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('fasilitas-kesehatan') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-1">
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_fasilitas_kesehatan }} FASILITAS</div>
                                            <div class="stat-heading">KESEHATAN</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('fasilitas-ekonomi') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-2">
                                        <i class="fa fa-dollar"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_fasilitas_ekonomi }} FASILITAS</div>
                                            <div class="stat-heading">EKONOMI</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('fasilitas-prasarana') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-3">
                                        <i class="fa fa-wifi"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_fasilitas_prasarana }} FASILITAS</div>
                                            <div class="stat-heading">PRASARANA</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('fasilitas-pendidikan') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-4">
                                        <i class="fa fa-book"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_fasilitas_pendidikan }} FASILITAS</div>
                                            <div class="stat-heading">PENDIDIKAN</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('artikel') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-5">
                                        <i class="fa fa-newspaper-o"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_artikel }} POSTINGAN</div>
                                            <div class="stat-heading">ARTIKEL</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4">
                    <a href="{{ url('kegiatan') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon flat-color-6">
                                        <i class="fa fa-feed"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div>{{ $total_kegiatan }} POSTINGAN</div>
                                            <div class="stat-heading">KEGIATAN</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12">
                    <h5 class="font-weight-bold mb-2"> <i class="fa fa-file-pdf-o"></i> DOKUMEN, &nbsp; <i class="fa fa-info-circle"></i> PELAYANAN, &nbsp; <i class="fa fa-user"></i> PENGGUNA, &nbsp; & &nbsp; <i class="fa fa-user-secret"></i> ADMIN </h5>
                </div>

                <div class="col-lg-3 col-md-3">
                    <a href="{{ url('dokumen') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="fa fa-file-pdf-o"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div> {{ $total_dokumen }} </div>
                                            <div class="stat-heading">DOKUMEN</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3">
                    <a href="{{ url('pelayanan') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="fa fa-info-circle"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div> {{ $total_pelayanan }} </div>
                                            <div class="stat-heading">PELAYANAN</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3">
                    <a href="{{ url('pengguna') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-5">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"> {{ $total_pengguna }} </div>
                                            <div class="stat-heading">PENGGUNA</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-3">
                    <a href="{{ url('admin') }}">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-6">
                                        <i class="fa fa-user-secret"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"> {{ $total_admin }} </div>
                                            <div class="stat-heading">ADMIN</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                
                
            </div>
            <!-- /Widgets -->
            <div class="clearfix"></div>
        </div>
        <!-- /.content -->

        <div class="clearfix"></div>
        
        @include('footer')

    </div>
@stop