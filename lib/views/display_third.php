<h1><?php echo $title ?></h1>
<table class="table">
    <tr><td>Full name</td>
<?php
foreach($this->data as $row):?>
    <tr>
        <td><?php echo $row['full_name']?></td>
    </tr>
<?php endforeach?>
</table>
