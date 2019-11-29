<?php
require './config/config.php';
include_once './inc/header.inc.php';
include_once './inc/nav.inc.php';
?>

<form   method="post" 
        enctype="multipart/form-data" 
        action="<?=BASE_URL . '/process_upload.php'; ?>"
        style="margin-top: 100px;">

    <input type="file" name="image_upload" >
    <textarea name="image_description">
    </textarea>

    <button type="submit">Add Image to Gallery </button>
</form>








</body>

</html>