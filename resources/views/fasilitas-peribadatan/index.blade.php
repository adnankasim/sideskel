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
                                <strong class="card-title"><i class="fa fa-moon-o"></i>&nbsp; FASILITAS PERIBADATAN</strong>
                                <a href="{{ url('fasilitas-peribadatan/create') }}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus fa-lg"></i> </a>
                            </div>
                            <div class="card-body">
                                <span class="float-left"> Total Data :
                                <strong class="font-weight-bold d-inline-block mb-1"> {{$daftar_fasilitas_peribadatan->count() }}  </strong>
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
                                        <th>JENIS</th>
                                        <th>KETERANGAN</th>
                                        <th>AKSI</th>
                                    </tr>
                                    <?php $i=1 ?>
                                    @foreach($daftar_fasilitas_peribadatan as $peribadatan)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>{{ $peribadatan->jenis_fasilitas_peribadatan }}</td>
                                        <td>{{ $peribadatan->keterangan_fasilitas_peribadatan }}</td>
                                        <td>
                                            <a href="{{ url('fasilitas-peribadatan/'. $peribadatan->id .'/edit') }}" class="btn btn-success btn-sm"><i class="fa fa-edit fa-lg"></i> </a>

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
                {!! Form::open(['url' => 'fasilitas-peribadatan/'.$peribadatan->id, 'method' => 'delete', 'class' => 'd-inline']) !!}
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


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
        
        @include('footer')
        
    </div>
    <!-- /#right-panel -->
@stop