<?php

namespace Kweber\OnionEngine\App\Traits\Auth;

trait OnionEngineLogin
{
  /**
   * Show the application's login form.
   *
   * @return \Illuminate\Http\Response
   */
  public function showOnionEngineLoginForm() {
    return view('OnionEngineAdmin::auth.login');
  }
}
