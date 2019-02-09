<li class="dropdown">
  <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
    <div class="peer mR-10">
      <img class="w-2r bdrs-50p" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="">
    </div>
    <div class="peer">
      <span class="fsz-sm c-grey-900">{{Auth::user()->name}}</span>
    </div>
  </a>
  <ul class="dropdown-menu fsz-sm">
    <li role="separator" class="divider"></li>
    <li>
      <a href="{{ route('logout') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"
         onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="ti-power-off mR-10"></i>
        <span>Logout</span>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
    </li>
  </ul>
</li>
