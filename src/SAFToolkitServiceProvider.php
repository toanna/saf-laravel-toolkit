<?php
namespace Toanna\SAFLaravelToolkit;
use Illuminate\Support\ServiceProvider;
class SAFToolkitServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Console\InitializeCommand::class,
                Console\AbstractionMakeCommand::class,
                Console\BusinessMakeCommand::class,
                Console\BusinessServiceMakeCommand::class,
                Console\ConsoleMakeCommand::class,
                Console\ControllerMakeCommand::class,
                Console\ApiControllerMakeCommand::class,
                Console\DependencyMakeCommand::class,
                Console\DomainModelMakeCommand::class,
                Console\EloquentMakeCommand::class,
                Console\ExceptionMakeCommand::class,
                Console\RequestMakeCommand::class,
                Console\ResourceMakeCommand::class,
            ]);
        }
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}