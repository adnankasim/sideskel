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
                                <strong class="card-title"><i class="fa fa-newspaper-o"></i>&nbsp; ANGGOTA LEMBAGA</strong>
                                
                                <a href="{{ url('anggota-lembaga/' . $lembaga->id . '/edit') }}" class="btn btn-success btn-sm float-right mx-1"><i class="fa fa-edit fa-lg"></i> </a>
                                <a href="{{ url('anggota-lembaga') }}" class="btn btn-info btn-sm float-right mx-1">  <i class="fa fa-arrow-left fa-lg"></i> </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table">
                                    <tr>
                                        <th class="text-center">Foto</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> <img src="{{ asset('assets-dashboard/images/' . $lembaga->foto) }}" width="300"> </td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <td class="text-center">Nama</td>
                                        <th class="text-center"> {{ $lembaga->nama }} </th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> Jabatan </td>
                                        <th class="text-center"> {{ $lembaga->jabatan }} </th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> Lembaga </td>
                                        <th class="text-center"> {{ $lembaga->lembaga->nama }} </th>
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