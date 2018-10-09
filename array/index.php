<?php

$arr1 = [
    'key1'=>23,
    'key2'=>45,
    'key3'=>454,
    'key4'=>'Khoa Pham',
    'key5'=>true
];
// echo $arr1['key4'];
// print_r($arr1);

$arr2 = array(12,34,'KPT',false,'adsdas',3,4,6,7,3,3);

$count = count($arr2);
for($i=0; $i < $count;$i++){
    echo $arr2[$i];
    echo "<br>";
}





?>