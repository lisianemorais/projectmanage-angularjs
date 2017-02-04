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
        $this->app->bind(\projectmanager\Repositories\MembrosProjectRepository::class, \projectmanager\Repositories\MembrosProjectRepositoryEloquent::class);
        $this->app->bind(\projectmanager\Repositories\ArquivosProjetoRepository::class, \projectmanager\Repositories\ArquivosProjetoRepositoryEloquent::class);
        $this->app->bind(\projectmanager\Repositories\ArquivosProjctRepository::class, \projectmanager\Repositories\ArquivosProjctRepositoryEloquent::class);
        $this->app->bind(\projectmanager\Repositories\ArquivosProjectRepository::class, \projectmanager\Repositories\ArquivosProjectRepositoryEloquent::class);
        //:end-bindings:
    }
}
