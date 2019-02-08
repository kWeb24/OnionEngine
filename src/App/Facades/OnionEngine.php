<?php

namespace kweber\OnionEngine\App\Facades\OnionEngine;

use Illuminate\Support\Facades\Facade;

class OnionEngine extends Facade
{
    protected static function getFacadeAccessor() {
        return 'OnionEngine';
    }
}
