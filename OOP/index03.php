<?php

include_once 'index02.php';

$obj = new Calculate;
$a = 10;
$b = 20;
$obj->setValue($a, $b);
echo $obj->plus();


$a = 1;
$b = 4;
$obj->setValue($a, $b);
echo $obj->plus();


?>