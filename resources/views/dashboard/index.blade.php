@extends('OnionEngineDashboard::layouts.dashboard')

@section('content')
  @include('OnionEngineDashboard::components.alerts')

  <h4 class="c-grey-900 mT-15 mB-15">Dashboard</h4>
  <div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>

    @include('OnionEngineDashboard::panels.onioninfo')
  </div>
@endsection
