# OnionEngine

[![CircleCI](https://circleci.com/gh/kWeb24/OnionEngine.svg?style=svg)](https://circleci.com/gh/kWeb24/OnionEngine)
[![StyleCI](https://github.styleci.io/repos/169605643/shield?branch=develop)](https://github.styleci.io/repos/169605643)

## This is WIP Readme

## Installation

### Getting started
* Install fresh copy of Laravel
* Add OnionEngine package: `composer require kweber\onionengine`
**Note: Package is not available at Packagist yet. Look at Dev section at the bottom of this Readme**

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

### Routes
Add in `routes/web.php`

```javascript
OnionEngine::routes(); // Adds all OnionEngine routes
OnionEngine::authRoutes(); // Adds only auth routes
OnionEngine::webRoutes(); // Adds only web routes
```

### Traits

App/User.php:

```php
use Kweber\OnionEngine\App\Traits\OnionEngineUser;
...
use OnionEngineUser;
```

App/Http/Controllers/Auth/LoginController.php:

```php
use Kweber\OnionEngine\App\Traits\Auth\OnionEngineLogin;
...
use OnionEngineLogin;
```

App/Http/Controllers/Auth/LoginController.php:

```php
use Kweber\OnionEngine\App\Traits\Auth\OnionEngineLogin;
...
use OnionEngineLogin;
```

App/Http/Controllers/HomeController.php:

```php
use Kweber\OnionEngine\App\Traits\OnionEngineDashboard;
...
use OnionEngineDashboard;
```

### Login
If you didn't skip database seeder in Installer you can login now at standard Laravel `/login` route
using this credintials:

`Email: admin@example.com`

`Password: admin`

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

### Testing
Laravel installation require testbench
`composer require --dev "orchestra/testbench=~3.0"`

Run tests in package directory
`composer test`

On Windows:
`composer test-win`
