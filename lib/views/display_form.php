    <?php
    echo '<h1>'.$title.'</h1>';


    echo '<form action="../app/ajax.php" method="post">
        <p><select size="4" multiple name="studio[]">';

    foreach($this->data as $row)
    {
        echo '<option value=' . $row["title"] . '>' .  $row["title"] . '</option>';
    }

    echo '</select></p>
        <p><input type="submit" value="Submit" class="submit"></p>
    </form>';





