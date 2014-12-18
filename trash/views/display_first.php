<h1><?php echo $title ?></h1>
<table class="table">
    <tr>
        <td>Full name</td>
        <td>Fees</td>
        <td>Age</td>
    </tr>
<?php
    foreach($this->data as $row) : ?>
        <tr>
            <td><?php echo $row['full name'] ?></td>
            <td><?php echo $row['fees'] ?></td>
            <td><?php echo $row['age'] ?></td>
        </tr>
<?php endforeach ?>
 </table>
