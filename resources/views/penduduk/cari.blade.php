{!! Form::open(['url' => 'penduduk/cari', 'method' => 'get', 'class' => 'form-inline']) !!}
  
  <div class="form-group mx-1 mb-3">
    {!! Form::text('nama_penduduk', (!empty($nama_penduduk) ? $nama_penduduk : null), ['class' => 'form-control ml-3', 'placeholder' => 'Nama atau NIK Penduduk']) !!}
  </div>

  <div class="form-group mx-1 mb-3">
    {!! Form::text('pekerjaan', (!empty($pekerjaan) ? $pekerjaan : null), ['class' => 'form-control', 'placeholder' => 'Pekerjaan']) !!}
  </div>

  <div class="form-group mx-1 mb-3">
    {!! Form::select('golongan_darah', ['a' => 'A', 'b' => 'B', 'ab' => 'AB', 'o' => 'O'], (!empty($golongan_darah) ? $golongan_darah : null), ['placeholder' => '-- Gol. Darah --', 'class' => 'form-control']) !!}
  </div>

  <div class="form-group mx-1 mb-3">
    {!! Form::select('agama', $daftar_agama, (!empty($agama) ? $agama : null), ['placeholder' => '-- Agama --', 'class' => 'form-control']) !!}
  </div>

  <div class="form-group mx-1 mb-3">
    {!! Form::select('jenis_kelamin', ['perempuan' => 'Perempuan', 'laki-laki' => 'Laki-Laki'], (!empty($jenis_kelamin) ? $jenis_kelamin : null), ['placeholder' => '-- Jenis Kelamin --', 'class' => 'form-control']) !!}
  </div>

  <button type="submit" class="btn btn-primary mb-3 ml-2"> <i class="fa fa-search fa-lg"></i> </button>

{!! Form::close() !!}