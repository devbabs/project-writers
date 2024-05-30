@if($errors->count())
    <div class="mt-3 alert alert-danger">
        <small>{!! $errors->first() !!}</small>
    </div>
@endif
@if(Session::has('danger'))
    <div class="mt-3 alert alert-danger">
        <small>{!! Session::get('danger') !!}</small>
    </div>
@endif
@if(Session::has('success'))
    <div class="mt-3 alert alert-success">
        <small>{!! Session::get('success') !!}</small>
    </div>
@endif
@if(Session::has('info'))
    <div class="mt-3 alert alert-info">
        <small>{!! Session::get('info') !!}</small>
    </div>
@endif
@if(Session::has('status'))
    <div class="mt-3 alert alert-info">
        <small>{!! Session::get('status') !!}</small>
    </div>
@endif
