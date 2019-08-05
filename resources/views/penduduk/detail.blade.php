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
                                <strong class="card-title"><i class="fa fa-users"></i>&nbsp; PENDUDUK</strong>
                                <a href="#" class="btn btn-danger btn-sm float-right mx-1" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash fa-lg"></i></a>
                                <a href="{{ url('penduduk/'.$penduduk->id.'/edit') }}" class="btn btn-success btn-sm float-right mx-1"><i class="fa fa-edit fa-lg"></i> </a>
                                <a href="{{ url('penduduk/cetak/'.$penduduk->id) }}" class="btn btn-warning btn-sm float-right mx-1"><i class="fa fa-print fa-lg"></i></a>
                                <a href="{{ url('penduduk') }}" class="btn btn-info btn-sm float-right mx-1"><i class="fa fa-arrow-left fa-lg"></i> </a>

<div class="modal fade text-danger" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                {!! Form::open(['url' => 'penduduk/'.$penduduk->id, 'method' => 'delete', 'class' => 'd-inline']) !!}
                    <button type="submit" class="btn btn-danger btn-sm">
                         <i class="fa fa-trash"></i> HAPUS
                    </button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table">
                                    <tr>
                                        <th class="text-center">FOTO</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                        @if(empty($penduduk->foto_penduduk)) 
                                            <img src="{{ asset('assets-dashboard/images/default.jpg') }}" width="300"> 
                                        @else
                                            <img src="{{ asset('assets-dashboard/images/'.$penduduk->foto_penduduk) }}" width="300">
                                        @endif 
                                        </td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <td>NIK</td>
                                        <th> {{ $penduduk->nik }} </th>
                                    </tr>
                                    <tr>
                                        <td>Nomor Kartu Keluarga</td>
                                        <th> {{ $penduduk->no_kk }} </th>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <th>{{ $penduduk->nama_penduduk }}</th>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <th>{{ $penduduk->alamat_penduduk }}</th>
                                    </tr>
                                    <tr>
                                        <td>Menikah</td>
                                        <th class="text-uppercase">{{ $penduduk->status_menikah }}</th>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <th>
                                            {{ $penduduk->tempat_lahir }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <th>
                                            {{ $penduduk->tanggal_lahir }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan</td>
                                        <th>
                                            {{ $penduduk->pekerjaan }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <th class="text-uppercase">
                                            {{ $penduduk->agama }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan Terakhir</td>
                                        <th class="text-uppercase">
                                            {{ $penduduk->pendidikan_terakhir }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Golongan Darah</td>
                                        <th class="text-uppercase">
                                            {{ $penduduk->golongan_darah }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <th class="text-uppercase">
                                            {{ $penduduk->jenis_kelamin }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>Lingkungan</td>
                                        <th>
                                            {{ $penduduk->lingkungan }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>RT</td>
                                        <th>
                                            {{ $penduduk->rt }}
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>RW</td>
                                        <th>
                                            {{ $penduduk->rw }}
                                        </th>
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