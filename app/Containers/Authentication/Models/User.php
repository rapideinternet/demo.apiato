<?php

namespace App\Containers\Authentication\Models;

use App\Ship\Exceptions\NotImplementedException;
use Illuminate\Contracts\Auth\Authenticatable;
use Tymon\JWTAuth\Claims\Custom;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\Support\CustomClaims;

class User implements Authenticatable, JWTSubject
{
    use CustomClaims;

    public $id = 123;
    public $name = 'Test User';

    /**
     * @return string
     */
    public function getAuthIdentifierName()
    {
        // Return the name of unique identifier for the user (e.g. "id")
        return "id";
    }

    /**
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        // Return the unique identifier for the user (e.g. their ID, 123)
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAuthPassword()
    {
        // Returns the (hashed) password for the user
        throw new NotImplementedException('getAuthPassword()');
    }

    /**
     * @return string
     */
    public function getRememberToken()
    {
        // Return the token used for the "remember me" functionality
        throw new NotImplementedException('getAuthPassword()');
    }

    /**
     * @param  string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        // Store a new token user for the "remember me" functionality
        throw new NotImplementedException('getAuthPassword()');
    }

    /**
     * @return string
     */
    public function getRememberTokenName()
    {
        // Return the name of the column / attribute used to store the "remember me" token
        throw new NotImplementedException('getAuthPassword()');
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->id;
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return $this->getCustomClaims();
    }

    public function setJWTCustomClaim(Custom $claim)
    {
        $this->customClaims[$claim->getName()] = $claim->getValue();
    }
}