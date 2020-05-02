<h1 class="heading">Images</h1>
<a class="upload" href="images/create">Upload Image</a>
<div class="images">
<?php foreach($data as $image){ ?> 
    <div class="image-block">
        <a class="delete" href="images/destroy/<?= $image->id ?>">x</a> 
        <a class="info flex column" href="images/show/<?= $image->id ?>">
            <p class="date"><?= $image->date ?></p>
            <p class="header"><?= $image->header ?></p>
         </a>
        <img class="image" src="/ExampleProject/resources/images/<?= $image->filename ?>">
        
    </div>
<?php } ?>


</div>

