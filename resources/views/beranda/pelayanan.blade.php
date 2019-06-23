@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-xl-0"><strong>PELAYANAN</strong></h2>
                        <div class="non-home p-5 bg-white">
                            <div class="clearfix">
                                <span class="float-left"> Total Data :
                                    <strong class="font-weight-bold d-inline-block mb-1"> {{ $daftar_pelayanan->count() }}  </strong>
                                </span>
                                <span class="float-right"> 
                                    Update Terakhir :
                                    <strong class="font-weight-bold d-inline-block mb-1 text-capitalize"> 
                                        {{ $update_terakhir->updated_at->diffForHumans() }}  
                                    </strong>
                                </span>
                            </div>
                            <?php $i=1 ?>
                            @foreach($daftar_pelayanan as $pelayanan)
                            <div class="card my-2">
                              <div class="card-body">
                                <h5 class="card-title pelayanan pelayanan-judul-{{ $i }}">{{ $i }}. {{ $pelayanan->nama }} </h5>
                                <div class="card-text pelayanan-keterangan-{{ $i }} d-none"> {!! $pelayanan->keterangan !!} </div>
                              </div>
                            </div>

<script>
    window.addEventListener("load", function(){
        $( ".pelayanan-judul-{{ $i }}" ).click(function() {
            $( ".pelayanan-keterangan-{{ $i++ }}" ).toggleClass( "d-none" )
        });
    });
</script>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop