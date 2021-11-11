<?php

use DI\Bridge\Slim\Bridge;
use DI\Container;
use MyClinicPay\Infra\Slim\HttpSlim;
use MyClinicPay\Main\Factories\ContainerDependency;

require __DIR__ . '/../../vendor/autoload.php';

$container = new ContainerDependency(new Container());
$app       = new HttpSlim(Bridge::create($container::getContainer()));
$app->getApp()->run();
