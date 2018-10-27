<?php
session_start();
// session_destroy();
if(isset($_SESSION['cart'])){
    print_r($_SESSION['cart']);
}
else{
    echo 'Cart is empty!';
}



?>