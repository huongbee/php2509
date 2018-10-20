<?php

$file = $_FILES['avatar'];

foreach($file['size'] as $key=>$size){
    $name = $file['name'][$key];
    if($size>1024*1024){
        echo "File $name too large!";
        exit;
    }
}
$arrExt = ['png','jpg','gif']; 
foreach($file['name'] as $key=>$name){
    $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
    if(!in_array($ext,$arrExt)){
        echo "File $name not allow!";
        exit;
    }
}

foreach($file['tmp_name'] as $key=>$tmpName){
    $name = rand(10000,100000).'-'.$file['name'][$key];
    move_uploaded_file($tmpName,"../avatars/$name");
}


// foreach($file['name'] as $key=>$Name){
//     $tmpname = $file['tmp_name'][$key];
//     move_uploaded_file($tmpname,"../avatars/$Name");
// }
// 
// print_r($file);
/**
  * Upload nhiều file cùng lúc, rollback neu co bat ki file nao ko thoa man
  * 1. Chỉ cho phép upload các file hình ảnh (png, jpg, gif)
  * 2. File upload không quá 1 MB
  * 3. Đổi tên file trước khi upload
  */

?>