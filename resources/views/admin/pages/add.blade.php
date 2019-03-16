@extends('OnionEngineDashboard::layouts.dashboard')

@section('content')
  @include('OnionEngineDashboard::components.alerts')

  <h4 class="c-grey-900 mT-15 mB-15">Add page</h4>
  <form action="#" method="post">
    @csrf
    <div class="row gap-20 masonry pos-r">
      <div class="masonry-sizer col-md-4"></div>

      <div class="masonry-item col-md-8">
        <div class="bgc-white p-20 bd">
          <div class="form-group">
            <label for="pageTitle">Page title</label>
            <input id="pageTitle" name="page-title" type="text" class="form-control" value="" placeholder="My new awesome page" aria-describedby="pageTitleHelp">
            <small id="pageTitleHelp" class="form-text text-muted">Your page url: <a href="#">{{url('/')}}/my-new-awesome-page</a></small>
          </div>

          <div class="pageEditor form-group mb-0">
            <label for="pageTitle">Page content</label>
            <textarea class="pageEditor__textarea" js-page-editor></textarea>
          </div>
        </div>
      </div>

      <div class="masonry-item col-md-4">
        <div class="row">
          <div class="col-md-12">
            <div class="bgc-white p-20 bd">
              <h6 class="c-grey-900"><strong>Status</strong></h6>
              <div class="mT-15">
                <p class="c-grey-700">
                  Status: draft (saved 19:07:54)<br />
                  Visibility: public<br />
                  Public at: immediatly<br />
                  Revision: 14
                </p>
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-secondary">Preview</button>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="bgc-white p-20 bd mT-15">
              <h6 class="c-grey-900"><strong>Settings</strong></h6>
              <div class="mT-15">
                <div class="form-group">
                  <label for="pageParent">Parent</label>
                  <select id="pageParent" class="form-control" name="page-parent">
                    <option selected="selected">Top-level</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="pageTemplate">Template</label>
                  <select id="pageTemplate" class="form-control" name="page-template">
                    <option selected="selected">Default</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="bgc-white p-20 bd mT-15">
              <h6 class="c-grey-900"><strong>SEO</strong></h6>
              <div class="mT-15">
                <div class="form-group">
                  <label for="pagSseTtitle">Page title</label>
                  <input id="pageSeoTitle" name="page-seo-title" type="text" class="form-control" value="" placeholder="Default, from title">
                </div>

                <div class="form-group">
                  <label for="pageSeoDescription">Page description</label>
                  <textarea id="pageSeoDescription" name="page-seo-description" class="form-control">Default, from content</textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
