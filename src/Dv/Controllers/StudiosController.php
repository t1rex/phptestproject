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

    public function listStudioWithAjaxAction()
    {
        $studioTitle = $_GET['list-studio'];
        $block = $this->getLayout()->getBlock('Dv\Blocks\Studios\ListStudios', $studioTitle);
//        $layout = $this->getLayout('studio/list');
        $this->getResponse()->setBody($block->render());
    }
}


