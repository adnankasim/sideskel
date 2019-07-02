{{ csrf_field() }}
@if(isset($artikel))
    {!! Form::hidden('id', $artikel->id) !!}
@endif
<div class="form-group">
    <label class="control-label">Judul</label>
        {!! Form::text('judul_artikel', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Lorem Ipsum Dolor Sit Amet']) !!}
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Isi</label>
        {!! Form::textarea('isi_artikel', null, ['class' => 'form-control editor', 'rows' => '8']) !!}
</div>
<div class="form-group has-success">
    <label>Gambar</label>
    <div class="input-group mb-3">
        <div class="custom-file">
            {!! Form::file('gambar_artikel', ['class' => 'custom-file-input']) !!}
            <label class="custom-file-label">Cari Gambar</label>
        </div>
    </div>
</div>
<div>
{!! Form::hidden('id_pengguna', Session::get('id')) !!}
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-paper-plane fa-lg"></i> 
    </button>
</div>