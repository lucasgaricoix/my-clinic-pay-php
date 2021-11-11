<?php

namespace MyClinicPay\Main\Factories\Authentication;

use MyClinicPay\Data\Services\AuthenticationService;
use MyClinicPay\Presentation\Controllers\AuthenticationController;

class AuthenticationFactory
{
    public function build(): AuthenticationController
    {
        $service = new AuthenticationService();
        return new AuthenticationController($service);
    }
}
