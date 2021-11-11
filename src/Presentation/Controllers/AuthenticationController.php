<?php

namespace MyClinicPay\Presentation\Controllers;

use Exception;
use MyClinicPay\Data\Services\AuthenticationService;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class AuthenticationController
{
    private AuthenticationService $authenticationService;

    public function __construct(AuthenticationService $service)
    {
        $this->authenticationService = $service;
    }

    /**
     * @throws Exception
     */
    public function getToken(Request $request, Response $response): Response
    {
        $body = $request->getParsedBody();
        if (empty($body)) {
            throw new Exception("E-mail and password not provided.");
        }
        $token = $this->authenticationService->getToken($body);
        $response->getBody()->write($token);
        return $response;
    }

}
