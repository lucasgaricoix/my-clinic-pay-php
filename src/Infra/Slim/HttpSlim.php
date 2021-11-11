<?php

namespace MyClinicPay\Infra\Slim;

use MyClinicPay\Main\Routes\AuthenticationRoute;
use Slim\App;


class HttpSlim
{
    private App $app;

    /**
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->app->addBodyParsingMiddleware();
        $this->app->addRoutingMiddleware();
        $this->addRoutes($app);
    }

    private function addRoutes(App $app)
    {
        (new AuthenticationRoute)->handle($app);
    }

    /**
     * @return App
     */
    public function getApp(): App
    {
        return $this->app;
    }

}
