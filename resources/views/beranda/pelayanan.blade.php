@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-xl-0"><strong>PELAYANAN</strong></h2>
                        <div class="non-home p-5 bg-white">

                            <?php $i=1 ?>
                            @foreach($daftar_pelayanan as $pelayanan)
                            <div class="card my-2">
                              <div class="card-body">
                                <h5 class="card-title">{{ $i++ }}. {{ $pelayanan->nama }} </h5>
                                <div class="card-text"> {!! $pelayanan->keterangan !!} </div>
                              </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop