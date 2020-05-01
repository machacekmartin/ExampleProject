<br>

<?php 

foreach($data as $post){
    ?>   
    <p><?= $post->header ?></p>    
    <p><?= $post->date ?></p>    
    <p><?= $post->content ?></p>  
    <a href="posts/destroy/<?= $post->id ?>">Delete</a>
    <hr>
    <?php  
}
?>
<a href="posts/create">Create new post</a>
