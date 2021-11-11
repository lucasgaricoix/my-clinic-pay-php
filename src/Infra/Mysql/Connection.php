<?php

namespace MyClinicPay\Infra\Mysql;

use mysqli;

class Connection
{
    private mysqli|null $instance = null;

    public function connect(): mysqli
    {
        if (is_null($this->instance)) {
            $this->instance = new mysqli("localhost", "root", "myclinicpay_admin", "myclinicpay");
        }
        return $this->instance;
    }

}
