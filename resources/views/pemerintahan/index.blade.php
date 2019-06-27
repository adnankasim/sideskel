@extends('template')
@section('main-dashboard')
<!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    @include('pesan.pesan_info')

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="fa fa-bank"></i>&nbsp; PEMERINTAHAN</strong>
                                <a href="{{ url('pemerintahan/create') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus fa-lg"></i> </a>
                            </div>
                            <div class="card-body">
                                <span class="float-left"> Total Data :
                                <strong class="font-weight-bold d-inline-block mb-1"> {{$daftar_pemerintahan->count() }}  </strong>
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
                                        <th>NAMA</th>
                                        <th>JABATAN</th>
                                        <th>AKSI</th>
                                    </tr>
                                    <?php $i=1 ?>
                                    @foreach($daftar_pemerintahan as $pemerintahan)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $pemerintahan->nama_pemerintahan }}</td>
                                        <td>{{ $pemerintahan->jabatan_pemerintahan }}</td>
                                        <td>
                                            <a href="{{ url('beranda/pemerintahan') }}" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-eye fa-lg"></i> </a>
                                            <a href="{{ url('pemerintahan/'. $pemerintahan->id .'/edit') }}" class="btn btn-success btn-sm"><i class="fa fa-edit fa-lg"></i></a>

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
                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal"><i class="fa fa-times-circle fa-lg"></i></button>
                {!! Form::open(['url' => 'pemerintahan/'.$pemerintahan->id, 'method' => 'delete', 'class' => 'd-inline']) !!}
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
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <nav aria-label="Page navigation example">
                            {{ $daftar_pemerintahan->links() }}
                        </nav>
                    </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
        
        @include('footer')
        
    </div>
    <!-- /#right-panel -->
@stop