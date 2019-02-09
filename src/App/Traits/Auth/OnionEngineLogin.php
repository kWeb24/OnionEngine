<?php

namespace Kweber\OnionEngine\App\Traits\Auth;

trait OnionEngineLogin
{
  public function showOnionEngineLoginForm() {
    return view('OnionEngineAdmin::auth.login');
  }
}
