{{ csrf_field() }}
@if(isset($fasilitasPeribadatan))
    {!! Form::hidden('id', $fasilitasPeribadatan->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Jenis</label>
        {!! Form::text('jenis_fasilitas_peribadatan', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Masjid']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Keterangan</label>
        {!! Form::text('keterangan_fasilitas_peribadatan', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 1']) !!}
</div>                             
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>