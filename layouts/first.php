<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>First Page</title>

    <link href="../css/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/dist/css/bootstrap.css" rel="stylesheet">
    <link href="../css/layout.css" rel="stylesheet">
</head>
<body>
    <div class="header page-header">
        <h1 class="text-primary">First Title Of Page</h1>
        <a href="second.php">Second page</a> <br/>
        <a href="../index.php">MAIN</a>
    </div>
<!--    =======================================  -->
    <div>
        <?php
        include '../app/db_object.php';
        $firstQueryTitle = 'Fees of actors between 40 and 60 years old';
        $firstViewTitle = 'first';
        $dbh = new DataBaseHandler();
        $dbh->getFees();
        $dbh->displayData($firstQueryTitle, $firstViewTitle);

        $secondQueryTitle = 'Information about the actors who starred for the studio';
        $secondViewTitle = 'second';
        $dbh->getActorInfo();
        $dbh->displayData($secondQueryTitle, $secondViewTitle);
        ?>
    </div>
<!--    =======================================  -->
    <div class="navbar-fixed-bottom footer">
    </div>
</body>
</html>