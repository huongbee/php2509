<?php

function sayHello($name = 'Guide'){
    return 'Hello, '.$name;
}

// echo sayHello('Khoa Pham');
// echo "<br>";
// echo sayHello('An');
// echo "<br>";
// echo sayHello('Thanh');
// echo "<br>";

// $name = "KPT";
// echo sayHello($name);

// function tangMot(&$a, &$b){
//     ++$a; // $a = $a + 1;
//     return ++$b;
// }

// $soA = 10; // 20
// $soB = 20; // 10
// tangMot($soA,$soB); // 11
// echo $soA;
// echo $soB;


// function swap(&$a,&$b){
//     $temp = $a;
//     $a = $b;
//     $b = $temp;
// }

// swap(2,1);
// $soA = 10;
// $soB = 20; 
// swap($soA,$soB);

// echo 'a='.$soA;
// echo "<br>";
// echo 'b='.$soB;


// function tangMot(int $a){
//     return ++$a; 
// }

// $a = 'string';
// $a = 2;
// echo tangMot($a);
function tinhTong(array $arr){
    $tong = 0;
    foreach($arr as $value){
        $tong += $value;
    }
    return $tong;
}

echo tinhTong([1,2,3]);

$a = 4;
echo tinhTong($a);
echo tinhTong([1,2,3]);
echo tinhTong([1,2,3]);
echo tinhTong([1,2,3]);
    
?>