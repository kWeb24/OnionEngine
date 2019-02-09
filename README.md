# OnionEngine

## This is WIP Readme

## Installation

Installer will copy all configuration and assets files to its destination directory.

`php artisan onionengine:install`

### Add to config/app.php

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
