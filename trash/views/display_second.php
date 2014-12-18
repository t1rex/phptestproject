<h1><?php echo $title ?></h1>
<table class="table">
    <tr>
        <td>title</td>
        <td>Full name</td>
        <td>Count film</td>
    </tr>
    <?php
    foreach($this->data as $row):?>
        <tr>
            <td><?php echo $row['title']?></td>
            <td><?php echo $row['full_name']?></td>
            <td><?php echo $row['count_film']?></td>
        </tr>
   <?php endforeach ?>
    </table>