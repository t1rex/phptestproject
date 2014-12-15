<p>
    <?php
    echo '<h1>'.$title.'</h1>';
    echo '<table class="table">
            <tr>
                <td>>Studio title</td>
                <td>Count film</td>
                <td>Count pays</td>
                <td>Amount of fess</td>
                <td>Average fee</td>
            </tr>';
    foreach($this->data as $row)
    {
        echo '<tr>
                <td>'.$row['studio_title'].'</td>
                <td>'.$row['count_films'].'</td>
                <td>'.$row['count_pays'].'</td>
                <td>'.$row['amount_of_fees'].'</td>
                <td>'.$row['average_fee'].'</td>
            </tr>';
    }

    ?>
    </table>
</p>