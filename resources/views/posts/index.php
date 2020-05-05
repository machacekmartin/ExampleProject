<h1 class="heading">Posts</h1>
<div class="posts">
<?php foreach($data as $post){ ?> 
    <div class="post">
        <h3><?= $post->header ?></h3>   
        <p>Date: <?= $post->date ?></p>    
        <p>Content: <?= $post->content ?></p> 
        <a href="posts/destroy/<?= $post->id ?>">Delete</a>
    </div>    
<?php } ?>
</div>
<a href="posts/create">Create new post</a>
