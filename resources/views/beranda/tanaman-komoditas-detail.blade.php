@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-5 mt-5 mt-xl-0"><strong>TANAMAN KOMODITAS TAHUN {{ Request::segment(3) }}</strong></h2>
                        
                        <div class="non-home p-5 bg-white">
                            <span class="float-left"> Total Data :
                                <strong class="font-weight-bold d-inline-block mb-1"> {{$daftar_komoditas->count() }}  </strong>
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
                                        <td class="font-weight-bold">LUAS (HA)</td>
                                        <td class="font-weight-bold">PRODUKSI (Ton/HA)</td>
                                        <td class="font-weight-bold">TAHUN</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($daftar_komoditas as $komoditas)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $komoditas->uraian_tanaman_komoditas }}</td>
                                        <td>{{ $komoditas->luas_tanaman_komoditas }}</td>
                                        <td>{{ $komoditas->produksi_per_ha }}</td>
                                        <td>{{ $komoditas->tahun }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
@stop