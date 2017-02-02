<?php

namespace projectmanager\Providers;

use Illuminate\Support\ServiceProvider;

class ProjectManagerRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \projectmanager\Repositories\ClienteRepository::class,
            \projectmanager\Repositories\ClienteRepositoryEloquente::class 
        );
    }
}
