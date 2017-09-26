<?php

namespace App\Containers\Example\UI\API\Controllers;

use App\Ship\Parents\Controllers\ApiController;
use Tymon\JWTAuth\Facades\JWTAuth;

class Controller extends ApiController
{
    public function index()
    {


        $token = JWTAuth::attempt([]);

        return ['token' => $token];
    }

    public function show()
    {

        $user = \Auth::user();

        dd($user);

        return ['With JWT'];
    }

}
