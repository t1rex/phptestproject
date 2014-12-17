<?php
namespace Dv\Models;

use Dv\Db\DataBaseHandler;
use Dv\Db;

class IndexModel
{
    protected $DataBaseHandler;
    public function __construct()
    {
        $this->DataBaseHandler = new DataBaseHandler();
    }

    public function displayFirstQuery()
    {
        $QueryTitle = 'Fees of actors between 40 and 60 years old';
        $firstViewTitle = 'first';
        $this->DataBaseHandler->getFees();
        $this->DataBaseHandler->displayData($QueryTitle, $firstViewTitle);
    }

    public function displaySecondQuery()
    {
        $formTitle = 'Select studio';
        $formViewTitle = 'form';
        $this->DataBaseHandler->getTitlesOfStudio();
        $this->DataBaseHandler->displayData($formTitle, $formViewTitle);

        echo '<div class="table-container">';
        $QueryTitle = 'Information about the actors who starred for the studio';
        $secondViewTitle = 'second';
        $this->DataBaseHandler->getActorInfo();
        $this->DataBaseHandler->displayData($QueryTitle, $secondViewTitle);
        echo '</div>';
    }

    public function displayThirdQuery()
    {
        $QueryTitle = 'Actors without namesakes';
        $firstViewTitle = 'third';
        $this->DataBaseHandler->getNamesakes();
        $this->DataBaseHandler->displayData($QueryTitle, $firstViewTitle);
    }

    public function displayFourthQuery()
    {
        $QueryTitle = 'Amount of fees paid by studio';
        $secondViewTitle = 'fourth';
        $this->DataBaseHandler->getStudioFees();
        $this->DataBaseHandler->displayData($QueryTitle, $secondViewTitle);
    }
}