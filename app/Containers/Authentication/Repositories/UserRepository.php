<?php

namespace App\Containers\Authentication\Repositories;

use Tymon\JWTAuth\JWT;

/**
 * Interface UserRepository\
 * @package App\Containers\Authentication\Repositories
 */
interface UserRepository
{
    public function fromJWT(JWT $token);
}