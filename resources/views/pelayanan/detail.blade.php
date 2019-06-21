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
                                <strong class="card-title">PELAYANAN</strong>
                                <a href="{{ url('pelayanan/' . $pelayanan->id . '/edit') }}" class="btn btn-secondary btn-sm float-right mx-1"> EDIT </a>
                                <a href="{{ url('pelayanan') }}" class="btn btn-info btn-sm float-right mx-1"> KEMBALI </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table">
                                    <tr>
                                        <th class="text-center">Nama</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> {{ $pelayanan->nama }} </td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <th class="text-center">Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td class="p-3"> {!! $pelayanan->keterangan !!} </td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <th class="text-center">Waktu Posting</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ $pelayanan->created_at }} WITA</td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <th class="text-center">Terakhir Update</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">{{ $pelayanan->updated_at }} WITA</td>
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