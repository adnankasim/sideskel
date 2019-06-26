@extends('template')
@section('main-dashboard')
<!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-12">
                    <h5 class="font-weight-bold mb-2"> <i class="fa fa-users"></i> PRESENTASI PENDUDUK </h5>
                </div>

                <!-- Golongan Darah -->
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
                                    borderColor: "rgba(26, 188, 156,1.0)",
                                    borderWidth: "0",
                                    backgroundColor: "rgba(26, 188, 156,1.0)"
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

                <!-- Menikah -->
                <div class="col-lg-6 col-md-6">
                    <a href="{{ url('penduduk') }}">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="pendudukMenikah"></canvas>
                            </div>
                        </div>
                    </a>
                </div>
                <script>
                    var ctx = document.getElementById( "pendudukMenikah" );
                    ctx.height = 150;
                    var myChart = new Chart( ctx, {
                        type: 'bar',
                        data: {
                            labels: [ 
                            @foreach($daftar_menikah as $menikah)
                                "{{ strtoupper($menikah->status_menikah) }}",
                            @endforeach
                            ],
                            datasets: [
                                {
                                    label: "PENDUDUK BERDASARKAN STATUS MENIKAH",
                                    data: [ 
                            @foreach($daftar_menikah as $menikah)
                                " {{ $menikah->total }} ",
                            @endforeach             
                                        ],
                                    borderColor: "rgba(52, 152, 219,1.0)",
                                    borderWidth: "0",
                                    backgroundColor: "rgba(52, 152, 219,1.0)"
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

                <!-- Agama -->
                <div class="col-lg-6 col-md-6">
                    <a href="{{ url('penduduk') }}">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="pendudukAgama"></canvas>
                            </div>
                        </div>
                    </a>
                </div>
                <script>
                    var ctx = document.getElementById( "pendudukAgama" );
                    ctx.height = 150;
                    var myChart = new Chart( ctx, {
                        type: 'bar',
                        data: {
                            labels: [ 
                            @foreach($daftar_agama as $agama)
                                "{{ strtoupper($agama->agama) }}",
                            @endforeach
                            ],
                            datasets: [
                                {
                                    label: "PENDUDUK BERDASARKAN AGAMA",
                                    data: [ 
                            @foreach($daftar_agama as $agama)
                                " {{ $agama->total }} ",
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

                <!-- Jenis Kelamin -->
                <div class="col-lg-6 col-md-6">
                    <a href="{{ url('penduduk') }}">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="pendudukJk"></canvas>
                            </div>
                        </div>
                    </a>
                </div>
                <script>
                    var ctx = document.getElementById( "pendudukJk" );
                    ctx.height = 150;
                    var myChart = new Chart( ctx, {
                        type: 'bar',
                        data: {
                            labels: [ 
                            @foreach($daftar_jk as $jk)
                                "{{ strtoupper($jk->jenis_kelamin) }}",
                            @endforeach
                            ],
                            datasets: [
                                {
                                    label: "PENDUDUK BERDASARKAN JENIS KELAMIN",
                                    data: [ 
                            @foreach($daftar_jk as $jk)
                                " {{ $jk->total }} ",
                            @endforeach             
                                        ],
                                    borderColor: "rgba(230, 126, 34,1.0)",
                                    borderWidth: "0",
                                    backgroundColor: "rgba(230, 126, 34,1.0)"
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

                <!-- USIA -->
                <div class="col-lg-12 col-md-12">
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

                <!-- PEKERJAAN -->
                <div class="col-lg-12 col-md-12">
                    <a href="{{ url('penduduk') }}">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="pendudukPekerjaan"></canvas>
                            </div>
                        </div>
                    </a>
                </div>
                <script>
                    var ctx = document.getElementById( "pendudukPekerjaan" );
                    ctx.height = 150;
                    var myChart = new Chart( ctx, {
                        type: 'bar',
                        data: {
                            labels: [ 
                            @foreach($daftar_pekerjaan as $pekerjaan)
                                "{{ strtoupper($pekerjaan->pekerjaan) }}",
                            @endforeach
                            ],
                            datasets: [
                                {
                                    label: "PENDUDUK BERDASARKAN PEKERJAAN",
                                    data: [ 
                            @foreach($daftar_pekerjaan as $pekerjaan)
                                " {{ $pekerjaan->total }} ",
                            @endforeach             
                                        ],
                                    borderColor: "rgba(231, 76, 60,1.0)",
                                    borderWidth: "0",
                                    backgroundColor: "rgba(231, 76, 60,1.0)"
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

                <!-- PENDIDIKAN -->
                <div class="col-lg-12 col-md-12">
                    <a href="{{ url('penduduk') }}">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="pendudukPendidikan"></canvas>
                            </div>
                        </div>
                    </a>
                </div>
                <script>
                    var ctx = document.getElementById( "pendudukPendidikan" );
                    ctx.height = 150;
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


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
        
        @include('footer')
        
    </div>
    <!-- /#right-panel -->
@stop