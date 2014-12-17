    <?php
    echo '<h1>'.$title.'</h1>';


    echo '<form action="../DV/Models/ajax.php" method="post" class="form1">
        <p><select size="4" multiple name="studio[]">';

    foreach($this->data as $row)
    {
        echo '<option value=' . $row["title"] . '>' .  $row["title"] . '</option>';
    }

    echo '</select></p>
    </form>';





