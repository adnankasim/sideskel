{{ csrf_field() }}
@if(isset($fasilitasPendidikan))
    {!! Form::hidden('id', $fasilitasPendidikan->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Jenis</label>
        {!! Form::text('jenis_fasilitas_pendidikan', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Gedung SD']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Keterangan</label>
        {!! Form::text('keterangan_fasilitas_pendidikan', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 3 Buah']) !!}
</div>                             
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>