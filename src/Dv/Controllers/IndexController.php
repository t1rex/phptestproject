<?php
namespace Dv\Controllers;

use Dv\Core\Kernel;

class IndexController
{
    public function indexAction()
    {
        $request = Kernel::$container->request;
        // 1. db connection
        // 2. layout
        // 3. view is rendered inside layout
        echo '123';
    }
}