
<h1>IMAGES</h1>

<br>
<?php 
    foreach ($data as $image){
        ?>  
        <p><?= $image->header ?></p>
        <p><?= $image->filename ?></p>
        <p><?= $image->date ?></p>
        
        <a href="images/destroy/<?= $image->id ?>">Delete</a>
        <hr>
        <?php
    }
?>

<a href="images/create">Add new Image</a>
