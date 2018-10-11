<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bt3.css">
</head>

<?php
// include '../arraySP.php';
// include_once '../arraySP.php';
// require '../arraySP.php';
require_once '../arraySP.php';

// exit;
// die('thong bao');
?>


<body>
    <div class="content">
        <?php
        foreach($arraySP as $sanpham):
        ?>
        <div class="sanpham">
            <div class="hinhsp">
                <img src="image/phone.png" alt="">
            </div>
            <div class="thongtin">
                <h2>Oppo F1S</h2>
                <li>Cơ hội trúng 30 xe Wave Alpha khi trả </li>
                <li>Cơ hội trúng 30 xe Wave Alpha khi trả </li>
                <li class="khuyenmai">Khuyến mãi</li>
                <li>Cơ hội trúng 30 xe Wave Alpha khi trả </li>
                <li>Cơ hội trúng 30 xe Wave Alpha khi trả </li>
            </div>
            <div class="tensp">Oppo F1S</div>
            <div class="giasp">7.000.000</div>
        </div>
        <?php
        endforeach
        ?>
       
    </div>
</body>
</html>