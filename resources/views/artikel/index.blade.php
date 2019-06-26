@extends('template')
@section('main-dashboard')
<!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    @include('pesan.pesan_info')

                    @include('artikel.cari')

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">ARTIKEL</strong>
                                <a href="{{ url('artikel/create') }}" class="btn btn-primary btn-sm float-right">  <i class="fa fa-plus"></i> TAMBAH </a>
                            </div>
                            <div class="card-body">
                                <span class="float-left"> Total Data :
                                    <strong class="font-weight-bold d-inline-block mb-1"> {{ $daftar_artikel->total() }}  </strong>
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
                                        <th>JUDUL</th>
                                        <th>WAKTU</th>
                                        <th>PENGGUNA</th>
                                        <th>VALID</th>
                                        <th>AKSI</th>
                                    </tr>
                                    <?php $i=1 ?>
                                    @foreach($daftar_artikel as $artikel)
                                    <tr>
                                        <td class="text-center">{{ $i }}</td>
                                        <td>{{ $artikel->judul_artikel }}</td>
                                        <td>{{ $artikel->created_at->diffForHumans() }}</td>
                                        <td>{{ $artikel->pengguna->nama_pengguna }}</td>
                                        <td class="text-center">
                                            @if($artikel->is_valid === 'tidak')
                                                <span class="fa fa-times fa-lg text-danger"></span>
                                            @else
                                                <span class="fa fa-check fa-lg text-primary"></span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('artikel/'. $artikel->id) }}" class="btn btn-primary btn-sm d-block my-1"><i class="fa fa-eye"></i> DETAIL</a>                           
                                            <a href="{{ url('artikel/'. $artikel->id .'/edit') }}" class="btn btn-info btn-sm d-block my-1"><i class="fa fa-edit"></i> EDIT</a>
                                            <a href="#" class="btn btn-danger btn-sm d-block my-1" data-toggle="modal" data-target="#confirm-delete-{{ $i }}"> <i class="fa fa-trash"></i> HAPUS</a>

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
                <button type="button" class="btn btn-info btn-sm" data-dismiss="modal"><i class="fa fa-times-circle"></i> BATAL</button>
                {!! Form::open(['url' => 'artikel/'.$artikel->id, 'method' => 'delete', 'class' => 'd-inline']) !!}
                    <button type="submit" class="btn btn-danger btn-sm">
                         <i class="fa fa-trash"></i> HAPUS
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
                            {{ $daftar_artikel->links() }}
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