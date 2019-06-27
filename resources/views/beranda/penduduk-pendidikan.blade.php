@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-md-2 mt-xl-0"><strong>PENDUDUK</strong></h2>
                        <h3 class="text-center">BERDASARKAN PENDIDIKAN TERAKHIR</h3>

                        <div class="non-home p-3 bg-white mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <canvas id="pendudukPendidikan"></canvas>
                                </div>
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

                        <div class="non-home p-5 bg-white">
                            <span class="float-right"> 
                                Update Terakhir :
                                <strong class="font-weight-bold d-inline-block mb-1 text-capitalize"> 
                                    {{ $update_terakhir->updated_at->diffForHumans() }}  
                                </strong>
                            </span>
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">PENDIDIKAN</td>
                                        <td class="font-weight-bold">JUMLAH (JIWA)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; $total=0 ?>
                                    @foreach($daftar_pendidikan as $pendidikan)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="text-uppercase">{{ $pendidikan->pendidikan_terakhir }}</td>
                                        <td>{{ number_format($pendidikan->total, 0, ',', '.') }}</td>
                                    </tr>
                                    <?php $total = $total+$pendidikan->total ?>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="font-weight-bold" colspan="2">TOTAL (JIWA)</td>
                                        <td class="font-weight-bold">{{ number_format($total, 0, ',', '.') }}</td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
@stop