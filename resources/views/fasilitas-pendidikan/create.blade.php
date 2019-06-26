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
                                <strong class="card-title">TAMBAH FASILITAS PENDIDIKAN</strong>
                                <a href="{{ url('fasilitas-pendidikan') }}" class="btn btn-info btn-sm float-right"> <i class="fa fa-arrow-left"></i> KEMBALI </a>
                            </div>
                            <div class="card-body">
                                
                                <div class="card-body" style="padding-top: 0">
                                    {!! Form::open(['url' => 'fasilitas-pendidikan']) !!}
                                        @include('fasilitas-pendidikan.form')
                                    {!! Form::close() !!}
                                </div>
                                <!-- </div> -->

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