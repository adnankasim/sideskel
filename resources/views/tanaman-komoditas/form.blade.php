{{ csrf_field() }}
@if(isset($tanamanKomodita))
    {!! Form::hidden('id', $tanamanKomodita->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Uraian</label>
        {!! Form::text('uraian_tanaman_komoditas', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Padi']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Luas (HA)</label>
        {!! Form::text('luas_tanaman_komoditas', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 25']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Produksi (Ton/HA)</label>
        {!! Form::text('produksi_per_ha', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 2,5']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Tahun</label>
        {!! Form::text('tahun', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 2019']) !!}
</div>
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>