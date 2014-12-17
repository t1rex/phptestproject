<?php
namespace Dv\Http;

use Dv\Core\Kernel;

class Router
{
    protected $controllerName = '';
    protected $actionName = '';

    /**
     * @throws \Exception
     */
    public function dispatch()
    {
        $request = new Request();
        Kernel::$container->request = $request;
        $pathInfo = explode('/', trim($request->getPath(), '/'));
        $controllerName = $pathInfo[0] ? $pathInfo[0] : 'index';
        $controllerClass = 'Dv\Controllers\\' . ucfirst($controllerName) . 'Controller';
        /** @var \Dv\Http\ControllerAbstract $controller */
        $controller = new $controllerClass();

        $actionName = isset($pathInfo[1]) ? $pathInfo[1] : 'index';
        $this->actionName = $actionName;
        $actionName .= 'Action';
        if (method_exists($controller, $actionName)) {
            $this->controllerName = $controllerName;
            Kernel::$container->router = $this;
            $controller->$actionName();
            $controller->postDispatch();
        } else {
            throw new \Exception("Action '$actionName' not found in controller '$controllerClass'");
        }
    }

    /**
     * @return string
     */
    public function getControllerName()
    {
        return $this->controllerName;
    }

    /**
     * @return string
     */
    public function getActionName()
    {
        return $this->actionName;
    }
}