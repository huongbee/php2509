<?php

class User{

    var $name = 'noname';

    function setName(string $ten = ''){
        $this->name = $ten;
    }

    function getName(){
        return $this->name;
    }
}

$userA = new User;
$userA->name = 'Khoa Pham Training'; // set name
$userA->setName('KPT');
$name = $userA->getName();
echo $name;

// echo $userA->name;                  //get name
// var_dump($userA);
// $userB = new User;
// var_dump($userA);
// var_dump($userB);

// if($userA === $userB){
//     echo 'yes';
// }
// else echo 'no';



// $a = 2;
// $b = '2';
// if($a === $b){
//     echo 'yes';
// }
// else echo 'no';



?>