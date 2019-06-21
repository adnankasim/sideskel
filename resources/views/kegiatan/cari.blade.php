<div class="col-md-12">
    {!! Form::open(['url' => 'kegiatan/cari', 'method' => 'get']) !!}
        <div class="input-group mb-3">
            {!! Form::text('nama_kegiatan', (!empty($nama_kegiatan) ? $nama_kegiatan : null), ['class' => 'form-control', 'placeholder' => 'Cari Nama Kegiatan']) !!}
            <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit"> <i class="fa fa-search fa-lg"></i> </button>
            </div>
        </div>
    {!! Form::close() !!}
</div>