{{--
 Available alerts:

 alert alert-primary
 alert alert-secondary
 alert alert-success
 alert alert-danger
 alert alert-warning
 alert alert-info
 alert alert-light
 alert alert-dark
--}}

@if (\Session::has('success'))
    <div class="alert alert-success" role="alert">
        @foreach (\Session::get('success') as $alert)
            {!! $alert !!}
        @endforeach
    </div>
@endif

@if (\Session::has('error'))
    <div class="alert alert-danger" role="alert">
        @foreach (\Session::get('error') as $alert)
            {!! $alert !!}
        @endforeach
    </div>
@endif
