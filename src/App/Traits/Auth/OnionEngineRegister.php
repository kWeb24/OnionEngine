<?php

namespace Kweber\OnionEngine\App\Traits\Auth;

trait OnionEngineRegister
{
  /**
   * Show the application registration form.
   *
   * @return \Illuminate\Http\Response
   */
  public function showOnionEngineRegistrationForm() {
    return view('OnionEngineAdmin::auth.register');
  }
}
