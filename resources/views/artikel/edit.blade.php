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
                                <strong class="card-title">EDIT ARTIKEL</strong>
                                <a href="{{ url('artikel') }}" class="btn btn-info btn-sm float-right"> KEMBALI </a>
                            </div>
                            <div class="card-body">
                                <div class="card-body" style="padding-top: 0">
                                    {!! Form::model($artikel, ['method' => 'patch', 'files' => true, 'action' =>   ['ArtikelController@update', $artikel->id]]) !!}
                                        @include('artikel.form')
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