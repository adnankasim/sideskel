@extends('beranda/template')
@section('main-beranda')
        <div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-lg-12">

                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-md-2 mt-xl-0"><strong>EDIT ARTIKEL</strong></h2>

                        <div class="non-home p-5 bg-white">

@include('errors.form_error')

{!! Form::open(['url' => 'beranda/dashboard/'. $artikel->id, 'method' => 'patch', 'files' => true, 'style' => 'box-shadow:none']) !!}

                            <div class="form-group">
    <label class="control-label">Judul</label>
        {!! Form::text('judul_artikel', $artikel->judul_artikel, ['class' => 'form-control']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Isi</label>
        {!! Form::textarea('isi_artikel', $artikel->isi_artikel, ['class' => 'form-control editor', 'rows' => '8']) !!}
</div>
<div class="form-group has-success">
    <label>Gambar</label>
    <div class="input-group mb-3">
        <div class="custom-file">
            {!! Form::file('gambar_artikel', ['class' => 'custom-file-input', 'id' => 'gambar_artikel']) !!}
            <label class="custom-file-label">Cari Gambar</label>
        </div>
    </div>
    <p id="target"></p>
</div>
<div>
{!! Form::hidden('id_pengguna', Session::get('id')) !!}
{!! Form::hidden('id', $artikel->id) !!}

    <button type="submit" class="btn btn-primary btn-block">
      <i class="fa fa-paper-plane fa-lg"></i> 
    </button>
      <a href="{{ url('beranda/dashboard') }}" class="btn btn-secondary btn-block fa fa-arrow-left fa-lg"></a> 
    
</div>
{!! Form::close() !!}

<script>
    var file = document.getElementById("gambar_artikel");
    file.addEventListener('change', function(){
        document.getElementById("target").innerHTML = "Nama Foto : "+file.files[0].name;
    })
</script>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@stop