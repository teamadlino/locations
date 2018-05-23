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
use Adlino\Locations\Commands\PublishCommand;

class LocationsServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('locations', function () { return new Locations; });
    }

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerCommand(PublishCommand::class, 'publish');
    }

    /**
     * Register a singleton command
     *
     * @param $class
     * @param $command
     */
    private function registerCommand($class, $command)
    {
        $path = 'adlino.locations.commands.';
        $this->app->singleton($path . $command, function ($app) use ($class) {
            return $app[$class];
        });
        $this->commands($path . $command);
    }
}
