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
    select{
        width: 120px
    }
</style>
<?php
// if(isset($_GET['txtSoa'])){
//     $a = $_GET['txtSoa'];
// }
// else $a = 0;

if(isset($_GET['btn'])){
    $a = isset($_GET['txtSoa']) ? (float)$_GET['txtSoa'] : 0;
    $b = isset($_GET['txtSob']) ? (float)$_GET['txtSob'] : 0;
    // $a = isset($_GET['txtSoa']) && is_numeric($_GET['txtSoa']) ? $_GET['txtSoa'] : 0;
    // $b = isset($_GET['txtSob']) && is_numeric($_GET['txtSob']) ? $_GET['txtSob'] : 0;
    $pt = isset($_GET['txtPheptinh']) ? $_GET['txtPheptinh'] : '';
    /*
    switch($pt){
        case '+':
            $kq = $a+$b;break;
        case '-':
            $kq = $a-$b;break;
        default:
            if($b==0){
                $kq = "B phải khác 0";
            }
            else $kq = $a%$b;
    }
    */

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
        else $kq = round($a/$b,2);
    }
    else{
        if($b==0){
            $kq = "B phải khác 0";
        }
        else $kq = $a%$b;
    }
    // echo $kq;
}
?>

<body>
    <form method="GET">
        <input type="text" value="<?=isset($a)? $a : ''?>" placeholder="Enter number a" name="txtSoa">
        <select name="txtPheptinh">
            <option>Chọn phép tính</option>
            <option value="+" <?= isset($pt) && $pt=='+' ? 'selected': ''?>>+</option>
            <option value="-" <?= isset($pt) && $pt=='-' ? 'selected': ''?>>-</option>
            <option value="*" <?= isset($pt) && $pt=='*' ? 'selected': ''?>>*</option>
            <option value="/" <?= isset($pt) && $pt=='/' ? 'selected': ''?>>/</option>
            <option value="%" <?= isset($pt) && $pt=='%' ? 'selected': ''?>>%</option>
        </select>
        <input type="text" value="<?=isset($b)? $b : ''?>" placeholder="Enter number b" name="txtSob">
        <input type="submit" name="btn" value="Calculate"/>
        <input type="text" placeholder="Result" value="<?=isset($kq)? $kq : ''?>">
    </form>
</body>
</html>