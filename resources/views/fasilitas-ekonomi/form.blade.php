{{ csrf_field() }}
@if(isset($fasilitasEkonomi))
    {!! Form::hidden('id', $fasilitasEkonomi->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Jenis</label>
        {!! Form::text('jenis_fasilitas_ekonomi', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Usaha Peternakan']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Keterangan</label>
        {!! Form::text('keterangan_fasilitas_ekonomi', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 1 Unit']) !!}
</div>                             
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>