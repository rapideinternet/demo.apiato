<?php

namespace App\Containers\Authentication\Providers;

use App\Ship\Parents\Providers\MainProvider;
use Tymon\JWTAuth\Providers\LaravelServiceProvider;

/**
 * Class MainServiceProvider.
 *
 * The Main Service Provider of this container, it will be automatically registered in the framework.
 *
 * @author  Mahmoud Zalt <mahmoud@zalt.me>
 */
class MainServiceProvider extends MainProvider
{

    /**
     * Container Service Providers.
     *
     * @var array
     */
    public $serviceProviders = [
        LaravelServiceProvider::class,
        UserServiceProvider::class,
    ];

    /**
     * Container Aliases
     *
     * @var  array
     */
    public $aliases = [

    ];

}
