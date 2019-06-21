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
                                <strong class="card-title">ARTIKEL</strong>
                                <a href="{{ url('artikel/' . $artikel->id . '/edit') }}" class="btn btn-secondary btn-sm float-right mx-1"> EDIT </a>
@if($artikel->is_valid === 'tidak')
                                <a href="#" class="btn btn-primary btn-sm float-right mx-1" data-toggle="modal" data-target="#confirm-delete">VALIDASI</a>
                                <a href="{{ url('artikel') }}" class="btn btn-info btn-sm float-right mx-1"> KEMBALI </a>

<div class="modal fade text-primary" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <i class="fa fa-exclamation-circle fa-lg"></i> INFO
            </div>
            <div class="modal-body">
                APAKAH YAKIN DATA INI VALID? 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">BATAL</button>
                {!! Form::open(['url' => 'artikel/validasi/'.$artikel->id, 'class' => 'd-inline']) !!}
                    {!! Form::submit('VALID', ['class' => 'btn btn-primary btn-sm']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endif
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table">
                                    <tr>
                                        <th class="text-center">Gambar</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> <img src="{{ asset('assets-dashboard/images/' . $artikel->gambar_artikel) }}" width="300"> </td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <td>Judul</td>
                                        <th> {{ $artikel->judul_artikel }} </th>
                                    </tr>
                                    <tr>
                                        <td>Slug</td>
                                        <th> {{ $artikel->slug_artikel }} </th>
                                    </tr>
                                    <tr>
                                        <td>Waktu Posting</td>
                                        <th> {{ $artikel->created_at }} WITA</th>
                                    </tr>
                                    <tr>
                                        <td>Terakhir Update</td>
                                        <th> {{ $artikel->updated_at }} WITA</th>
                                    </tr>
                                    <tr>
                                        <td>Pengguna</td>
                                        <th>{{ $artikel->pengguna->nama_pengguna }}</th>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr class="text-center">
                                        <th>Isi</th>
                                    </tr>
                                    <tr>
                                        <th> {!! $artikel->isi_artikel !!} </th>
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