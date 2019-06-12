@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-5 mt-5 mt-xl-0"><strong>TANAMAN KOMODITAS</strong></h2>
                        <h3 class="text-center"> <span class="fa fa-calendar"></span> Tahun Anggaran</h3>
                        
                        <div class="site-section" data-aos="flip-right">
                            <div class="container">
                                <div class="row">

                                    @foreach($daftar_tahun as $tahun)            
                                    <div class="col-lg-3 col-md-auto my-1 text-center border">
                                        <div class="media custom-media">
                                            <div class="media-body text-center m-3">
                                                <a href="{{ url('beranda/tanaman-komoditas/'.$tahun) }}">
                                                    <span class="fa fa-calendar fa-lg text-black"></span>
                                                    <h4 class="text-black">{{ $tahun }}</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@stop