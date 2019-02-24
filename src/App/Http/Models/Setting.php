<?php
/**
 * OnionEngine.
 *
 * @author   Kamil Weber <kamilweber24@gmail.com>
 * @license  http://opensource.org/licenses/MIT
 * @package  onionengine
 */

namespace Kweber\OnionEngine\App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'oe_settings';

    protected $fillable = [
        'key', 'value',
    ];
}
