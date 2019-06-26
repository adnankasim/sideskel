@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-md-2 mt-xl-0"><strong>PENDAPATAN TAHUN
                                2018</strong></h2>

                        <div class="non-home p-5 bg-white">
                            <span class="float-left"> Total Data :
                                    <strong class="font-weight-bold d-inline-block mb-1"> {{ $daftar_pendapatan->count() }}  </strong>
                                </span>
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
                                        <td class="font-weight-bold">URAIAN</td>
                                        <td class="font-weight-bold">NOMINAL (Rp.)</td>
                                        <td class="font-weight-bold">TAHUN</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($daftar_pendapatan as $pendapatan)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $pendapatan->uraian_pendapatan }}</td>
                                        <td>{{ number_format($pendapatan->nominal_pendapatan, 0, ',', '.') }}</td>
                                        <td>{{ $pendapatan->tahun }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2">TOTAL</td>
                                        <td colspan="2" class="font-weight-bold">Rp. {{ number_format($total, 0, ',', '.') }},-</td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
@stop