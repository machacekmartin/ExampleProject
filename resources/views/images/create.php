<h1 class="heading">Upload new image</h1>
<form method="POST" enctype="multipart/form-data" class="create-form image-form">
    <input type="text" name="header" placeholder="Image title" class="header input-text transition" maxlength="30" required>
    <div class="image transition">
        <input type="file" name="image" class="file" onchange="previewUpload(event)" required>
    </div>
    <div class="result flex row">
        <input type="submit" value="Upload" class="button transition">
        <img id="preview" class="preview">
    </div>
    <input type="hidden" name="action" value="images">
</form>

<script>
var previewUpload = function(event) {
	document.getElementById('preview').src = URL.createObjectURL(event.target.files[0]);
};
</script>