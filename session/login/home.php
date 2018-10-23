<?php
session_start();
if(isset($_SESSION['userInfo'])){
    // dùng giá trị $_SESSION['userInfo'] truy vấn db 
    // => tìm user với thông tin $_SESSION['userInfo']
    // lưu thông tin của user vào $user nếu tìm thấy
    // nếu ko tìm thấy $user = false
    $user = [
        'username'=>'admin',
        'password'=>'111111',
    ];
    if(!$user){
        $_SESSION['message'] = 'Không tìm thấy user';
        header('Location:login.php');
    }
}
else{
    $_SESSION['message'] = 'Vui lòng đăng nhập';
    header('Location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h3>Hello, <?=$_SESSION['userInfo']?></h3>
    <div><a href="logout.php">Logout</a></div>
</body>
</html>