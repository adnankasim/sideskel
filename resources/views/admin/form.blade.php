{{ csrf_field() }}
@if(isset($admin))
    {!! Form::hidden('id', $admin->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Nama</label>
        {!! Form::text('nama_admin', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Alif Perdana Sugeha']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Email</label>
        {!! Form::text('email_admin', null, ['class' => 'form-control', 'placeholder' => 'Contoh: alifsugeha@gmail.com']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Password</label>
        {!! Form::password('password_admin', ['class' => 'form-control']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Jenis Kelamin</label>
        {!! Form::select('jenis_kelamin', ['perempuan' => 'Perempuan', 'laki-laki' => 'Laki - Laki'], null, ['placeholder' => '-- Jenis Kelamin --', 'class' => 'form-control']); !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">No. Hp</label>
        {!! Form::number('no_hp', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 082293427693']) !!}
</div>                                                 
<div>
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-paper-plane fa-lg"></i> 
    </button>
</div>