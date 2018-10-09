<?php

$string = "Hello world!";
$a = 12.5;

$bool = false;
$arr = [12,34,56,78,453,'Name'];

$data = [
    'code'=>0,
    'message' => '',
    'data'=>$arr
];

$json = json_encode($arr);
echo $json;
echo gettype($json);

// var_dump($arr);
// print_r($arr);
// echo gettype($bool);
// echo $string;


// class User{
//     var $name = 'KPT';
// }

// $user = new User;
// echo var_dump($user);




?>