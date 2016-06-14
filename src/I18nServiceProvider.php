<?php
namespace MordiSacks\LaravelI18n;

use Illuminate\Support\ServiceProvider;
use MordiSacks\I18n\I18n;

class I18nServiceProvider extends ServiceProvider
{

	public function boot()
	{
		if(!file_exists(resource_path('i18n')))
		{
			mkdir(resource_path('i18n'), 0755);
		}

		I18n::$dir = resource_path('i18n');

		I18n::$locale = env('I18N');

		\Blade::directive('lang', function ($expression)
		{
			return "<?php echo __{$expression}; ?>";
		});
	}

	public function register()
	{

	}
}