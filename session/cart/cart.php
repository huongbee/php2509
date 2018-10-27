<?php
session_start();
// session_destroy();
if(!isset($_SESSION['cart'])){
    echo 'Cart is empty!';
    exit;
}
// print_r($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
table{
    width: 480px;
    height: 50px;
    text-align: center;
}
</style>
<body>
    <table border="1">
        <thead>
            <th>STT</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
        </thead>
        <tbody>
            <?php 
            $totalQty = 0;
            $totalPrice = 0;
            $stt = 1;
            foreach($_SESSION['cart'] as $item):
                $totalQty += $item['qty'];
                $totalPrice += $item['price'] * $item['qty'];
            ?>
            <tr>
                <td><?=$stt++?></td>
                <td><?=$item['name']?></td>
                <td><?=number_format($item['price'])?></td>
                <td><?=$item['qty']?></td>
                <td><?=number_format($item['price'] * $item['qty'])?></td>
            </tr>
            <?php endforeach?>
            <tr>
                <td colspan="3">Total:</td>
                <td><?=$totalQty?></td>
                <td><?=number_format($totalPrice)?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>