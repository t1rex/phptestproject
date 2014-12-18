<?php
namespace Dv\Controllers;

use Dv\Http\ControllerAbstract;


class StudiosController extends ControllerAbstract
{
    public  function indexAction()
    {
        $layout = $this->getLayout();
        $this->getResponse()->setBody($layout->render());;
    }
}
