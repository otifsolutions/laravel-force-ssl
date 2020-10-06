<?php

namespace OTIFSolutions\Forcessl;

use OTIFSolutions\ForceSsl\Http\Middleware\ForceSsl;
use Illuminate\Support\ServiceProvider;

class ForceSslServiceProvider extends ServiceProvider
{


    /**
     *
     */
    public function boot()
    {
        $this->app['router']->pushMiddlewareToGroup('web',ForceSsl::class);

    }
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
}
