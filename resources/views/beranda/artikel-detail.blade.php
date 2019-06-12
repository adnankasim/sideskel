@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="non-home p-5 bg-white">
                            <a href="{{ url('beranda/artikel/'.$artikel->slug_artikel) }}" class="d-block figure text-center">
                                <h2 class="mb-4">{{ $artikel->judul_artikel }} </h2>
                                <img src="{{ asset('assets-beranda/images/'.$artikel->gambar_artikel) }}" class="img-fluid">
                            </a>
                            <div class="text-center m-3">
                                <i class="text-muted d-inline-block fa fa-calendar"></i>
                                <span>{{ $artikel->waktu_artikel }}</span>
                                <i class="d-inline-block ml-3 fa fa-user"></i>
                                <span>{{ $artikel->pengguna->nama_pangguna }}</span>
                            </div>
                                {!! $artikel->isi_artikel !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
@stop