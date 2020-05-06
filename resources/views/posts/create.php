<h1 class="heading">Create new post</h1>
<form method="POST" class="create-form post-form flex column">
    <input type="text" name="header" placeholder="Title" class="input-text transition" maxlength="40" required>
    <textarea name="content" placeholder="Contents of your post" class="input-text transition" rows="12" maxlength="750" minlength="50" required></textarea>
    <input type="submit" value="Create new post" class="button transition">
    <input type="hidden" name="action" value="posts">
</form>