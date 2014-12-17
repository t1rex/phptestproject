<?php
namespace Dv\Models;

use Dv\Db\DataBaseHandler;
use Dv\Db;

class StudioModel
{
    protected $DataBaseHandler;
    public function __construct()
    {
        $this->DataBaseHandler = new DataBaseHandler();
    }

    public function displayStudios()
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

}