@extends('template')
@section('main-dashboard')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    @include('errors.form_error')

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="fa fa-feed"></i>&nbsp; EDIT KEGIATAN</strong>
                                <a href="{{ url('kegiatan') }}" class="btn btn-info btn-sm float-right"> <i class="fa fa-arrow-left fa-lg"></i> </a>
                            </div>
                            <div class="card-body">
                                <div class="card-body" style="padding-top: 0">
                                    {!! Form::model($kegiatan, ['method' => 'patch', 'files' => true, 'action' =>   ['KegiatanController@update', $kegiatan->id]]) !!}
                                        @include('kegiatan.form')
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div> <!-- .card -->
                    
                    </div>
                    <!--/.col-->

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>
        
        @include('footer')
        
    </div>
@stop