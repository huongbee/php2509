<?php
session_start();
include_once 'data/arraySP.php';
include_once 'data/function.php';

$id = isset($_POST['id']) ? $_POST['id'] : null;
if($id!==null){
    $sp = findProduct($id,$arraySP);
    if(!empty($sp)){
        $_SESSION['cart'] = isset($_SESSION['cart']) ? $_SESSION['cart'] : null;

        if($_SESSION['cart'] != null && array_key_exists($id,$_SESSION['cart'])){
            $_SESSION['cart'][$id]['qty'] += 1; 
        }
        else{
            $sp['qty'] = 1;
            $_SESSION['cart'][$id] = $sp;
        }
        
        echo 'Add to cart success';
    }
    else{
        echo 'Not found!';
    }
}
else{
    echo 'Plz choose product';
}



// [id] => 5
// [name] =>  iPhone 6 32GB
// [price] => 7200000
// [image] => 42/92962/iphone-6-32gb-vang-400-400x460.png
// [qty] => 1

// echo $_GET['id'];
// echo (int)$_POST['id'];
// echo $_POST['name'];

// print_r($_POST);
// echo json_encode($_POST);

?>