{{ csrf_field() }}
@if(isset($fasilitasPrasarana))
    {!! Form::hidden('id', $fasilitasPrasarana->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Jenis</label>
        {!! Form::text('jenis_fasilitas_prasarana', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Jalan Aspal']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Keterangan</label>
        {!! Form::text('keterangan_fasilitas_prasarana', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 3 KM']) !!}
</div>                             
<div>
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-paper-plane fa-lg"></i>  
    </button>
</div>