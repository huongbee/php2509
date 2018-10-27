<?php
session_start();
include_once 'data/arraySP.php';
include_once 'data/function.php';

$id = isset($_POST['id']) ? $_POST['id'] : null;
if($id!==null){
    $sp = findProduct($id,$arraySP);
    if(!empty($sp)){
        // if(!isset($_SESSION['cart'])){
        //     $_SESSION['cart'] = [
        //         $id => $sp
        //     ];
        // }
        // else{
        //     $_SESSION['cart'][$id] = $sp;
        // }
        
        $_SESSION['cart'][$id] = $sp;
        echo 'Add to cart success';
    }
    else{
        echo 'Not found!';
    }
}
else{
    echo 'Plz choose product';
}









// echo $_GET['id'];
// echo (int)$_POST['id'];
// echo $_POST['name'];

// print_r($_POST);
// echo json_encode($_POST);

?>