<?php

namespace App\Containers\Authentication\Repositories\Model;

use App\Containers\Authentication\Models\User;
use Tymon\JWTAuth\Claims\Custom;
use Tymon\JWTAuth\JWT;

class UserRepository implements \App\Containers\Authentication\Repositories\UserRepository
{
    public function fromJWT(JWT $jwt)
    {
        $user = new User();

        //Set values
        $user->id = $jwt->getPayload()->get('sub');

        foreach ($jwt->getPayload()->getClaims() as $claim) {
            if ($claim instanceof Custom) {
                $user->setJWTCustomClaim($claim);
            }
        }

        return $user;

    }
}