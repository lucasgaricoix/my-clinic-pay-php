<?php

namespace MyClinicPay\Infra\Command;

use MyClinicPay\Domain\Models\UserEntity;

class CreateToken implements CreateTokenCommand
{
    public function handle(UserEntity $userEntity): array
    {

    }

}
