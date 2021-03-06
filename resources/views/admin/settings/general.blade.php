@extends('OnionEngineDashboard::layouts.dashboard')

@section('content')
  @include('OnionEngineDashboard::components.alerts')

  <h4 class="c-grey-900 mT-15 mB-15">General settings</h4>
  <div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-4"></div>

    <div class="masonry-item col-md-4">
      <div class="bgc-white p-20 bd">
        <h6 class="c-grey-900"><strong>Site settings</strong></h6>
        <div class="mT-15">
          <form action="{{route('admin.settings.general.save')}}" method="post">
            @csrf

            <div class="form-group">
              <label for="siteTitle">Site title</label>
              <input id="siteTitle" name="site-title" type="text" class="form-control" value="{{ OnionEngine::siteTitle() }}" placeholder="Site title">
            </div>
            <div class="form-group">
              <label for="siteDesc">Side description</label>
              <input id="siteDesc" name="site-desc" type="text" class="form-control" value="{{ OnionEngine::siteDescription() }}" placeholder="Site description" aria-describedby="siteDescHelp">
              <small id="siteDescHelp" class="form-text text-muted">A few words about your site</small>
            </div>
            <div class="form-group">
              <label for="siteLanguage">Default site language</label>
              <select id="siteLanguage" class="form-control" name="site-lang">
                <option value="en_US" {{ (OnionEngine::siteLanguage() == 'en_US') ? 'selected' : '' }}>English (US)</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>

    <div class="masonry-item col-md-4">
      <div class="bgc-white p-20 bd">
        <h6 class="c-grey-900"><strong>Users settings</strong></h6>
        <div class="mT-15">
          <form action="{{route('admin.settings.general.user.save')}}" method="post">
            @csrf
            <div class="form-group">
              <div class="checkbox checkbox-info peers ai-c mB-15">
                <input type="checkbox" id="canUserRegister" name="can-user-register" class="peer" value="1" {{ (OnionEngine::setting('user_allow_registration') == true) ? 'checked' : '' }}>
                <label for="canUserRegister" class=" peers peer-greed js-sb ai-c">
                  <span class="peer peer-greed">Anyone can register</span>
                </label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox checkbox-info peers ai-c mB-15">
                <input type="checkbox" id="shouldVerifyEmailAddress" name="should-verify-email-address" class="peer" value="1" {{ (OnionEngine::setting('user_verify_email') == true) ? 'checked' : '' }}>
                <label for="shouldVerifyEmailAddress" class=" peers peer-greed js-sb ai-c">
                  <span class="peer peer-greed">Require e-mail verification</span>
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="defaultUserRole">Default user role</label>
              <select id="defaultUserRole" class="form-control" name="default-user-role">
                @foreach (OnionEngine::roles() as $role)
                  <option value="{{ $role->id }}" {{ (OnionEngine::setting('user_default_role') == $role->id) ? 'selected' : '' }}>{{ $role->name }}</option>
                @endforeach
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>

    <div class="masonry-item col-md-4">
      <div class="row">
        <div class="col-md-12">
          <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900"><strong>Caching</strong></h6>
            <div class="mT-15">
              <p class="c-grey-700">
                By default cache will be removed only for settings. Use arrow to select wich particular cache should be removed.
              </p>
              <form action="{{route('admin.settings.cache.clear')}}" method="get">
                <div class="btn-group">
                  <button type="submit" class="btn btn-danger">Clear cache</button>
                  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('admin.settings.cache.view.clear')}}">Clear views cache</a>
                    <a class="dropdown-item" href="{{route('admin.settings.cache.route.clear')}}">Clear route cache</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('admin.settings.cache.all.clear')}}">Clear all</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('admin.settings.cache.config.clear')}}">Clear config</a>
                    <a class="dropdown-item" href="{{route('admin.settings.cache.classloader.optimize')}}">Optimize class loader</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="bgc-white p-20 bd mT-15">
            <h6 class="c-grey-900"><strong>Maintenance</strong></h6>
            <div class="mT-15">
              <p class="c-grey-700">
                Enable maintenance mode. Site will be disabled with 503 error code page.
                Admin panel will still be available.
              </p>
              <form>
                <div class="btn-group">
                  <button type="button" class="btn cur-p btn-dark">Enable Maintenance Mode</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
