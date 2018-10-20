<?php

$file = $_FILES['avatar'];
$tmpName = $file['tmp_name'];
$name = $file['name'];

if($file['size'] <= 1024*1024){

    $ext = strtolower(pathinfo($name,PATHINFO_EXTENSION));
    $arrExt = ['png', 'jpg', 'gif'];
    if(in_array($ext,$arrExt)){

        // 2018-10-20-19-58-24-a.png
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $newName = date('Y-m-d-H-i-s',time()).'-'.$name;
        move_uploaded_file($tmpName,"avatars/$newName");

        if(file_exists("avatars/$newName")){
            echo 'thanh cong';
        }
        else{
            echo 'Upload fail';
        }
    }
    else{
        echo 'File not allow!';
    }
}
else{
    echo "File too large!";
}



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