<?php
//function xu ly chuoi

// $str = "Count the number of substring occurrences";
// $pos = strpos($str,'numbers');
// $len = strlen($str);
// $str = str_replace('number','numbers',$str);
// $str = strtoupper($str);
// $str = strtolower($str);
// $str = ucwords($str);
// $str2 = 'count the number of substring occurrences';
// $str = ucfirst($str2);
// echo $str;

// number
// $price = 20000.01;
// $price = number_format($price); //20
// $price = number_format($price,2); // 20.00
// $price = number_format($price,2,',','.'); 
// $price = ceil($price); // 20001
// $price = floor($price);
// $price = round($price,1);
// echo $price;
// $number = 2;
// echo pow($number,-3); //2^3
// echo sqrt(9);
// echo abs(-4);


//datetime

// echo date_default_timezone_get();
date_default_timezone_set('Asia/Ho_Chi_Minh');
// echo date_default_timezone_get();
// echo time();
// $date = getdate(time());
// echo $date['mday'].'/'.$date['mon'].'/'.$date['year'];

// print_r($date);
//1539435950 -> 13/10/2018 20:45:24
// $time = time();
// echo date('d/m/Y H:i:s',$time);

// 2018-10-14 20:25:41; -> 14/10/2018 20:25:41
$timestamp = strtotime('2018-10-2 20:25:41');
echo date('j/m/Y H:i:s',$timestamp);

//insert to db: time() -> Y-m-d:  date('Y-m-d',time());
//get from db: Y-m-d -> d/m/Y: date('d/m/Y',strtotime('Y-m-d')))


?>