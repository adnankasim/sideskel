@extends('beranda/template')
@section('main-beranda')
<div class="site-section border" data-aos="zoom-out">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3 class="font-weight-bold text-black mb-3 mt-5 mt-xl-0">ARTIKEL</h3>
                        {!! Form::open(['url' => 'beranda/artikel/cari', 'method' => 'get', 'class' => 'bg-white']) !!}
                            <div class="input-group mb-3">
                                {!! Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Lorem Ipsum Dolor Sit Amet']) !!}
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="submit"><span class="fa fa-search fa-lg"></span></button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="row mb-5">
                    @foreach($daftar_artikel as $artikel)
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 post-entry">
                        <a href="{{ url('beranda/artikel/'.$artikel->slug_artikel) }}" class="d-block figure">
                            <img src="{{ asset('assets-beranda/images/'.$artikel->gambar_artikel) }}" class="img-fluid">
                        </a>
                        <i class="text-muted d-inline-block fa fa-calendar"></i>
                        <span>{{ $artikel->waktu_artikel }}</span>
                        <i class="d-inline-block ml-3 fa fa-user"></i>
                        <span>{{ $artikel->pengguna->nama_pengguna }}</span>
                        <h3><a href="{{ url('beranda/artikel/'.$artikel->slug_artikel) }}">{{ $artikel->judul_artikel }} </a></h3>
                    </div>
                    @endforeach
                </div>
        
                <div class="row">
                    {{ $daftar_artikel->links() }}
                </div>

            </div>
        </div>
@stop