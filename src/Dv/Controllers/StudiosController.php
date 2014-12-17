<?php
namespace Dv\Controllers;

use Dv\Http\ControllerAbstract;


class StudiosController extends ControllerAbstract
{
    public  function indexAction()
    {
        $layout = $this->getLayout();

        $layout->setBaseTemplate('studios/index.phtml');    //??????????

        $this->getResponse()->setBody($layout->render());
    }
}