@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="non-home p-5 bg-white text-center">
                            <h2 class="mb-4 text-center">{{ $lembaga->nama }} </h2>
                                <img src="{{ asset('assets-dashboard/images/'.$lembaga->logo) }}" class="img-fluid">
                            <div class="text-center m-3">
                                <span class="text-muted d-inline-block"> Update Terakhir</span>
                                <span>{{ $update_terakhir }}</span>
                            </div>
                                {!! $lembaga->deskripsi !!}
                        </div>

                        <h4 class="text-center d-block bg-white ">Anggota Lembaga</h4>
                    <div class="row">
                        @foreach($lembaga->anggotaLembaga as $anggota)
                        <div class="non-home p-3 bg-white text-center my-2 d-inline-block col-xs-12 col-md-4">
                            <img src="{{ asset('assets-dashboard/images/'.$anggota->foto) }}" class="img-fluid img-responsive" width="200">
                            <div class="text-center m-3">
                                <h5>{{ $anggota->nama }}</h5> 
                                <hr>
                                <h6>{{ $anggota->jabatan }}</h6>
                            </div>
                        </div>
                        @endforeach
                    </div>                        

                    </div>
                </div>
            </div>
        </div>
@stop