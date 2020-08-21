<?php

namespace Mohsenbostan\LaravelSecretImage;

use Illuminate\Support\ServiceProvider;

class LaravelSecretImageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom( __DIR__.'/../routes/laravel-secret-image.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-secret-image.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-secret-image');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-secret-image', function () {
            return new LaravelSecretImage;
        });
    }
}
