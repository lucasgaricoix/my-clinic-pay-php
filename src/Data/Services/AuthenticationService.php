<?php

namespace MyClinicPay\Data\Services;

use MyClinicPay\Data\Usecases\Authentication;

class AuthenticationService implements Authentication
{
    public function getToken(array $body): string
    {
        return json_encode(["token" => "1a2b3c4d"]);
    }
}