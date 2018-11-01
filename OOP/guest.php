<?php
include_once 'user.php';

class Guest extends User{

    public $name = 'Ti';
    const NAME = 'Nam';
    

    function getAge(){
        return $this->age;
    }

    function getData(){
        return parent::NAME;
        // return self::NAME;
        // return Guest::NAME;
        // return self::getAge();
        // return $this->getAge();
        // return parent::getAge();
    }

}

$guest = new Guest;



// $guest = new Guest;
// echo $guest::NAME;
// echo Guest::NAME;
// echo Guest::name; //false

// echo $guest->getData();








// $guest = new Guest;
// $guest->setName('Teo');
// echo $guest->getData();
// echo $guest->name;
// echo $guest->age; // false
// echo $guest->getAge();
// echo $guest->getPhone();


// var_dump($guest);




// const PI = 3.14;
// define('R', 10);
// echo R;



?>