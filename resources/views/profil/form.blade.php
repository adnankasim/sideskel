{{ csrf_field() }}
@if(isset($profil))
    {!! Form::hidden('id', $profil->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Nama</label>
        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Desa ABC atau Kelurahan DEF']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Alamat</label>
        {!! Form::text('alamat', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Jl. Apa saja, Kec. ABC, Kota atau Kabupaten DEF, Provinsi GHI']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Telepon</label>
        {!! Form::text('telepon', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 082293427693']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Email</label>
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 082293427693']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Deskripsi</label>
        {!! Form::textarea('deskripsi', null, ['class' => 'form-control editor', 'rows' => '8']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Visi & Misi</label>
        {!! Form::textarea('visi_misi', null, ['class' => 'form-control editor', 'rows' => '10']) !!}
</div>
<div class="form-group has-success">
    <label>Logo</label>
    <div class="input-group mb-3">
        <div class="custom-file">
            {!! Form::file('logo', ['class' => 'custom-file-input']) !!}
            <label class="custom-file-label">Cari Logo</label>
        </div>
    </div>
</div>
<div>
    {!!Form::submit('SUBMIT', ['class' => 'btn btn-primary'])!!}
</div>