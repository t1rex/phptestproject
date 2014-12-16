<?php
include 'db_object.php';
//echo $_GET['studio'];

$dbh = new DataBaseHandler();

$secondQueryTitle = 'Information about the actors who starred for the studio';
$secondViewTitle = 'second';
$titleOfStudio = $_POST['studio']['0'];
$dbh->getActorInfo($titleOfStudio);
$dbh->displayData($secondQueryTitle, $secondViewTitle);