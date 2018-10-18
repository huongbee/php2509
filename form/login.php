<?php
if(isset($_POST['btnLogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'admin' && $password == '111111'){
        echo "chào bạn, $username";
    }
    else{
        echo "sai thong tin dang nhap";
    }
}

?>