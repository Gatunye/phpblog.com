<?php
require './config/config.php';

$image_desc = $_POST['image_description'];

$image = $_FILES['image_upload'];

$temp_loc = $image['tmp_name'];
var_dump($temp_loc);
exit();
$image_name = $image['name'];
$temp = &$temp_loc;

$new_image_loc = 
                GETDATE()[0]
                .".". pathinfo($image_name, PATHINFO_EXTENSION);

$gallery_url = BASE_URL . '/storage/images/'.$new_image_loc;


$new_image_loc = IMAGE_URL."/".
                    GETDATE()[0].".". 
                    pathinfo($image_name, PATHINFO_EXTENSION);
move_uploaded_file($temp_loc, $new_image_loc);


?>
<img src="<?=$gallery_url;?>" style="width: 300px; height: auto;">