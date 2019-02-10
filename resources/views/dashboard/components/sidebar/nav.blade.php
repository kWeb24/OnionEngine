<ul class="sidebar-menu scrollable pos-r">
  <li class="nav-item mT-30 active">
    <a class="sidebar-link" href="{{route('admin')}}">
      <span class="icon-holder">
        <i class="c-blue-500 ti-home"></i>
      </span>
      <span class="title">Dashboard</span>
    </a>
  </li>

  @role('super-admin')
    <li class="nav-item dropdown">
      <a class="dropdown-toggle" href="javascript:void(0);">
        <span class="icon-holder">
          <i class="c-orange-500 ti-settings"></i>
        </span>
        <span class="title">Settings</span>
        <span class="arrow">
          <i class="ti-angle-right"></i>
        </span>
      </a>
      <ul class="dropdown-menu">
        <li>
          <a class='sidebar-link' href="{{route('admin.settings')}}">General</a>
        </li>
      </ul>
    </li>
  @endrole
</ul>
