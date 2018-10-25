<?php
include_once 'data/arraySP.php';
include_once 'data/function.php';

$id = $_POST['id'];

$sp = findProduct($id,$arraySP);

print_r($sp);












// echo $_GET['id'];
// echo (int)$_POST['id'];
// echo $_POST['name'];

// print_r($_POST);
// echo json_encode($_POST);

?>