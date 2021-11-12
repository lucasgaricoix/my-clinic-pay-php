<?php

namespace MyClinicPay\Data\Services;

use MyClinicPay\Data\UseCases\AuthenticationRepository;
use MyClinicPay\Domain\UseCases\Authentication;

class AuthenticationService implements Authentication
{
    private AuthenticationRepository $repository;

    public function __construct(AuthenticationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getToken(array $body): string
    {
        return json_encode(["token" => "1a2b3c4d"]);
    }

    public function createToken(): string
    {
        return json_encode(["token" => "1a2b3c4d"]);
    }
}
