<?php

class Calculate{
    public $a = 5;   
    protected $b = 4;
    private $c = 3;

    function __construct($soA, $soB){
        $this->a = $soA;
        $this->b = $soB;
    }
    function plus(){
        return $this->a + $this->b;
    }
    protected function getB(){
        echo '....';
        return $this->b;
    }

    function getBB(){
        return $this->getB();
    }
    function getC(){
        return $this->c;
    }
    // function __destruct(){
    //     echo "<br>";
    //     echo __CLASS__ . __FUNCTION__ . ' được gọi'; 
    // }
}


$a = 10;
$b = 20;
$obj = new Calculate($a, $b);
echo $obj->getBB();
// echo $obj->c;  





// echo "<div>";

// $a = 10;
// $b = 20;
// $obj = new Calculate($a, $b);
// echo $obj->plus();
// echo $obj->a;




?>