<?php

abstract class UserProvider{

    public static $name = 'Khoa Pham';
    const AGE = 20;
    
    function getName(){
        return self::$name;
    }
    function printData(){
        return $this->getName();
    }
    protected abstract function getAge();
    abstract function getPhone();

}
class User extends UserProvider{

    public static $ten = 'Teo';

    function getTen(){
        return self::$ten;
    }
    function getName(){
        return parent::$name;
    }
    function getAge($age = 123){
        return 45;
    }
    function getPhone(){}
}
echo User::printData();

// echo User::$name; 
// echo User::AGE; 
// $user = new User; // false
// echo $user->name; // false
// echo User::getAge();
// echo $user->getName(); //false
// echo User::getTen();

?>