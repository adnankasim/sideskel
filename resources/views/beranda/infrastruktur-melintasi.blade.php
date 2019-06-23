@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-5 mt-5 mt-xl-0"><strong>INFRASTRUKTUR MELINTASI</strong>
                        </h2>
                        <div class="non-home p-5 bg-white">
                            <span class="float-left"> Total Data :
                                <strong class="font-weight-bold d-inline-block mb-1"> {{$daftar_infra_melintasi->count() }}  </strong>
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
                                        <td class="font-weight-bold">PANJANG</td>
                                        <td class="font-weight-bold">LEBAR</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($daftar_infra_melintasi as $infra)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $infra->uraian_infra_melintasi }}</td>
                                        <td>{{ $infra->panjang_infra_melintasi }}</td>
                                        <td>{{ $infra->lebar_infra_melintasi }}</td>
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