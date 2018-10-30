<?php

class Calculate{

    var $a;
    var $b;

    function setValue($soA, $soB){
        $this->a = $soA;
        $this->b = $soB;
    }

    function plus(){
        return $this->a + $this->b;
    }
}



?>