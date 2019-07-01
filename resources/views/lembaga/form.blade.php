{{ csrf_field() }}
@if(isset($lembaga))
    {!! Form::hidden('id', $lembaga->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Nama</label>
        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Alif Perdana Sugeha']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Deskripsi</label>
        {!! Form::textarea('deskripsi', null, ['class' => 'form-control editor', 'rows' => '8']) !!}
</div>
<div class="form-group has-success">
    <label>Logo</label>
    <div class="input-group mb-3">
        <div class="custom-file">
            {!! Form::file('logo', ['class' => 'custom-file-input']) !!}
            <label class="custom-file-label">Cari Logo</label>
        </div>
    </div>
</div>
<div>
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-paper-plane fa-lg"></i> 
    </button>
</div>