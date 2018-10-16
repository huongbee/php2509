<?php

// function sayHello($name = 'Guide'){
//     return 'Hello, '.$name;
// }

// echo sayHello('Khoa Pham');
// echo "<br>";
// echo sayHello();
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
// tangMot(2,4); // false

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

// function tinhTong(array $arr){
//     $tong = 0;
//     foreach($arr as $value){
//         $tong += $value;
//     }
//     return $tong;
// }

// echo tinhTong([1,2,3]);

// $a = 4;
// echo tinhTong($a);

// function returnArray(int $a, int $b, int $c):array{
//     // return $a+$b+$c; false
//     return [$a, $b, $c]; // true
// }

// $data = returnArray(1,3,323);

// print_r($data);


// function tinhTong(int ... $a){
//     return $a;
// }

function tinhTong(int ... $a):int{
    $tong = 0;
    for($i = 0; $i < count($a); $i ++){
        $tong += $a[$i];
    }
    return $tong;

    // foreach($a as $value){
    //     $tong+=$value;
    // }
    // return $tong;
}

$data = tinhTong(3, 5, 4, 7);
$data2 = tinhTong(3, 5, 4, 7, 54, 56);

print_r($data);
echo "<br>";
print_r($data2);


?>