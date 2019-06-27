@if(Session::has('pesan'))
<div class="col-md-12">
    <div class="alert alert-primary" role="alert">
      <h5 class="alert-heading mb-1"> <i class="fa fa-info fa-lg"></i> INFORMASI</h5>
      <p class="text-dark">{{ Session::get('pesan') }}</p>
    </div>
</div>
@endif