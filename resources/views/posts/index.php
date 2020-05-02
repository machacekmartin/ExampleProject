<h1 class="heading">Posts</h1>
<div class="posts flex row">
<?php foreach($data as $post){ ?> 
    <div class="post">
        <p><?= $post->header ?></p>    
        <p><?= $post->date ?></p>    
        <p><?= $post->content ?></p> 
    </div>
     
    <a href="posts/destroy/<?= $post->id ?>">Delete</a>
<?php } ?>


</div>
<a href="posts/create">Create new post</a>
