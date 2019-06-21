<div class="col-md-12">
    {!! Form::open(['url' => 'artikel/cari', 'method' => 'get']) !!}
        <div class="input-group mb-3">
            {!! Form::text('judul_artikel', (!empty($judul_artikel) ? $judul_artikel : null), ['class' => 'form-control', 'placeholder' => 'Cari Judul Artikel']) !!}
            <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit"> <i class="fa fa-search fa-lg"></i> </button>
            </div>
        </div>
    {!! Form::close() !!}
</div>