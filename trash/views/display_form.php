<h1><?php echo $title ?></h1>
<form action="../DV/Models/ajax.php" method="post" class="form1">
    <select size="1">
    <?php
        foreach($this->data as $row)
        {
            echo '<option value=' . $row["title"] . '>' .  $row["title"] . '</option>';
        }
    ?>
    </select>
</form>