# I18n
This package is a Laravel 5.2 wrapper for [I18n](https://github.com/MordiSacks/I18n)

# Installation
```
composer require mordisacks/laravel-i18n
```

After updating composer, add the service provider to the providers array in config/app.php
```
MordiSacks\LaravelI18n\I18nServiceProvider::class,
```

# Usage
Set your default locale in .env file
```
I18N=he_IL
```

This package overrides blade `@lang`

So the following will work
```
<h1>@lang('Hello :name', 'default', ['name' => 'Mordi'])</h1>
```