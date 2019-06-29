@extends('template')
@section('main-dashboard')
<!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    @include('pesan.pesan_info')

                    <div class="col-md-12">
                        {!! Form::open(['url' => 'belanja/urutkan', 'method' => 'get', 'class' => 'form-group']) !!}
                            <div class="input-group mb-3 form-group">
                                {!! Form::select('tahun', $daftar_tahun, Request::input('tahun'), ['placeholder' => '-- Tahun Anggaran --', 'class' => 'form-control']) !!}
                                <div class="input-group-append">
                                    <button class="btn btn-outline-primary" type="submit"> <i class="fa fa-search   fa-lg"></i> </button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
<div class="col-md-12 mb-3 mt-1">
    <h5>TAHUN ANGGARAN : <strong>{{ Request::get('tahun') }}</strong> </h5>
</div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="fa fa-credit-card"></i>&nbsp; BELANJA</strong>
                                <a href="{{ url('belanja/cetak?tahun='. Request::get('tahun')) }}" class="btn btn-warning btn-sm float-right mx-1"><i class="fa fa-print fa-lg"></i> </a>
                                <a href="{{ url('belanja/create') }}" class="btn btn-primary btn-sm float-right"> <i class="fa fa-plus fa-lg"></i> </a>
                            </div>
                            <div class="card-body">
                                <span class="float-left"> Total Data :
                                    <strong class="font-weight-bold d-inline-block mb-1"> {{ $daftar_belanja->count() }}  </strong>
                                </span>
                                <span class="float-right"> 
                                    Update Terakhir :
                                    <strong class="font-weight-bold d-inline-block mb-1 text-capitalize"> 
                                        {{ $update_terakhir->updated_at->diffForHumans() }}  
                                    </strong>
                                </span>
                                <table id="bootstrap-data-table" class="table table-striped">
                                    <tr>
                                        <th>NO</th>
                                        <th>URAIAN</th>
                                        <th>NOMINAL (RP.)</th>
                                        <th>TAHUN</th>
                                        <th>AKSI</th>
                                    </tr>
                                    <?php $i=1 ?>
                                    @foreach($daftar_belanja as $belanja)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $belanja->uraian_belanja }}</td>
                                        <td>{{ number_format($belanja->nominal_belanja, 0, ',', '.') }}</td>
                                        <td>{{ $belanja->tahun }}</td>
                                        <td>
                                            <a href="{{ url('belanja/'. $belanja->id .'/edit') }}" class="btn btn-success btn-sm"><i class="fa fa-edit fa-lg"></i> </a>

                                            <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirm-delete-{{ $i }}"><i class="fa fa-trash fa-lg"></i> </a>
<div class="modal fade text-danger" id="confirm-delete-{{ $i++ }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <i class="fa fa-exclamation-circle fa-lg"></i> PERINGATAN!
            </div>
            <div class="modal-body">
                APAKAH YAKIN AKAN MENGHAPUS DATA INI ? 
                <br><br><br>
                *) Data yang sudah dihapus tidak bisa dikembalikan lagi
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal"><i class="fa fa-times-circle fa-lg"></i> </button>
                {!! Form::open(['url' => 'belanja/'.$belanja->id, 'method' => 'delete', 'class' => 'd-inline']) !!}
                    <button type="submit" class="btn btn-danger btn-sm">
                         <i class="fa fa-trash fa-lg"></i>
                    </button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <th colspan="2">TOTAL</th>
                                        <th colspan="2"> {{ number_format($total, 0, ',', '.') }} </th>
                                        <th></th>
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