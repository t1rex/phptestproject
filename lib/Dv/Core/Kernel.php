<?php
namespace Dv\Core;

use Dv\Http\Router;

class Kernel
{
    /** @var ServiceContainer $container */
    public static $container;

    public function run()
    {
        $router = new Router();
        self::$container = new ServiceContainer();
        $router->dispatch();
    }
}