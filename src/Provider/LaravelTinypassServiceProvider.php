<?php

namespace LaVoz\LaravelTinypass\Provider;

use Illuminate\Support\ServiceProvider;
use LaVoz\Tinypass\Client;

/**
 * Class LaravelTinypassServiceProvider
 *
 * @package LaVoz\LaravelTinypass\Provider
 */
class LaravelTinypassServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap Laravel Tinypass
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/tinypass.php' => config_path('tinypass.php'),
        ]);


        $this->app->bind('tinypass', function () {
            return new Client([
                'sandbox' => config('tinypass.sandbox'),
                'method' => config('tinypass.method'),
                'api_token' => config('tinypass.api_token'),
                'aid' => config('tinypass.aid'),
            ]);
        });
    }

    /**
     * Register Laravel Tinypass
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/config.php', 'tinypass'
        );
    }

}
