<?php
//file type validation
if($_FILES['personal_image']['error']!=0){
    die("Please upload an image");
}
$file = $_FILES['personal_image']['tmp_name'];

$type = mime_content_type($file);
$size = $_FILES['personal_image']['size'];

$images = ['image/png', 'image/jpeg'];

if ($type != 'image/png' && $type != 'image/jpeg') {
    die('Image type must be jpeg or png');
}
// MB size validation
$mb_size = $size / 1024 / 1024;
if ($mb_size > 5) {
    die('Your image size be must less tha 5 mb.');
}
//Unquie name for photoes
switch ($type) {
    case "image/png":
        $ext = ".png";
        break;
    case "image/jpeg":
        $ext = ".jpeg";
        break;
}

$file_name=uniqid().$ext;
move_uploaded_file($file,"./uploads/$file_name");




?>