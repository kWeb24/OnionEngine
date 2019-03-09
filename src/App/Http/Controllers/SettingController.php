<?php
/**
 * OnionEngine.
 *
 * @author   Kamil Weber <kamilweber24@gmail.com>
 * @license  http://opensource.org/licenses/MIT
 * @package  onionengine
 */

namespace Kweber\OnionEngine\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Kweber\OnionEngine\App\Http\Models\Setting;
use Kweber\OnionEngine\App\Managers\SettingManager;
use Kweber\OnionEngine\App\Http\Requests\Settings\GeneralSiteSettings;
use Kweber\OnionEngine\App\Http\Requests\Settings\GeneralUserSettings;

class SettingController extends Controller
{
    /**
     * SettingsManager instance.
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
        $fields = [
          'site-title' => [
            'name' => 'site_title',
          ],
          'site-desc' => [
            'name' => 'site_description',
          ],
          'site-lang' => [
            'name' => 'site_language',
          ],
        ];

        $this->saveSettings($fields, $request);

        return redirect()->back()->with('success', ['Settings saved!']);
    }

    /**
     * Save general user settings.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveUserGeneral(GeneralUserSettings $request)
    {
        $fields = [
          'can-user-register' => [
            'name' => 'user_allow_registration',
            'toggle' => true,
          ],
          'should-verify-email-address' => [
            'name' => 'user_verify_email',
            'toggle' => true,
          ],
          'default-user-role' => [
            'name' => 'user_default_role',
          ],
        ];

        $this->saveSettings($fields, $request);

        return redirect()->back()->with('success', ['Settings saved!']);
    }

    /**
     * Clear settings cache.
     *
     * @return \Illuminate\Http\Response
     */
    public function cacheClear()
    {
        $this->settings->flush();

        return redirect()->back()->with('success', ['Settings cache cleared!']);
    }

    /**
     * Clear views cache.
     *
     * @return \Illuminate\Http\Response
     */
    public function cacheClearView()
    {
        \Artisan::call('view:clear');

        return redirect()->back()->with('success', ['Views cache cleared!']);
    }

    /**
     * Clear routes cache.
     *
     * @return \Illuminate\Http\Response
     */
    public function cacheClearRoute()
    {
        \Artisan::call('route:cache');

        return redirect()->back()->with('success', ['Routes cache cleared!']);
    }

    /**
     * Clear config cache.
     *
     * @return \Illuminate\Http\Response
     */
    public function cacheClearConfig()
    {
        \Artisan::call('config:cache');

        return redirect()->back()->with('success', ['Config cache cleared!']);
    }

    /**
     * Clear all cache.
     *
     * @return \Illuminate\Http\Response
     */
    public function cacheClearAll()
    {
        \Artisan::call('cache:clear');

        return redirect()->back()->with('success', ['Cache cleared!']);
    }

    /**
     * Optimize class loader.
     *
     * @return \Illuminate\Http\Response
     */
    public function optimizeClassLoader()
    {
        \Artisan::call('optimize');

        return redirect()->back()->with('success', ['Cache cleared!']);
    }

    /**
     * Save fields to database.
     *
     * @return void
     */
    private function saveSettings($fields, $request)
    {
        $validated = $request->validated();

        foreach ($fields as $key => $field) {
            if (! empty($validated[$key]) || $field['toggle']) {
                $this->settings->set($field['name'], (! empty($validated[$key])) ? $validated[$key] : 0);
            }
        }
    }
}
