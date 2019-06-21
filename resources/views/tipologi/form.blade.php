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
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>