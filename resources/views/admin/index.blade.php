@extends('OnionEngineAdmin::layouts.admin')

@section('content')
  @include('OnionEngineAdmin::components.alerts')

  <div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>

    @include('OnionEngineAdmin::panels.onioninfo')

  </div>
@endsection
