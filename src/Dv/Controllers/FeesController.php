<?php
namespace Dv\Controllers;

use Dv\Http\ControllerAbstract;
use Dv\Models\FeesModel;

class FeesController extends ControllerAbstract
{
    public  function indexAction()
    {
        $layout = $this->getLayout();
        $layout->setBaseTemplate('fees/index.phtml');
        $this->getResponse()->setBody($layout->render());
    }

    public function getFeesTable()
    {
        $this->dbh = new FeesModel();
        $this->dbh->displayFees();
    }
}
