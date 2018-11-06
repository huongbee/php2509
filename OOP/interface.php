<?php

interface Law{

    function law1();
    function law2();

}
interface LawB{

    function lawA();
    function lawB();
    function law1($name=[]);
}

class SubLaw implements Law,LawB{
    public $name = 'ATGT';

    function law1($name=[]){

    }
    function law2(){

    }
    function lawA(){
        
    }
    function lawB($A=12345){

    }
    function law3(){
        echo 234;
    }
}

$law = new SubLaw;
echo $law->name;
echo $law->law3();

?>