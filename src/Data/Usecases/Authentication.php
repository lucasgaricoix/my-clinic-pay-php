<?php

namespace MyClinicPay\Data\Usecases;

interface Authentication
{
    public function getToken(array $body): string;
}
