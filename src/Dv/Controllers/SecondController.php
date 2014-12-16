<?php
namespace Dv\Controllers;

use Dv\Http\ControllerAbstract;

class SecondController extends ControllerAbstract
{
    public  function indexAction(){
        echo 'test2';
        $layout = $this->getLayout();
        $layout->setBaseTemplate('secondTemplate.phtml');
        $html = $layout->render();
        header('Content-Type: text/html;');
        headers_sent();
        echo $html;

    }
}
