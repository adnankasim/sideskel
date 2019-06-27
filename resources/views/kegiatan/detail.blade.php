@extends('template')
@section('main-dashboard')
<!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="fa fa-feed"></i>&nbsp; KEGIATAN</strong>
                                <a href="{{ url('kegiatan/' . $kegiatan->id . '/edit') }}" class="btn btn-success btn-sm float-right mx-1">  <i class="fa fa-edit fa-lg"></i> </a>
                                <a href="{{ url('kegiatan') }}" class="btn btn-info btn-sm float-right mx-1"> <i class="fa fa-arrow-left fa-lg"></i></a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table">
                                    <tr>
                                        <th class="text-center">Poster</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> <img src="{{ asset('assets-dashboard/images/' . $kegiatan->poster_kegiatan) }}" width="300"> </td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <td>Nama</td>
                                        <th> {{ $kegiatan->nama_kegiatan }} </th>
                                    </tr>
                                    <tr>
                                        <td>Slug</td>
                                        <th> {{ $kegiatan->slug_kegiatan }} </th>
                                    </tr>
                                    <tr>
                                        <td>Waktu Posting</td>
                                        <th> {{ $kegiatan->created_at }} WITA</th>
                                    </tr>
                                    <tr>
                                        <td>Terakhir Update</td>
                                        <th> {{ $kegiatan->updated_at }} WITA</th>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr class="text-center">
                                        <th>Deskripsi</th>
                                    </tr>
                                    <tr>
                                        <th> {!! $kegiatan->deskripsi_kegiatan !!} </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
        
        @include('footer')
        
    </div>
    <!-- /#right-panel -->
@stop