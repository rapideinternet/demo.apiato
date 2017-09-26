<?php

namespace App\Containers\Authentication\Auth;


use App\Containers\Authentication\Models\User;
use App\Containers\Authentication\Repositories\UserRepository;
use App\Ship\Exceptions\NotImplementedException;
use Illuminate\Contracts\Auth\UserProvider as IlluminateUserProvider;
use Tymon\JWTAuth\JWT;


/**
 * Class UserProvider
 */
class UserProvider implements IlluminateUserProvider
{
    /**
     * @var JWT
     */
    private $JWT;
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * UserProvider constructor.
     * @param UserRepository $userRepository
     * @param JWT $JWT
     */
    public function __construct(UserRepository $userRepository, JWT $JWT)
    {
        $this->JWT = $JWT;
        $this->userRepository = $userRepository;
    }

    /**
     * Retrieve a user by their unique identifier.
     *
     * @param  mixed $identifier
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveById($identifier)
    {
        return $this->userRepository->fromJWT($this->JWT);
    }

    /**
     * Retrieve a user by their unique identifier and "remember me" token.
     *
     * @param  mixed $identifier
     * @param  string $token
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByToken($identifier, $token)
    {
        throw new NotImplementedException('retrieveByToken()');

        // TODO: Implement retrieveByToken() method.
    }

    /**
     * Update the "remember me" token for the given user in storage.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable $user
     * @param  string $token
     * @return void
     */
    public function updateRememberToken(\Illuminate\Contracts\Auth\Authenticatable $user, $token)
    {
        throw new NotImplementedException('updateRememberToken()');

        // TODO: Implement updateRememberToken() method.
    }

    /**
     * Retrieve a user by the given credentials.
     *
     * @param  array $credentials
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveByCredentials(array $credentials)
    {
        $user = new User();
        $user->customClaims(['ubt' => 123213]);

        return $user;

        throw new NotImplementedException('retrieveByCredentials()');

        // TODO: Implement retrieveByCredentials() method.
    }

    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable $user
     * @param  array $credentials
     * @return bool
     */
    public function validateCredentials(\Illuminate\Contracts\Auth\Authenticatable $user, array $credentials)
    {
        return true;
        throw new NotImplementedException('validateCredentials()');

        // TODO: Implement validateCredentials() method.
    }

    public function getModel()
    {
        return User::class;
    }
}