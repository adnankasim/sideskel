{{ csrf_field() }}
@if(isset($bata))
    {!! Form::hidden('id', $bata->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Mata Angin</label>
        {!! Form::text('mata_angin', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Utara, Barat, Tenggara, Timur atau Selatan']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Uraian</label>
        {!! Form::text('uraian', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Desa ABC atau Kelurahan DEF']) !!}
</div>                             
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>