<p>
    <?php
    echo '<h1>'.$title.'</h1>';
    echo '<table class="table table-for-ajax">
            <tr><td>title</td><td>Full name</td><td>Count film</td></tr>';
    foreach($this->data as $row)
    {
        echo '<tr><td>'.$row['title'].'</td><td>'.$row['full_name'].'</td><td>'.$row['count_film'].'</td></tr>';
    }

    ?>
    </table>
</p>