<?php

namespace MyClinicPay\Main\Factories;

use DI\Container;

final class ContainerDependency
{
    private static ?Container $container = null;

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        return self::$container = $container;
    }


    public static function getContainer (): Container
    {
        return self::$container;
    }
}
