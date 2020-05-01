
<h1>IMAGES</h1>

<?php 
    echo "<pre>", var_dump($data) ,"</pre>";
?>

<form method="POST" enctype="multipart/form-data">

    <input type="text" name="header" placeholder="header">
    <br>
    <input type="file" name="src" placeholder="src">
    <br>
    <input type="hidden" name="action" value="images">
    <br>
    <input type="submit" value="Create new post">
</form>