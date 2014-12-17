<?php

namespace Dv\Blocks\Page;

use Dv\Core\Kernel;
use Dv\View\BlockAbstract;

class Content extends BlockAbstract
{
    public function getTemplate()
    {
        // we need to get template name from file class
        if (empty($this->template)) {
            /** @var \Dv\Http\Router $router */
            $router = Kernel::$container->router;

            $this->template = implode(
                    DIRECTORY_SEPARATOR,
                    array($router->getControllerName(), $router->getActionName())
                ) . '.phtml';
        }
        return $this->template;
    }
}