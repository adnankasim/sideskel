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
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-paper-plane"></i>  SUBMIT
    </button>
</div>