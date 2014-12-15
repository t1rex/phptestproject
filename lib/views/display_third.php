<p>
    <?php
    echo '<h1>'.$title.'</h1>';
    echo '<table class="table">
            <tr><td>Full name</td>';
    foreach($this->data as $row)
    {
        echo '<tr><td>'.$row['full_name'].'</td></tr>';
    }

    ?>
    </table>
</p>