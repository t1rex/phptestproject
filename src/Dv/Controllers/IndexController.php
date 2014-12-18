<?php
namespace Dv\Controllers;

use Dv\Db\Connection;
use Dv\Db\DataBaseHandler;
use Dv\Http\ControllerAbstract;
use Dv\Core\Kernel;
use Dv\Models\IndexModel;



class IndexController extends ControllerAbstract
{
    public function indexAction()
    {
        $layout = $this->getLayout();
        $this->getResponse()->setBody($layout->render());
    }


}