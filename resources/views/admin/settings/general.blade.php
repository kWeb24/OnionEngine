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
          <form>
            <div class="form-group">
              <label for="siteTitle">Site title</label>
              <input id="siteTitle" name="site-title" type="text" class="form-control" value="{{ config('app.name', 'Site title') }}" placeholder="Site title">
            </div>
            <div class="form-group">
              <label for="siteDesc">Side description</label>
              <input id="siteDesc" type="text" class="form-control" placeholder="Site description" aria-describedby="siteDescHelp">
              <small id="siteDescHelp" class="form-text text-muted">A few words about your site</small>
            </div>
            <div class="form-group">
              <label for="siteLanguage">Default site language</label>
              <select id="siteLanguage" class="form-control" name="site-language">
                <option selected>English (US)</option>
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
          <form>
            <div class="form-group">
              <div class="checkbox checkbox-info peers ai-c mB-15">
                <input type="checkbox" id="canUserRegister" name="can-user-register" class="peer">
                <label for="canUserRegister" class=" peers peer-greed js-sb ai-c">
                  <span class="peer peer-greed">Anyone can register</span>
                </label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox checkbox-info peers ai-c mB-15">
                <input type="checkbox" id="shouldVerifyEmailAddress" name="should-verify-email-address" class="peer">
                <label for="shouldVerifyEmailAddress" class=" peers peer-greed js-sb ai-c">
                  <span class="peer peer-greed">Require e-mail verification</span>
                </label>
              </div>
            </div>
            <div class="form-group">
              <label for="defaultUserRole">Default user role</label>
              <select id="defaultUserRole" class="form-control" name="default-user-role">
                <option selected>User</option>
                <option>Editor</option>
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
                By default cache will be removed only for settings. Use arrow to select wich cache should be removed.
              </p>
              <form>
                <div class="btn-group">
                  <button type="button" class="btn btn-danger">Clear cache</button>
                  <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Clear settings cache</a>
                    <a class="dropdown-item" href="#">Clear views cache</a>
                    <a class="dropdown-item" href="#">Clear route cache</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Clear all</a>
                    <a class="dropdown-item" href="#">Clear sessions</a>
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
