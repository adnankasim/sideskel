@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="non-home p-5 bg-white">
                            <a href="{{ url('beranda/kegiatan/'.$kegiatan->slug_kegiatan) }}" class="d-block figure text-center">
                                <h2 class="mb-4"> {{ $kegiatan->nama_kegiatan }} </h2>
                                <img src="{{ asset('assets-dashboard/images/'.$kegiatan->poster_kegiatan) }}" class="img-fluid">
                            </a>
                            <div class="text-center m-3">
                                <i class="text-muted d-inline-block fa fa-calendar"></i>
                                <span>{{ $kegiatan->created_at->diffForHumans() }}</span>
                            </div>
                                {!! $kegiatan->deskripsi_kegiatan !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
@stop