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
                                <strong class="card-title"><i class="fa fa-bank"></i>&nbsp; EDIT LEMBAGA</strong>
                                <a href="{{ url('lembaga') }}" class="btn btn-info btn-sm float-right"> <i class="fa fa-arrow-left fa-lg"></i></a>
                            </div>
                            <div class="card-body">
                                <div class="card-body" style="padding-top: 0">
                                    {!! Form::model($lembaga, ['method' => 'patch', 'files' => true, 'action' =>   ['LembagaController@update', $lembaga->id]]) !!}
                                        @include('lembaga.form')
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