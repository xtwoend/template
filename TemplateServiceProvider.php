<?php

namespace Xtwoend;

use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
    /**
     * [boot description]
     * @return [type] [description]
     */
    public function boot()
    {
        $this->publishes([
            realpath(__DIR__ . '/resources/views') => base_path('resources/views'),
            realpath(__DIR__ . '/resources/lang') => base_path('resources/lang'),
            realpath(__DIR__ . '/resources/assets/js') => base_path('resources/assets/js'),
            realpath(__DIR__ . '/resources/assets/less') => base_path('resources/assets/less'),
            realpath(__DIR__ . '/resources/assets/public') => public_path('/'),
            realpath(__DIR__ . '/config/gulpfile.js') => base_path('gulpfile.js'),
            realpath(__DIR__ . '/config/config.js') => config_path('site.php'),
        ]);

        view()->composer('*', function ($view) {
            $view->with('menu', config('site.menu'));
            $view->with('submenu', config('site.submenu'));
        });
    }

    public function register()
    {
        # code...
    }
}
