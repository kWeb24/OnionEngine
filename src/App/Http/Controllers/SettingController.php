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
use Kweber\OnionEngine\App\Managers\SettingManager;
use Kweber\OnionEngine\App\Http\Requests\Settings\GeneralSiteSettings;
use Kweber\OnionEngine\App\Http\Models\Setting;

class SettingController extends Controller
{
    /**
     * SettingsManager instance.
     *
     */
    protected $settings;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Setting $settings)
    {
        $this->middleware(['auth', 'role:super-admin']);
        $this->settings = new SettingManager($settings);
    }

    /**
     * Save general application settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveGeneral(GeneralSiteSettings $request)
    {
        $validated = $request->validated();

        if (!empty($validated['site-title'])) {
          $this->settings->set('site_title', $validated['site-title']);
        }

        if (!empty($validated['site-desc'])) {
          $this->settings->set('site_description', $validated['site-desc']);
        }

        if (!empty($validated['site-lang'])) {
          $this->settings->set('site_language', $validated['site-lang']);
        }

        return redirect()->back()->with('success', ['Settings saved!']);
    }
}
