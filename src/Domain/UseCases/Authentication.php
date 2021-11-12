<?php

namespace MyClinicPay\Domain\UseCases;

interface Authentication
{
    /**
     * @param array $body
     * @return string
     */
    public function getToken(array $body): string;

    /**
     * @return string
     */
    public function createToken(): string;
}
