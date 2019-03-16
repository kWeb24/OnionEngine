<?php

namespace Kweber\OnionEngine\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'role:super-admin']);
    }

    /**
     * Show add page view.
     *
     * @return \Illuminate\Http\Response
     */
    public function addPage()
    {
        return view('OnionEngineAdmin::pages.add');
    }

    /**
     * Show pages list view.
     *
     * @return \Illuminate\Http\Response
     */
    public function pagesList()
    {
        return view('OnionEngineAdmin::pages.list');
    }
}
