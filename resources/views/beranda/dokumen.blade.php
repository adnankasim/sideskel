@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-md-2 mt-xl-0"><strong>DOKUMEN</strong></h2>

                        <div class="non-home p-5 bg-white">
                                <span class="float-left"> Total Data :
                                    <strong class="font-weight-bold d-inline-block mb-1"> {{ $daftar_dokumen->total() }}  </strong>
                                </span>
                                <span class="float-right"> 
                                    Update Terakhir :
                                    <strong class="font-weight-bold d-inline-block mb-1 text-capitalize"> 
                                        {{ $update_terakhir->updated_at->diffForHumans() }}  
                                    </strong>
                                </span>
                            <table class="table table-hover table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">FILE</td>
                                        <td class="font-weight-bold">Keterangan</td>
                                        <td class="font-weight-bold">Waktu Upload</td>
                                        <td class="font-weight-bold">Update Terakhir</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($daftar_dokumen as $dokumen)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td> <a href="{{ asset('assets-beranda/dokumen/'.$dokumen->file) }}" class="text-black"> {{ $dokumen->file }} </a> </td>
                                        <td>{{ $dokumen->keterangan }}</td>
                                        <td>{{ $dokumen->created_at->diffForHumans() }}</td>
                                        <td>{{ $dokumen->updated_at->diffForHumans() }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="row ml-1">
                                {{ $daftar_dokumen->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop