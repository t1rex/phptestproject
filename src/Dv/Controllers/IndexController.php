<?php
namespace Dv\Controllers;

use Dv\Http\ControllerAbstract;
use Dv\Core\Kernel;

class IndexController extends ControllerAbstract
{
    public function indexAction()
    {
//        $request = Kernel::$container->request;
        $layout = $this->getLayout();
        $html = $layout->render();
        header('Content-Type: text/html;');
        headers_sent();
        echo $html;
        // 1. db connection
        // 2. layout
        // 3. view is rendered inside layout
    }
}