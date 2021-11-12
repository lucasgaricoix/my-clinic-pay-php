<?php

use MyClinicPay\Domain\Models\UserEntity;
use MyClinicPay\Infra\Command\CreateTokenCommand;

class CreateTokenEvent implements CreateTokenCommand
{
    public function handle(UserEntity $userEntity): array
    {
        // TODO: Implement handle() method.
    }

}
