<?php

/**
 * @apiGroup           Example
 * @apiName            index
 *
 * @api                {GET} /v1/ Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
 * {
 * // Insert the response of the request here...
 * }
 */

$router->get('', [
    'uses' => 'Controller@index',
]);
