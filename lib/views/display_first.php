   <?php
    echo '<h1>'.$title.'</h1>';
    echo '<table class="table">
            <tr><td>Full name</td><td>Fees</td><td>Age</td></tr>';

    foreach($this->data as $row)
    {
        echo '<tr><td>'.$row['full name'].'</td><td>'.$row['fees'].'</td><td>'.$row['age'].'</td></tr>';
    }
    ?>
</table>
