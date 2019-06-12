@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-5 mt-5 mt-xl-0"><strong>FASILITAS PEMUKIMAN</strong></h2>
                        <div class="non-home p-5 bg-white">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">URAIAN</td>
                                        <td class="font-weight-bold">JUMLAH</td>
                                        <td class="font-weight-bold">PENGGUNA</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1 ?>
                                    @foreach($daftar_fasilitas_pemukiman as $pemukiman)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $pemukiman->uraian_fasilitas_pemukiman }}</td>
                                        <td>{{ $pemukiman->jumlah_fasilitas_pemukiman }}</td>
                                        <td>{{ $pemukiman->pengguna_fasilitas_pemukiman }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop