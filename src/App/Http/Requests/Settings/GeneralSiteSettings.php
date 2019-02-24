<?php
/**
 * OnionEngine.
 *
 * @author   Kamil Weber <kamilweber24@gmail.com>
 * @license  http://opensource.org/licenses/MIT
 * @package  onionengine
 */

namespace Kweber\OnionEngine\App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSiteSettings extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::user()->hasRole('super-admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'site-title' => 'nullable',
            'site-desc' => 'nullable',
            'site-lang' => 'nullable',
        ];
    }
}
