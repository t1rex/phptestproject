<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Second Page</title>

        <link href="../css/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/dist/css/bootstrap.css" rel="stylesheet">
        <link href="../css/layout.css" rel="stylesheet">
    </head>
    <body>
        <div class="header page-header">
        <h1 class="text-primary">Second Title Of Page</h1>
        <a href="first.php">First page</a> <br/>
        <a href="../index.php">MAIN</a>
    </div>
    <div>
        <?php
        include '../app/db_object.php';
        $firstQueryTitle = 'Actors without namesakes';
        $firstViewTitle = 'third';
        $dbh = new DataBaseHandler();
        $dbh->getNamesakes();
        $dbh->displayData($firstQueryTitle, $firstViewTitle);

        $secondQueryTitle = 'Amount of fees paid by studio';
        $secondViewTitle = 'fourth';
        $dbh->getStudioFees();
        $dbh->displayData($secondQueryTitle, $secondViewTitle);
        ?>
    </div>
    <div class="navbar-fixed-bottom footer">
        <p></p>
    </div>
    </body>
</html>