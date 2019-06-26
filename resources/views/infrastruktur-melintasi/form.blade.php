{{ csrf_field() }}
@if(isset($infrastrukturMelintasi))
    {!! Form::hidden('id', $infrastrukturMelintasi->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Uraian</label>
        {!! Form::text('uraian_infra_melintasi', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Sungai']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Panjang</label>
        {!! Form::text('panjang_infra_melintasi', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 1.300 M']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Lebar</label>
        {!! Form::text('lebar_infra_melintasi', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 5 M']) !!}
</div>                             
<div>
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-paper-plane"></i>  SUBMIT
    </button>
</div>