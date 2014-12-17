<h1><?php echo $title ?></h1>
<table class="table">
    <tr>
        <td>Studio title</td>
        <td>Count film</td>
        <td>Count pays</td>
        <td>Amount of fess</td>
        <td>Average fee</td>
    </tr>
    <?php
    foreach($this->data as $row):?>
    <tr>
        <td><?php echo $row['studio_title']?></td>
        <td><?php echo $row['count_films']?></td>
        <td><?php echo $row['count_pays']?></td>
        <td><?php echo $row['amount_of_fees']?></td>
        <td><?php echo $row['average_fee']?></td>
    </tr>
<?php endforeach ?>
</table>
