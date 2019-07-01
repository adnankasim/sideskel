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
                                <strong class="card-title"><i class="fa fa-newspaper-o"></i>&nbsp; LEMBAGA</strong>
                                
                                <a href="{{ url('lembaga/' . $lembaga->id . '/edit') }}" class="btn btn-success btn-sm float-right mx-1"><i class="fa fa-edit fa-lg"></i> </a>
                                <a href="{{ url('lembaga') }}" class="btn btn-info btn-sm float-right mx-1">  <i class="fa fa-arrow-left fa-lg"></i> </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table">
                                    <tr>
                                        <th class="text-center">Logo</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center"> <img src="{{ asset('assets-dashboard/images/' . $lembaga->logo) }}" width="300"> </td>
                                    </tr>
                                </table>
                                <table class="table">
                                    <tr>
                                        <td class="text-center">Nama</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center"> {{ $lembaga->nama }} </th>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td class="text-center">Deskripsi</td>
                                    </tr>
                                    <tr>
                                        <th> {!! $lembaga->deskripsi !!} </th>
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