@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-md-2 mt-xl-0"><strong>LEMBAGA</strong></h2>
                        <div class="non-home p-5 bg-white">
                            <div class="clearfix">
                                <span class="float-left"> Total Data :
                                <strong class="font-weight-bold d-inline-block mb-1"> {{$daftar_lembaga->count() }}  </strong>
                            </span>
                            <span class="float-right"> 
                                Update Terakhir :
                                <strong class="font-weight-bold d-inline-block mb-1 text-capitalize"> 
                                    {{ $update_terakhir->updated_at->diffForHumans() }}  
                                </strong>
                            </span>
                            </div>
                            <div class="row"> 
                            @foreach($daftar_lembaga as $lembaga)
                            <a href="{{ url('beranda/lembaga/'. $lembaga->id ) }}">
                            <div class="col-12 text-center m-3">
                                <img src="{{ asset('assets-dashboard/images/'.$lembaga->logo) }}" class="img img-rounded" width="200">
                                <h5 class="text-center pt-4 font-weight-bold">{{ $lembaga->nama }}</h5>
                            </div>
                            </a>
                            @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop