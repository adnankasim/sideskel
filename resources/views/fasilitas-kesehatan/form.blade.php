{{ csrf_field() }}
@if(isset($fasilitasKesehatan))
    {!! Form::hidden('id', $fasilitasKesehatan->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Jenis</label>
        {!! Form::text('jenis_fasilitas_kesehatan', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Puskesmas']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Keterangan</label>
        {!! Form::text('keterangan_fasilitas_kesehatan', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 1 Unit']) !!}
</div>                             
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>