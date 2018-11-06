<?php

class User{
    public $name = 'KPT';
}

$user = new User;
$user->age = 20; // true
$user->getAge(); // false
var_dump($user);
// echo $user->name;

?>