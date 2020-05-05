<div class="head flex row">
    <h1 class="heading">Posts</h1>
    <a href="posts/create" class="upload">Create new post</a>
</div>
<div class="posts">
<?php foreach($data as $post){ ?> 
    <div class="post flex row">
        <a href="posts/show/<?= $post->id ?>" class="link">
            <div class="head flex row">
                <h3><?= $post->header ?></h3> 
            </div> 
            <p><?= $post->date ?></p>    
            <p class="content"><?= $post->content ?></p> 
        </a> 
        <a href="posts/destroy/<?= $post->id ?>" class="delete">X</a>  
    </div>
<?php } ?>
</div>

