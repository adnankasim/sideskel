@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-md-2 mt-xl-0"><strong>BATAS WILAYAH</strong></h2>

                        <div class="non-home p-5 bg-white">
                            <table class="table table-hover table-striped">
                                <span class="float-left"> 
                                    Total Data :
                                    <strong class="font-weight-bold d-inline-block mb-1"> 
                                        {{ $daftar_batas->count() }}  
                                    </strong>
                                </span>
                                <span class="float-right">
                                    Update Terakhir : 
                                    <strong class="font-weight-bold d-inline-block mb-1 text-capitalize">
                                    {{ $update_terakhir->updated_at->diffForHumans() }}
                                    </strong>
                                </span>
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">MATA ANGIN</td>
                                        <td class="font-weight-bold">URAIAN</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?>
                                    @foreach($daftar_batas as $batas)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $batas->mata_angin }}</td>
                                        <td>{{ $batas->uraian }}</td>
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