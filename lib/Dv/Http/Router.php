<?php
namespace Dv\Http;


use Dv\Core\Kernel;

class Router
{
    public function dispatch()
    {
        $request = new Request();
        Kernel::$container->request = $request;
        $pathInfo = explode('/', trim($request->getPath(), '/'));
        $controllerName = $pathInfo[0] ? $pathInfo[0] : 'index';
        $controllerClass = 'Dv\Controllers\\' . ucfirst($controllerName) . 'Controller';
        $controller = new $controllerClass();

        $action = isset($pathInfo[1]) ? $pathInfo[1] : 'index';
        $action .= 'Action';
        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            throw new \Exception("Action ' $action' not found in controller '$controllerClass'");
        }
    }
}