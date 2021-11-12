<?php

namespace MyClinicPay\Infra\Command;

interface Command
{
    public function handle(): array;
}
