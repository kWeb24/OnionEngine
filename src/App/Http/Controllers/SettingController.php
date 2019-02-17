<?php
/**
 * OnionEngine
 *
 * @author   Kamil Weber <kamilweber24@gmail.com>
 * @license  http://opensource.org/licenses/MIT
 * @package  onionengine
 */

namespace Kweber\OnionEngine\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Kweber\OnionEngine\App\Managers\SettingsManager;
use Kweber\OnionEngine\App\Requests\Settings\GeneralSiteSettings;

class SettingController extends Controller
{
    /**
     * Settings model.
     *
     */
    protected $settings;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Settings $settings)
    {
        $this->middleware(['auth', 'role:super-admin']);
        $this->settings = new SettingsManager($settings)
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
}
