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
                                <strong class="card-title">DOKUMEN</strong>
                                <a href="{{ url('dokumen/create') }}" class="btn btn-primary btn-sm float-right"> TAMBAH </a>
                            </div>
                            <div class="card-body">
                                <span class="float-left"> Total Data :
                                    <strong class="font-weight-bold d-inline-block mb-1"> {{ $daftar_dokumen->total() }}  </strong>
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
                                        <th>FILE</th>
                                        <th>KETERANGAN</th>
                                        <th>WAKTU UPLOAD</th>
                                        <th>TERAKHIR UPDATE</th>
                                        <th>AKSI</th>
                                    </tr>
                                    <?php $i=1 ?>
                                    @foreach($daftar_dokumen as $dokumen)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td> <a href="{{ asset('assets-beranda/dokumen/'.$dokumen->file) }}"> {{ $dokumen->file }} </a> </td>
                                        <td>{{ $dokumen->keterangan }}</td>
                                        <td>{{ $dokumen->created_at->diffForHumans() }}</td>
                                        <td>{{ $dokumen->updated_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ url('dokumen/'. $dokumen->id .'/edit') }}" class="btn btn-info btn-sm d-block my-1">EDIT</a>
                                            <a href="#" class="btn btn-danger btn-sm d-block my-1" data-toggle="modal" data-target="#confirm-delete-{{ $i }}">HAPUS</a>

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
                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal">BATAL</button>
                {!! Form::open(['url' => 'dokumen/'.$dokumen->id, 'method' => 'delete', 'class' => 'd-inline']) !!}
                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
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
                            {{ $daftar_dokumen->links() }}
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