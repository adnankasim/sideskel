@if($errors->any())
    <div class="col-md-12">
        <div class="alert alert-danger" role="alert">
            <h5 class="alert-heading">SIDESKEL</h5>
            
            @foreach($errors->all() as $error)
                <p class="text-dark">{{ $error }}</p>
            @endforeach
            
        </div>
    </div>
@endif