# OnionEngine

## This is WIP Readme

## Installation

### Laravel setup
* Install fresh copy of Laravel
* Make auth with: `php artisan make:auth`
* Execute migrations with: `php artisan migrate`

### Run OnionEngine installer

Installer will copy all configuration and assets files to its destination directory.

`php artisan onionengine:install`

### Add to config/app.php

**Note: only for Laravel 5.4 and below, because since Laravel 5.5 we use package auto-discovery.**

```javascript
'providers' => [
    Kweber\OnionEngine\OnionEngineServiceProvider::class
],

'aliases' => [
    'OnionEngine' => Kweber\OnionEngine\App\Facades\OnionEngine::class
],
```

### Auth routes
Add just after your `Auth::routes()` in `routes/web.php`

```javascript
OnionEngine::authRoutes();
```

### Traits

User.php:

```php
use Kweber\OnionEngine\App\Traits\OnionEngineUser;
...
use OnionEngineUser;
```

Auth/LoginController.php:

```php
use Kweber\OnionEngine\App\Traits\Auth\OnionEngineLogin;
...
use AuthenticatesUsers; //after this line
use OnionEngineLogin;
```

## Dev

### Add to composer.json

Add local repository
```javascript
"repositories": [
    {
        "type": "path",
        "url": "packages/kweber/onionengine"
    }
]
```
