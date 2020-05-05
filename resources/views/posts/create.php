<h1 class="heading">Create new post</h1>
<form method="POST" class="post-form flex column">
    <input type="text" name="header" placeholder="Title" class="input-text" maxlength="40">
    <textarea name="content" placeholder="Contents of your post" class="input-text" rows="20" maxlength="750" minlength="50"></textarea>
    <input type="submit" value="Create new post" class="button">
    <input type="hidden" name="action" value="posts">
</form>
<a href="/posts">Back</a>