<div class="head flex row">
    <h1 class="heading">Images</h1>
    <?php if(!empty($data)){ ?>
        <a class="upload" href="images/create">Upload new image</a>
    <?php } ?>
</div>

<div class="images">
    <?php 
        if (empty($data)){ ?>
        <a class="empty flex column" href="images/create">
            <h3>Nothing here huh..?</h3> 
            <img src="<?= IMAGES ?>static/add.png" alt="" class="img">
            
        </a>   
        <?php } ?>
<?php foreach($data as $image){ ?> 
    <div class="image-block">
        <a class="delete" href="images/destroy/<?= $image->id ?>">x</a> 
        <a class="info flex column" href="images/show/<?= $image->id ?>">
            <p class="date"><?= $image->date ?></p>
            <p class="header"><?= $image->header ?></p>
         </a>
        <img class="image" src="<?= IMAGES . $image->filename ?>">
    </div>
<?php } ?>
</div>

