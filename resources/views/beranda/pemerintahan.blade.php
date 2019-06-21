@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-5 mt-5 mt-xl-0"><strong>PEMERINTAHAN</strong></h2>
                        <div class="non-home p-5 bg-white">
                            
                            <div class="row"> 
                            @foreach($daftar_pemerintahan as $pemerintahan)
                            <div class="col-4 text-center">
                                <img src="{{ asset('assets-dashboard/images/'.$pemerintahan->foto_pemerintahan) }}" class="img img-rounded" width="300">
                                <h5 class="text-center pt-4 font-weight-bold">{{ $pemerintahan->nama_pemerintahan }}</h5>
                                <hr>
                                <h6 class="text-center mb-5">{{ $pemerintahan->jabatan_pemerintahan }}</h6>
                            </div>
                            @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop