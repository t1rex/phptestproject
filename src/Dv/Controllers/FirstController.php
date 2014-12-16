<?php
namespace Dv\Controllers;

use Dv\Http\ControllerAbstract;

class FirstController extends ControllerAbstract
{
    public  function indexAction()
    {
        $layout = $this->getLayout();
        $layout->setBaseTemplate('firstTemplate.phtml');
        $html = $layout->render();
        header('Content-Type: text/html;');
        headers_sent();
        echo $html;
    }
}
