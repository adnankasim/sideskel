@extends('beranda/template')
@section('main-beranda')
        <div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-lg-12">

                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-md-2 mt-xl-0"><strong>TAMBAH ARTIKEL</strong></h2>

                        <div class="non-home p-5 bg-white">

@include('errors.form_error')

{!! Form::open(['url' => 'beranda/dashboard', 'files' => true, 'style' => 'box-shadow:none']) !!}
<div class="form-group">
    <label class="control-label">Judul</label>
    {!! Form::text('judul_artikel', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Lorem Ipsum Dolor Sit Amet']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Isi</label>
        {!! Form::textarea('isi_artikel', null, ['class' => 'form-control editor', 'rows' => '8']) !!}
</div>
<div class="form-group has-success">
    <label>Gambar</label>
    <div class="input-group mb-3">
        <div class="custom-file">
            {!! Form::file('gambar_artikel', ['class' => 'custom-file-input']) !!}
            <label class="custom-file-label">Cari Gambar</label>
        </div>
    </div>
</div>
<div>
{!! Form::hidden('id_pengguna', Session::get('id')) !!}
    <button type="submit" class="btn btn-primary btn-block">
      <i class="fa fa-paper-plane fa-lg"></i> 
    </button>
    <button type="submit" class="btn btn-secondary btn-block">
      <i class="fa fa-arrow-left fa-lg"></i> 
    </button>
</div>
{!! Form::close() !!}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop