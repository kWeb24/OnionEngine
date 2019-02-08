# OnionEngine

## This is WIP Readme

## Installation

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

### Add to composer.json

```javascript
"autoload": {
    "psr-4": {
        "App\\": "app/",
        "kweber\\OnionEngine\\": "packages/kweber/onionengine/src"
    }
},

```

### Add trait to user model

```php
use OnionEngineUserTrait;
```
