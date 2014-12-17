<?php
namespace Dv\Models;

use Dv\Db\DataBaseHandler;
use Dv\Db;

class FeesModel
{
    protected $DataBaseHandler;
    public function __construct()
    {
        $this->DataBaseHandler = new DataBaseHandler();
    }

    public function displayFees()
    {
        $QueryTitle = 'Fees of actors between 40 and 60 years old';
        $firstViewTitle = 'first';
        $this->DataBaseHandler->getFees();
        $this->DataBaseHandler->displayData($QueryTitle, $firstViewTitle);
    }
}