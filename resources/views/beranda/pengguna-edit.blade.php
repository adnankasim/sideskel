@extends('beranda/template')
@section('main-beranda')
        <div data-aos="flip-right" class="site-section bg-light">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-lg-12">

                        <h2 class="site-heading text-center text-black mb-2 mt-5 mt-md-2 mt-xl-0"><strong>EDIT PENGGUNA</strong></h2>

                        <div class="non-home p-5 bg-white">

@include('errors.form_error')

{!! Form::open(['url' => 'beranda/dashboard/edit-pengguna/'. $pengguna->id, 'method' => 'patch', 'files' => true, 'style' => 'box-shadow:none']) !!}

                            <div class="form-group">
    <label class="control-label">Nama</label>
        {!! Form::text('nama_pengguna', $pengguna->nama_pengguna, ['class' => 'form-control']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Email</label>
        {!! Form::text('email_pengguna', $pengguna->email_pengguna, ['class' => 'form-control']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Password</label>
        {!! Form::password('password_pengguna', ['class' => 'form-control']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Jenis Kelamin</label>
    {!! Form::select('jenis_kelamin', ['perempuan' => 'Perempuan', 'laki-laki' => 'Laki-Laki'], $pengguna->jenis_kelamin, ['placeholder' => '-- Jenis Kelamin --', 'class' => 'form-control']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">No. HP</label>
        {!! Form::text('no_hp', $pengguna->no_hp, ['class' => 'form-control']) !!}
</div>
<div class="form-group has-success">
    <label>Foto</label>
    <div class="input-group mb-3">
        <div class="custom-file">
            {!! Form::file('foto_pengguna', ['class' => 'custom-file-input', 'id' => 'foto_pengguna']) !!}
            <label class="custom-file-label">Cari Foto</label>
        </div>
    </div>
    <p id="target"></p>
</div>
<div>
{!! Form::hidden('id', $pengguna->id) !!}

    <button type="submit" class="btn btn-primary btn-block">
      <i class="fa fa-paper-plane fa-lg"></i> 
    </button>
      <a href="{{ url('beranda/dashboard') }}" class="btn btn-secondary btn-block fa fa-arrow-left fa-lg"></a> 
</div>
{!! Form::close() !!}

<script>
    var file = document.getElementById("foto_pengguna");
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