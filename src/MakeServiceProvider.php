<?php

namespace Laracademy\Make;

/*
 *
 * @author Michael McMullen <michael@laracademy.co>
 */

use Illuminate\Support\ServiceProvider;

class MakeServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        //
    }

    public function register()
    {
        $this->registerMakeUserCommand();
    }

    private function registerMakeUserCommand()
    {
        // register model from table
        $this->app->singleton('command.laracademy.make.user', function ($app) {
            return $app['Laracademy\Make\Commands\MakeUser'];
        });


        $this->commands('command.laracademy.make.user');
    }
}
