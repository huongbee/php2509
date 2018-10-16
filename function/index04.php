<?php


function tinhTong(int ... $a):array{
    $tong = 0;
    for($i = 0; $i < count($a); $i ++){
        $tong += $a[$i];
    }
    return $tong;
}


// try{
//     $data = tinhTong(3, 5, 4, 7); //
//     print_r($data);
// }
// catch(Error $e){
//     echo $e->getMessage();
// }

function phepChia(int $a,int $b):float{
    if($b == 0){
        // return 'Error!';
        throw new Exception('Can not devide 0');
    }
    return $a/$b;
}


try{
    echo phepChia(2,0);
}
catch(Exception $e){
    echo $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Hello Class</h2>
</body>
</html>