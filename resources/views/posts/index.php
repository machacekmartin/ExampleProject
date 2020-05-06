<div class="head flex row">
    <h1 class="heading">Posts</h1>
    <?php if(!empty($data)){ ?>
        <a class="upload" href="posts/create">+ Create new post</a>
    <?php } ?>
</div>
<div class="posts grid">
<?php 
    if (empty($data)){ ?>
    <a class="empty flex column transition" href="posts/create">
        <h3>Nothing here huh..?</h3> 
        <img src="<?= IMAGES ?>static/add.png" alt="" class="img">    
    </a>   
    <?php } ?>
<?php foreach($data as $post){ ?> 
    <div class="post flex row transition">
        <a href="posts/show/<?= $post->id ?>" class="link">
            <div class="head flex row">
                <h3><?= $post->header ?></h3> 
            </div> 
            <p class="date"><?= date_format(date_create($post->date), "d/m/Y | H:i" )?></p>    
            <p class="content"><?= $post->content ?></p> 
        </a> 
        <a href="posts/destroy/<?= $post->id ?>" class="delete">X</a>  
    </div>
<?php } ?>
</div>

