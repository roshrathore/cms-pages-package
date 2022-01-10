<?php

namespace Indianic\CmsPages;

use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'cms-pages');
        $this->loadMigrationsFrom(__DIR__.'/migrations');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/laravel-cms-pages')
        ], 'views');
    }

    public function register(){
        $this->app->make('Indianic\CmsPages\Controllers\LaravelCmsPagesController');
    }
}