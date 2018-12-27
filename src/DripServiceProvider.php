<?php

namespace Glorand\Drip\Laravel;

use Illuminate\Support\ServiceProvider;

class DripServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function register()
    {
        $this->app->bind('drip', function ($app) {
            return new LaravelDrip(
                config('laravel_drip.drip_account_id'),
                config('laravel_drip.drip_api_key'),
                config('laravel_drip.drip_user_agent')
            );
        });
        $this->app->alias('drip', \Glorand\Drip\Laravel\DripContract::class);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/laravel_drip.php' => config_path('laravel_drip.php'),
        ]);

        $this->mergeConfigFrom(__DIR__.'/../config/laravel_drip.php', 'laravel_drip');
    }

    public function provides()
    {
        return [
            \Glorand\Drip\Laravel\DripContract::class,
            'drip'
        ];
    }
}
