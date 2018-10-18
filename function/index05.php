<?php
//9 
//2 3 4 5

//25 -> 5
// 2 3 4 5 


// 7 
// 2 3 4 5 6 

function isPrimeNumber($n){        
    $sqrt = sqrt($n);
    if($n<2){
        return 0;
    }
    for($i=2;$i<=$sqrt;$i++){
        if($n%$i == 0){
            return 0;
        }
    }
    return 1;
}

function printPrimeNumber($n){
    $value = '';
    
    if($n >= 2){
        $value = '2';
    }
    for($i=3; $i<=$n; $i+=2){
        if(isPrimeNumber($i)){
            $value .=' '.$i;
        }
    }
    return $value;
}
$n = 100;
echo "Day so nguyen to nho hon $n la:<br>".printPrimeNumber($n);
