@if (Session::has('status'))
    <div class="alert alert-warning text-center" role="alert">
            {{ Session::get('status') }}
    </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success text-center alert-dismissable" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('success') }}
    </div>
@endif

@if(Session::has('error'))
    <div class="alert alert-danger text-center alert-dismissable" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
        {{ Session::get('error') }}
    </div>
@endif

@if ($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger text-center alert-dismissable" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button>
        {!!  $error !!}
    </div>
    @endforeach
@endif