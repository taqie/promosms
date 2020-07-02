<?php


namespace Taqie\PromoSMS\Providers;
use Illuminate\Support\ServiceProvider;
use Taqie\PromoSMS\PromoSms;

class PromoSmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../Config/promosms.php', 'promosms');

        $this->app->singleton(PromoSms::class, function ($app) {
            return new PromoSms(config('promosms'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../Config/promosms.php' => config_path('promosms.php'),
        ], 'config');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->loadRoutesFrom(__DIR__ . '/../routes.php');

    }
}
