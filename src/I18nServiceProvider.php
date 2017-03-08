<?php
namespace MordiSacks\LaravelI18n;

use Exception;
use Illuminate\Support\ServiceProvider;
use MordiSacks\I18n\I18n;

class I18nServiceProvider extends ServiceProvider
{

    public function boot()
    {
        if (!file_exists(resource_path('i18n'))) {
            if (!@mkdir(resource_path('i18n'), 0755, $recursive = true)) {
                $error = error_get_last();
                throw new Exception('cant create directory ' . $error['message'], 1);
            }
        }

        I18n::$dir = resource_path('i18n');

        I18n::$locale = config('app.locale');

        \Blade::directive('lang', function ($expression) {
            return "<?php echo MordiSacks\\I18n\\I18n::translate({$expression}); ?>";
        });
    }

    public function register()
    {

    }
}