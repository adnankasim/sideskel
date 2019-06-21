{{ csrf_field() }}
@if(isset($fasilitasPemerintahan))
    {!! Form::hidden('id', $fasilitasPemerintahan->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Jenis</label>
        {!! Form::text('jenis_fasilitas_pemerintahan', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Kantor Desa']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Keterangan</label>
        {!! Form::text('keterangan_fasilitas_pemerintahan', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 2']) !!}
</div>                             
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>