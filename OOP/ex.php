<?php

class User{
    public $name = 'KPT';
}

$user = new User;
$user->age = 20; // true
// $user->getAge(); // false
var_dump($user);
// echo $user->name;


function inSo(){
    $a = 10;
    echo $a;
}

function printNumber($number=765432){
    echo $number;
}

$a = 123;
printNumber($a);
?>