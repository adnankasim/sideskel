@extends('template')
@section('main-dashboard')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    @include('errors.form_error')

                    @include('pesan.pesan_info')

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"><i class="fa fa-wrench"></i>&nbsp; PENGATURAN</strong>
                            </div>
                            <div class="card-body">
                                
<div class="card-body" style="padding-top: 0">

{!! Form::open(['url' => 'pengaturan/ganti-gambar-latar/1', 'method' => 'patch', 'files' => true]) !!}
{{ csrf_field() }}
<div class="form-group has-success">
    <label>Gambar Latar Beranda</label>
    <div class="input-group mb-3">
        <div class="custom-file">
            {!! Form::file('gambar', ['class' => 'custom-file-input', 'id' => 'gambar']) !!}
            <label class="custom-file-label">Gambar</label>
        </div>
    </div>
    <p id="target"></p>
</div>
<div>
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-paper-plane fa-lg"></i>  
    </button>
</div>
{!! Form::close() !!}

<script>
    var file = document.getElementById("gambar");
    file.addEventListener('change', function(){
        document.getElementById("target").innerHTML = "Nama Gambar : "+file.files[0].name;
    })
</script>

<hr>

{!! Form::open(['url' => 'pengaturan/ganti-warna-navbar/1', 'method' => 'patch', 'class' => 'my-3']) !!}
{{ csrf_field() }}
<div class="form-group has-success">
    <label class="control-label mb-1">Warna Latar Menu Navigasi Beranda</label>
    {!! Form::select('warna', [
    '#3498db' => 'PETER RIVER', '#1abc9c' => 'TURQUOISE', '#9b59b6' => 'AMETHYS', '#34495e' => 'WET ASPHALT'
    ], null, ['placeholder' => '-- Warna Navbar --', 'class' => 'form-control']) !!}
</div>
<div>
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-paper-plane fa-lg"></i> 
    </button>
</div>
{!! Form::close() !!}
<hr>

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