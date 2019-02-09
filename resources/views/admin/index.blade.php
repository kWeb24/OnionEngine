@extends('OnionEngineAdmin::layouts.admin')

@section('content')
  @include('OnionEngineAdmin::components.alerts')

  <h4 class="c-grey-900 mT-15 mB-15">Dashboard</h4>
  <div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>

    @include('OnionEngineAdmin::panels.onioninfo')
  </div>
@endsection
