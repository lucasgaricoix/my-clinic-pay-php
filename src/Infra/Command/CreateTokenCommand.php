<?php

namespace MyClinicPay\Infra\Command;

use MyClinicPay\Domain\Models\UserEntity;

interface CreateTokenCommand
{
    public function handle(UserEntity $userEntity): array;
}
