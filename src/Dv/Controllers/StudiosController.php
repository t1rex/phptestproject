<?php
namespace Dv\Controllers;

use Dv\Http\ControllerAbstract;


class StudiosController extends ControllerAbstract
{
    public  function indexAction()
    {
        $layout = $this->getLayout();
//        $layout->setBaseTemplate('secondTemplate.phtml');
        $this->getResponse()->setBody($layout->render());

//        $html = $layout->render();
//        header('Content-Type: text/html;');
//        headers_sent();
//        echo $html;

    }
}
