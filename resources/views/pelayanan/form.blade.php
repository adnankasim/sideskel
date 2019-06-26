{{ csrf_field() }}
@if(isset($pelayanan))
    {!! Form::hidden('id', $pelayanan->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Nama</label>
        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Pembuatan KTP']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Keterangan</label>
        {!! Form::textarea('keterangan', null, ['class' => 'form-control editor', 'rows' => '8']) !!}
</div>                             
<div>
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-paper-plane"></i>  SUBMIT
    </button>
</div>