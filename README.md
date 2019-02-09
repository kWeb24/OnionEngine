# OnionEngine

## This is WIP Readme

## Installation

Installer will copy all configuration and assets files to its destination directory.

`php artisan onionengine:install`

### Add to config/app.php

**Note: only for Laravel 5.4 and below, because since Laravel 5.5 we use package auto-discovery.**

```javascript
'providers' => [
    kweber\OnionEngine\OnionEngineServiceProvider::class
],

'aliases' => [
    'OnionEngine' => kweber\OnionEngine\App\Facades\OnionEngine::class
],
```

### Add trait to user model

```php
use OnionEngineUserTrait;
```

## Dev

### Add to composer.json

```javascript
"autoload": {
    "psr-4": {
        "App\\": "app/",
        "kweber\\OnionEngine\\": "packages/kweber/onionengine/src"
    }
},

```
