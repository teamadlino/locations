<?php
/**
 * Developed by Alireza Hamedashki.
 * Email: a.hamedashki@gmail.com
 * Mobile: +98 938 900 4559
 * Date: 4/20/2018
 * Time: 10:16 PM
 */

namespace Adlino\Locations;

use Illuminate\Support\ServiceProvider;

class LocationsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishMigrations();
        $this->publishSeeds();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('locations', function () { return new Locations; });
        $this->registerCommands();
    }

    /**
     * Publish migration file.
     */
    private function publishMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');
    }

    /**
     * Publish seeder file.
     */
    private function publishSeeds()
    {
        $this->publishes([__DIR__ . '/../database/seeds/' => base_path('database/seeds')], 'seeds');
    }

    private function registerCommands()
    {
        $this->commands([
            \Adlino\Locations\Console\InitCommand::class,
        ]);
    }
}
