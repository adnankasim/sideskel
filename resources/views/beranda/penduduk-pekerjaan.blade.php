@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-md-2 mt-xl-0"><strong>PENDUDUK</strong></h2>
                        <h3 class="text-center">BERDASARKAN PEKERJAAN</h3>

                        <div class="non-home p-3 bg-white mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <canvas id="pendudukPekerjaan"></canvas>
                                </div>
                        </div>
                        <script>
                    var ctx = document.getElementById( "pendudukPekerjaan" );
                    ctx.height = 150;
                    var myChart = new Chart( ctx, {
                        type: 'pie',
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
                                    backgroundColor: [
                                        "chocolate",
                                        "#E74C3C",
                                        "#27AE60",
                                        "maroon",
                                        "gray",
                                        "#3498DB",
                                        "#F1C40F",
                                        "teal",
                                        "#8E44AD",
                                        "#9B59B6",

                                        "#2980B9",
                                        "#D35400",
                                        "gray",
                                        "pink",
                                        "darkblue",
                                        "green",
                                        "#E67E22",
                                        "coral",
                                        "blue",
                                        "#F0F8FF",
                                        
                                        "#FAEBD7",
                                        "#00FFFF",
                                        "#7FFFD4",
                                        "#8A2BE2",
                                        "#DEB887",
                                        "#5F9EA0",
                                        "#7FFF00",
                                        "#6495ED",
                                        "#DC143C",
                                        "#00FFFF",
                                        
                                        "#008B8B",
                                        "#B8860B",
                                        "#006400",
                                        "#9932CC",
                                        "#E9967A",
                                        "#8FBC8F",
                                        "#483D8B",
                                        "#9400D3",
                                        "#FF1493",
                                        "#1E90FF",

                                        "#B22222",
                                        "#FFFAF0",
                                        "#228B22",
                                        "#FFD700",
                                        "#008000",
                                        "#FF69B4",
                                        "#CD5C5C",
                                        "#4B0082",
                                        "#7CFC00",
                                        "#F08080",
                                    ],
                                            }
                                        ]
                        },
                        options: {
                            responsive: true
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
                            <table class="table table-hover table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">PEKERJAAN</td>
                                        <td class="font-weight-bold">JUMLAH (JIWA)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; $total=0 ?>
                                    @foreach($daftar_pekerjaan as $pekerjaan)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="text-uppercase">{{ $pekerjaan->pekerjaan }}</td>
                                        <td>{{ number_format($pekerjaan->total, 0, ',', '.') }}</td>
                                    </tr>
                                    <?php $total = $total+$pekerjaan->total ?>
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