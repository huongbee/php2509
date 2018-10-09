<?php

// $arr1 = [
//     'key1'=>23,
//     'key2'=>45,
//     'key3'=>454,
//     'key4'=>'Khoa Pham',
//     'key5'=>true
// ];
// foreach($arr1 as $key => $value){
//     if($key=='key2'){
//         $arr1['key6'] = $arr1[$key];
//         unset($arr1[$key]);
//     }
// }
// foreach($arr1 as $key => $value){
//     echo $key . ': '.$value;
//     echo "<br>";
// }



// foreach($arr1 as $value){
//     echo $value;
//     echo "<br>";
// }


// $count = count($arr1);
// for($i=1; $i <= $count;$i++){
//     echo $arr1['key'.$i]; // key1
//     echo "<br>";
// }

// echo $arr1['key4'];
// print_r($arr1);

// $count = count($arr2);
// for($i=0; $i < $count;$i++){
//     echo $arr2[$i];
//     echo "<br>";
// }
$arr0 = [
    'key1'=>23,
    'key2'=>99,
];
$arr1 = [
    'key1'=>23,
    'key2'=>45,
    'key3'=>454,
    'key4'=>'Khoa Pham',
    'key5'=>true,
    $arr0
];
$arr2 = array(12,34,'KPT',false,'adsdas',$arr1);
echo $arr2[5][0]['key2'];
// print_r($arr2);






?>