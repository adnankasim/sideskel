{{ csrf_field() }}
@if(isset($dokumen))
    {!! Form::hidden('id', $dokumen->id) !!}
@endif
<div class="form-group has-success">
    <label>Dokumen</label>
    <div class="input-group mb-3">
        <div class="custom-file">
            {!! Form::file('file', ['class' => 'custom-file-input', 'id' => 'file']) !!}
            <label class="custom-file-label">Cari Dokumen</label>
        </div>
    </div>
    <p id="target"></p>
</div>
<div class="form-group has-success">
    <label class="control-label mb-1">Keterangan</label>
        {!! Form::textarea('keterangan', null, ['class' => 'form-control', 'rows' => '2']) !!}
</div>
<div>
    <button type="submit" class="btn btn-primary btn-sm">
      <i class="fa fa-paper-plane fa-lg"></i> 
    </button>
</div>

<script>
    var file = document.getElementById("file");
    file.addEventListener('change', function(){
        document.getElementById("target").innerHTML = "Nama File : "+file.files[0].name;
    })
</script>