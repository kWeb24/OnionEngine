<?php

namespace Kweber\OnionEngine\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('OnionEngineAdmin::index');
    }

    /**
     * Show the application settings page.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        return view('OnionEngineAdmin::settings.general');
    }
}
