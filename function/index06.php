<?php
//number = 25 -> 5
// 2 3 4 5 

function checkSNT(int $number):bool{
    if($number == 2) return true;
    for($i=2; $i <= sqrt($number); $i++){
        if($number%$i == 0){
            return false;
        }
    }
    return true;
}

function inSNT(int $number):string{
    if($number <= 2){
        return 'Can not find...';
    }
    $data = "Day cac SNT < $number: ";
    for($i=2; $i<=$number; $i++){
        if(checkSNT($i)){
            $data .= $i . ' ';
        }
    }
    return $data;
}

echo inSNT(2);



?>