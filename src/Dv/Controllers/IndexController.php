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
//        $html = $layout->render();
        $this->getResponse()->setBody($layout->render());
//        header('Content-Type: text/html;');
//        headers_sent();
//        echo $html;

        // 1. db connection
        // 2. layout
        // 3. view is rendered inside layout

//------------------------------------------------------------------------------

//        $model = new IndexModel();
////        test
//        $model->displayFirstQuery();
//        $model->displaySecondQuery();
//        $model->displayThirdQuery();
//        $model->displayFourthQuery();


    }

    public function withAjax()
    {
        $block = $this->getLayout()->getBlock('sdgdfg');
        $this->getResponse()->setBody($block->render());
    }
}