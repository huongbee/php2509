<?php

abstract class UserProvider{

    public $name = 'Khoa Pham';
    
    function getName(){
        return self::$name;
    }
    protected abstract function getAge();
    abstract function getPhone();

}
class User extends UserProvider{

    function getName(){
        return parent::$name;
    }
    function getAge(){
        return 45;
    }
    function getPhone(){}
}

// echo User::$name; //false
// $user = new User;
// echo $user->name;
// echo User::getAge();
// echo $user->getName(); //false
echo User::getName();
?>