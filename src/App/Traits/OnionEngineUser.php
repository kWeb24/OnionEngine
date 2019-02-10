<?php

namespace Kweber\OnionEngine\App\Traits;

use Spatie\Permission\Traits\HasRoles;

trait OnionEngineUser
{
    use HasRoles;

    public function test()
    {
        return 'User trait test method';
    }
}
