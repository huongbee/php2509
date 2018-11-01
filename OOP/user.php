<?php

class User{
    public $name;
    protected $age = 20;
    private $phone = '0987654321';
    const GENDER = 'Male';

    function __construct(){
        echo User::GENDER;
    }

    public function setName($ten){
        $this->name = $ten;
    }
    function getAge(){
        return 'your age: '.$this->age;
    }

    function getPhone(){
        return $this->phone;
    }
}


?>