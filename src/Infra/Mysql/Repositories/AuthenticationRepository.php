<?php

namespace MyClinicPay\Infra\Mysql\Repositories;

use MyClinicPay\Infra\Mysql\Connection;

class AuthenticationRepository
{
    public function getUser()
    {
        $connection = (new Connection())->connect();
        $connection->query("select * from user");
    }
}
