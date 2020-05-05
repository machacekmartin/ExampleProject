<h1 class="heading">Upload new image</h1>
<form method="POST" enctype="multipart/form-data" class="image-form">
    <input type="text" name="header" placeholder="Image title" class="header input-text" maxlength="30">
    <div class="image flex">
        <input type="file" name="image" class="file" onchange="previewUpload(event)">
    </div>
    <div class="result flex row">
        <input type="submit" value="Upload" class="button">
        <img id="preview" class="preview">
    </div>
    <input type="hidden" name="action" value="images">
</form>
<a href="/images">Back</a>


<script>
var previewUpload = function(event) {
	document.getElementById('preview').src = URL.createObjectURL(event.target.files[0]);
};
</script>