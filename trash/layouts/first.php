<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>First Page</title>

    <link href="../web/css/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../web/css/dist/css/bootstrap.css" rel="stylesheet">
    <link href="../web/css/layout.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('form').submit(function(){
                res = $.post(
                    $(this).attr('action'), // ссылка куда отправляем данные
                    $(this).serialize(), // данные формы
                    function(response) {
                        $('.table-container').empty().append(response);
                    }
                );
                return false;
            });
        });

    </script>
</head>
<body>
    <div class="header page-header">
        <h1 class="text-primary">First Title Of Page</h1>
        <a href="second.php">Second page</a> <br/>
        <a href="../web/index.php">MAIN</a>
    </div>
<!--    =======================================  -->
    <div class="content">
        <?php
        include '../app/db_object.php';
        $firstQueryTitle = 'Fees of actors between 40 and 60 years old';
        $firstViewTitle = 'first';
        $dbh = new DataBaseHandler();
        $dbh->getFees();
        $dbh->displayData($firstQueryTitle, $firstViewTitle);

        $formTitle = 'Select studio';
        $formViewTitle = 'form';
//        $titles = array();
        $dbh->getTitlesOfStudio();
        $dbh->displayData($formTitle, $formViewTitle);

        echo '<div class="table-container">';
        $secondQueryTitle = 'Information about the actors who starred for the studio';
        $secondViewTitle = 'second';
        $dbh->getActorInfo();
        $dbh->displayData($secondQueryTitle, $secondViewTitle);
        echo '</div>';
        ?>
    </div>
    <div class="for-table">

    </div>
<!--    =======================================  -->
    <div class="navbar-fixed-bottom footer">
    </div>
</body>
</html>