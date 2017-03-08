# I18n
This package is a Laravel wrapper for [I18n](https://github.com/MordiSacks/I18n)

# Installation
```
composer require mordisacks/laravel-i18n
```

After updating composer, add the service provider to the providers array in config/app.php
```
MordiSacks\LaravelI18n\I18nServiceProvider::class,
```

# Usage
Set your default locale in app.php config  

This package overrides blade `@lang`

So the following will work
```
<h1>@lang('Hello :name', 'default', ['name' => 'Mordi'])</h1>
```

# Changelog 2.1.0
* Updated to laravel 5.4