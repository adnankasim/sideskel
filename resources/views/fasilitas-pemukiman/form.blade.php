{{ csrf_field() }}
@if(isset($fasilitasPemukiman))
    {!! Form::hidden('id', $fasilitasPemukiman->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Uraian</label>
        {!! Form::text('uraian_fasilitas_pemukiman', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Sumur Gali']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Jumlah</label>
        {!! Form::text('jumlah_fasilitas_pemukiman', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 2']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Pengguna</label>
        {!! Form::text('pengguna_fasilitas_pemukiman', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 20 KK']) !!}
</div>                             
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>