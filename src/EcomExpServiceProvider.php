<?php

namespace surajitbasak109\EcomExp;

use Illuminate\Support\ServiceProvider;
use surajitbasak109\EcomExp\EcomExpApi;

class EcomExpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/ecomexpress.php' => config_path('ecomexpress.php'),
            ], 'config');
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias(EcomExpApi::class, 'ecomexp');
        $this->mergeConfigFrom(__DIR__ . '/../config/ecomexpress.php', 'ecomexpress');
    }
}
