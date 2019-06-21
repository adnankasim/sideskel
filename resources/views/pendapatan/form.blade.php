{{ csrf_field() }}
@if(isset($pendapatan))
    {!! Form::hidden('id', $pendapatan->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Uraian</label>
        {!! Form::text('uraian_pendapatan', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Pembelian Alat ABC']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Nominal</label>
        {!! Form::number('nominal_pendapatan', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 5000000']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Tahun</label>
        {!! Form::text('tahun', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 2020']) !!}
</div>                             
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>