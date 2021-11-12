<?php

namespace MyClinicPay\Data\UseCases;

interface AuthenticationRepository
{
    /**
     * @return string
     */
    public function getToken(): string;

    /**
     * @param array $body
     * @return string
     */
    public function createToken(array $body): string;
}
