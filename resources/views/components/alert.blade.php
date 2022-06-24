@if ($message = Session::get('errors'))
    <div class="alert alert-danger alert-dismissinle fade show">
        <strong>{{ $message }}</strong>
        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif