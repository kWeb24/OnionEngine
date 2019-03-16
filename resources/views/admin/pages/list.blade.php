@extends('OnionEngineDashboard::layouts.dashboard')

@section('content')
  @include('OnionEngineDashboard::components.alerts')

  <h4 class="c-grey-900 mT-15 mB-15">Pages</h4>
  <div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-4"></div>

    <div class="masonry-item col-md-12">
      <div class="bgc-white p-20 bd">
        <div class="pageListTable">
          <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Title <i class="ti-angle-down"></i></th>
                <th class="pageListTable__status">Status <i class="ti-angle-down"></i></th>
                <th class="pageListTable__modified">Modified <i class="ti-angle-down"></i></th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Title</th>
                <th class="pageListTable__status">Status</th>
                <th class="pageListTable__modified">Modified</th>
              </tr>
            </tfoot>
            <tbody>
              @for ($i = 0; $i < 100; $i++)
                <tr>
                  <td><a href="#">My awesome page {{$i}}</a></td>
                  <td class="pageListTable__status">Draft</td>
                  <td class="pageListTable__modified">16.03.2018 16:43</td>
                </tr>
              @endfor
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
