@if(Session::has('error'))
    <p class="text-danger">{{Session::get('error')}}</p>
@endif

@foreach($errors->all() as $error)
    <div class="alert alert-danger">
        <p class="text-danger">{{$error}}</p>
    </div>
@endforeach

@if(Session::has('success'))
    <div class="alert alert-success">
        <p class="text-success">{{Session::get('success')}}</p>
    </div>
@endif