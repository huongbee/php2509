<?php

$file = $_FILES['avatar'];

foreach($file['tmp_name'] as $key=>$tmpName){
    $name = $file['name'][$key];
    move_uploaded_file($tmpName,"../avatars/$name");
}


// foreach($file['name'] as $key=>$Name){
//     $tmpname = $file['tmp_name'][$key];
//     move_uploaded_file($tmpname,"../avatars/$Name");
// }
// 
// print_r($file);
/**
  * Upload nhiều file cùng lúc
  * 1. Chỉ cho phép upload các file hình ảnh (png, jpg, gif)
  * 2. File upload không quá 1 MB
  * 3. Đổi tên file trước khi upload
  */

?>