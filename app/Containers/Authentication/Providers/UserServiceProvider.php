<?php

namespace App\Containers\Authentication\Providers;

use App\Containers\Authentication\Auth\UserProvider;
use App\Containers\Authentication\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Class UserServiceProvider
 *
 * @package App\Containers\Authentication\Providers
 */
class UserServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['auth']->provider('jwt_user', function ($app, array $config) {
            return new UserProvider($this->app->make(UserRepository::class), $app['tymon.jwt']);
        });
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Containers\Authentication\Repositories\UserRepository::class,
            \App\Containers\Authentication\Repositories\Model\UserRepository::class);
    }


}
