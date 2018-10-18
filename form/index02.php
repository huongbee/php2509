<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input{
        height: 30px;
        width: 80px
    }
    button,select{
        height: 35px;
        width: 50px
    }
    button{
        width: 100px
    }
</style>
<?php
// if(isset($_GET['txtSoa'])){
//     $a = $_GET['txtSoa'];
// }
// else $a = 0;
if(isset($_GET['btn'])){
    $a = isset($_GET['txtSoa']) ? $_GET['txtSoa'] : 0;
    $b = isset($_GET['txtSob']) ? $_GET['txtSob'] : 0;
    $pt = isset($_GET['txtPheptinh']) ? $_GET['txtPheptinh'] : '';
    // $kq = '';
    if($pt=='+'){
        $kq = $a+$b;
    }
    elseif($pt=='-'){
        $kq = $a-$b;
    }
    elseif($pt=='*'){
        $kq = $a*$b;
    }
    elseif($pt=='/'){
        if($b==0){
            $kq = "B phải khác 0";
        }
        else $kq = $a/$b;
    }
    else{
        if($b==0){
            $kq = "B phải khác 0";
        }
        else $kq = $a%$b;
    }
    echo $kq;
}
?>
<body>
    <form method="GET">
        <input type="text" placeholder="Enter number a" name="txtSoa">
        <select name="txtPheptinh">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            <option>%</option>
        </select>
        <input type="text" placeholder="Enter number b" name="txtSob">
        <button name="btn">Calculate</button>
        <input type="text" placeholder="Result">
    </form>
</body>
</html>