{{ csrf_field() }}
@if(isset($tipologi))
    {!! Form::hidden('id', $tipologi->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Uraian</label>
        {!! Form::text('uraian_tipologi', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Desa Sekitar Hutan']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Keterangan</label>
        {!! Form::text('keterangan_tipologi', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Tidak']) !!}
</div>                             
<div>
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-paper-plane fa-lg"></i>
    </button>
</div>