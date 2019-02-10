@extends('OnionEngineDashboard::layouts.login')

@section('content')
<div class="peers ai-s fxw-nw h-100vh">
  <div class="peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image: url({{ \OnionEngine::dashboardAssetsPath() }}static/images/bg.jpg)">
    <div class="pos-a centerXY">
      <div class="bgc-white bdrs-50p pos-r" style='width: 120px; height: 120px;'>
        <img class="pos-a centerXY" src="{{ \OnionEngine::dashboardAssetsPath() }}static/images/logo.png" alt="">
      </div>
    </div>
  </div>
  <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style='min-width: 320px;'>
    <h4 class="fw-300 c-grey-900 mB-40">Register</h4>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="form-group">
        <label class="text-normal text-dark">Username</label>
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group">
        <label class="text-normal text-dark">Email Address</label>
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group">
        <label class="text-normal text-dark">Password</label>
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group">
        <label class="text-normal text-dark">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </form>
  </div>
</div>
@endsection
