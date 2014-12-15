<?php
namespace Dv\Http;

use Dv\Core\Kernel;
use Dv\View\Layout;

abstract class ControllerAbstract
{
    protected $layout;

    /**
     * @return Layout
     */
    protected function getLayout()
    {
        if (!isset($this->layout)) {
            $layout = new Layout();
            Kernel::$container->layout = $layout;
        }
        return $this->layout;
    }
}