<?php

namespace OTIFSolutions\ForceSSL;

use OTIFSolutions\ForceSSL\Http\Middleware\ForceSSL;
use Illuminate\Support\ServiceProvider;

class ForceSSLServiceProvider extends ServiceProvider
{


    /**
     *
     */
    public function boot()
    {
        $this->app['router']->pushMiddlewareToGroup('web',ForceSSL::class);

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
