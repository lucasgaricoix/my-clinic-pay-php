<?php

namespace MyClinicPay\Main\Routes;

use MyClinicPay\Main\Factories\Authentication\AuthenticationFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

class AuthenticationRoute
{
    public function handle(App $app)
    {
        $app->post("/", function (Request $request, Response $response) {
            $authenticationController = (new AuthenticationFactory())->build();
            return $authenticationController->getToken($request, $response);
        });
    }
}
