<?php
session_start();

if(isset($_POST['btnLogin'])){
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];
    if($username == 'admin' && $password == '111111'){
        $_SESSION['userInfo'] = $username;
        header('Location:home.php');
    }
    else{
        if($username!='admin'){
            $_SESSION['message'] = 'Sai username';
        }
        elseif($password!='111111'){
            $_SESSION['message'] = 'Sai password';
        }
        header('Location:login.php');
    }
}
else{
    $_SESSION['message'] = 'Vui lòng đăng nhập';
    header('Location:login.php');
}
?>