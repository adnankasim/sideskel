{{ csrf_field() }}
@if(isset($pemerintahan))
    {!! Form::hidden('id', $pemerintahan->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Nama</label>
        {!! Form::text('nama_pemerintahan', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Alif Perdana Sugeha']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Jabatan</label>
        {!! Form::text('jabatan_pemerintahan', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Kepala Desa']) !!}
</div>
<div class="form-group has-success">
    <label>Foto</label>
    <div class="input-group mb-3">
        <div class="custom-file">
            {!! Form::file('foto_pemerintahan', ['class' => 'custom-file-input']) !!}
            <label class="custom-file-label">Cari Foto</label>
        </div>
    </div>
</div>
<div>
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-paper-plane fa-lg"></i> 
    </button>
</div>