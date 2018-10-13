<?php

// function inSo(){
//     for($i=1;$i<=6;$i++){
//         echo $i.' ';
//     }
// }
// inSo();
// $a = inSo();
// echo $a;

// function inSo(){
//     $value = '';
//     for($i=1;$i<=6;$i++){
//        $value .= $i.' '; // $value = $value . $i . ' ';
//     }
//     return $value; // 1 2 3 4 5 6
// }

// $a = inSo();
// echo $a;


function inSo($min, $max){
    $value = '';
    if($min<=$max){
        for($i=$min;$i<=$max;$i++){
            $value .= $i.' '; // $value = $value . $i . ' ';
        }
    }
    else{
        for($i=$min;$i>=$max;$i--){
            $value .= $i.' '; // $value = $value . $i . ' ';
        }
    }
    return $value; // 1 2 3 4 5 6
}

$a = inSo(10,1); // 10 9 8 7 6 ... 1
$b = inSo(1,10); 

echo $a;
echo "<br>";
echo $b;




?>