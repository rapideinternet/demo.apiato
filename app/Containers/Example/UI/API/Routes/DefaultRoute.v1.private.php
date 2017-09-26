<?php

/**
 * @apiGroup           Example
 * @apiName            show
 *
 * @api                {GET} /v1/jwt Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

$router->get('jwt', [
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:api',
    ],
]);
