@extends('beranda/template')
@section('main-beranda')
<div class="site-section border" data-aos="zoom-out">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="font-weight-bold text-black mb-5 mt-5 mt-xl-0">KEGIATAN</h3>
                        {!! Form::open(['url' => 'beranda/kegiatan/cari', 'method' => 'get', 'class' => 'bg-white']) !!}
                            <div class="input-group mb-3">
                                {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Lorem Ipsum Dolor Sit Amet']) !!}
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="submit"><span
                                            class="fa fa-search fa-lg"></span></button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="row mb-5">
                    @foreach($daftar_kegiatan as $kegiatan)                    
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                        <a href="{{ url('beranda/kegiatan/'.$kegiatan->slug_kegiatan) }}" class="d-block figure">
                            <img src="{{ asset('assets-beranda/images/'.$kegiatan->poster_kegiatan) }}" class="img-fluid">
                        </a>
                        <i class="text-muted d-inline-block fa fa-calendar"></i>
                        <span> {{ $kegiatan->created_at->diffForHumans() }} </span>
                        
                        <h3><a href="{{ url('beranda/kegiatan/'.$kegiatan->slug_kegiatan) }}"> {{ $kegiatan->nama_kegiatan }} </a></h3>
                    </div>
                    @endforeach
                </div>

                <div class="row">
                    {{ $daftar_kegiatan->links() }}
                </div>
            </div>
        </div>
@stop