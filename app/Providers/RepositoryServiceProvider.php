<?php

namespace projectmanager\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
        $this->app->bind(\projectmanager\Repositories\ProjectRepository::class, \projectmanager\Repositories\ProjectRepositoryEloquent::class);
        $this->app->bind(\projectmanager\Repositories\NotasProjectRepository::class, \projectmanager\Repositories\NotasProjectRepositoryEloquent::class);
        //:end-bindings:
    }
}
