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
