@extends('beranda/template')
@section('main-beranda')
<div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-xl-0"><strong>PENDUDUK</strong></h2>
                        <h3 class="text-center">BERDASARKAN GOLONGAN DARAH</h3>

                        <div class="non-home p-5 bg-white">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <td class="font-weight-bold">NO</td>
                                        <td class="font-weight-bold">GOLONGAN DARAH</td>
                                        <td class="font-weight-bold">JUMLAH (JIWA)</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; $total=0; ?>
                                    @foreach($daftar_darah as $darah)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td class="text-uppercase">{{ $darah->golongan_darah }}</td>
                                        <td>{{ $darah->total }}</td>
                                    </tr>
                                    <?php $total = $total+$darah->total ?>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="font-weight-bold" colspan="2">TOTAL (JIWA)</td>
                                        <td class="font-weight-bold">{{ $total }}</td>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
@stop