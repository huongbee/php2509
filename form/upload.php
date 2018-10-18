<?php

//$file = $_POST['avatar']; //false
$file = $_FILES['avatar'];

$tmpName = $file['tmp_name'];
$name = $file['name'];

move_uploaded_file($tmpName,"avatars/$name");

echo 'thanh cong';
//print_r($file);

/**
 * 
 * Upload file vào thư mục avatars, với các yêu cầu sau:
 * 1. Chỉ cho phép upload các file hình ảnh (png, jpg, gif)
 * 2. File upload không quá 1 MB
 * 3. Đổi tên file trước khi upload
 * 
 */

 /**
  * Upload nhiều file cùng lúc
  * 1. Chỉ cho phép upload các file hình ảnh (png, jpg, gif)
  * 2. File upload không quá 1 MB
  * 3. Đổi tên file trước khi upload
  */


?>