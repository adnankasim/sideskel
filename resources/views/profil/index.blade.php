@extends('template')
@section('main-dashboard')    
<div id="right-panel" class="right-panel">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    @include('pesan.pesan_info')

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="fa fa-info fa-lg"></i>&nbsp; PROFIL</strong>
                                <a href="{{ url('profil/1/edit') }}" class="btn btn-success btn-sm float-right"><i class="fa fa-edit fa-lg"></i></a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table">
                                    <tr>
                                        <th class="text-center">LOGO</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> <img src="{{ asset('assets-dashboard/images/'.$profil->logo) }}" alt="LOGO" width="200"> </td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <td>Nama</td>
                                        <th>{{ $profil->nama }}</th>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <th>{{ $profil->alamat }}</th>
                                    </tr>
                                    <tr>
                                        <td>Telepon</td>
                                        <th>{{ $profil->telepon }}</th>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <th>{{ $profil->email }}</th>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <td>Deskripsi</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {!! $profil->deskripsi !!}
                                        </td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <th class="text-center">VISI & MISI</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            {!! $profil->visi_misi !!}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">UPDATE TERAKHIR</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> {{ $profil->updated_at->diffForHumans() }} </td>
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