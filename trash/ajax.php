<?php
namespace Dv\Models;

use Dv\Db\DataBaseHandler;
use Dv\Db;
//echo $_GET['studio'];

$dbh = new IndexModel();
echo 'aaaaaaaaaaaaaaaaaaaaaaaaa';
$secondQueryTitle = 'Information about the actors who starred for the studio';
$secondViewTitle = 'second';
$titleOfStudio = $_POST['studio']['0'];
$dbh->getActorInfo($titleOfStudio);
$dbh->displayData($secondQueryTitle, $secondViewTitle);