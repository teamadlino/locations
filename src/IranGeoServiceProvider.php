<?php
/**
 * Developed by Alireza Hamedashki.
 * Email: a.hamedashki@gmail.com
 * Mobile: +98 938 900 4559
 * Date: 4/20/2018
 * Time: 10:16 PM
 */

namespace Adlino\IranGeo;


use Illuminate\Support\ServiceProvider;

class IranGeoServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('irGeo', function () {
            return new irGeo;
        });
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Database/Migrations' => database_path('migrations')
        ], 'irGeo');
    }
}
