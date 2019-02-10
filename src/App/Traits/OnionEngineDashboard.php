<?php

namespace Kweber\OnionEngine\App\Traits;

trait OnionEngineDashboard
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('OnionEngineDashboard::index');
    }
}
