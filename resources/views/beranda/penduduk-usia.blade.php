@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-md-2 mt-xl-0"><strong>PENDUDUK</strong></h2>
                        <h3 class="text-center">BERDASARKAN USIA</h3>

                        <div class="non-home p-3 bg-white mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <canvas id="pendudukUsia"></canvas>
                                </div>
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
                                        <td class="font-weight-bold">URAIAN</td>
                                        <td class="font-weight-bold">USIA (TAHUN)</td>
                                        <td class="font-weight-bold">TANGGAL KELAHIRAN</td>
                                        <td class="font-weight-bold">JUMLAH (JIWA)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bawah Lima Tahun</td>
                                        <td>0 - 5</td>
                                        <td>Diatas {{ $enam_tahun }} s/d {{ $nol_tahun }}</td>
                                        <td>{{ number_format($balita, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kanak-Kanak</td>
                                        <td>6 - 11</td>
                                        <td>Diatas {{ $duabelas_tahun }} s/d {{ $enam_tahun }}</td>
                                        <td>{{ number_format($kanak_kanak, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Remaja Awal</td>
                                        <td>12 - 16</td>
                                        <td>Diatas {{ $tujuhbelas_tahun }} s/d {{ $duabelas_tahun }}</td>
                                        <td>{{ number_format($remaja_awal, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Remaja Akhir</td>
                                        <td>17 - 25</td>
                                        <td>Diatas {{ $duapuluhenam_tahun }} s/d {{ $tujuhbelas_tahun }}</td>
                                        <td>{{ number_format($remaja_akhir, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Dewasa Awal</td>
                                        <td>26 - 35</td>
                                        <td>Diatas {{ $tigapuluhenam_tahun }} s/d {{ $duapuluhenam_tahun }}</td>
                                        <td>{{ number_format($dewasa_awal, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Dewasa Akhir</td>
                                        <td>36 - 45</td>
                                        <td>Diatas {{ $empatpuluhenam_tahun }} s/d {{ $tigapuluhenam_tahun }}</td>
                                        <td>{{ number_format($dewasa_akhir, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lanjut Usia Awal</td>
                                        <td>46 - 55</td>
                                        <td>Diatas {{ $limapuluhenam_tahun }} s/d {{ $empatpuluhenam_tahun }}</td>
                                        <td>{{ number_format($lansia_awal, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lanjut Usia Akhir</td>
                                        <td>56 - 65</td>
                                        <td>Diatas {{ $enampuluhenam_tahun }} s/d {{ $limapuluhenam_tahun }}</td>
                                        <td>{{ number_format($lansia_akhir, 0, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Manusia Usia Lanjut</td>
                                        <td>65 Keatas</td>
                                        <td>Kurang dari atau sama dengan {{ $enampuluhenam_tahun }} </td>
                                        <td>{{ number_format($manula, 0, ',', '.') }}</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3" class="font-weight-bold">Total (Jiwa)</td>
                                        <td class="font-weight-bold"> {{ number_format($manula+$lansia_akhir+$lansia_awal+$dewasa_akhir+$dewasa_awal+$remaja_akhir+$remaja_awal+$balita+$kanak_kanak, 0, ',', '.') }} </td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
@stop