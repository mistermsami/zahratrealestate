<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use App\Services\TranslationService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton(TranslationService::class, function ($app) {
            return new TranslationService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
{
    Schema::defaultStringLength(191);

    // Ensure the application locale is set properly
    $locale = Config::get('app.locale', 'en'); // Default to 'en' if not set
    App::setLocale($locale);
}

}
