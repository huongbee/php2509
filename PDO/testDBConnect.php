<?php
include_once 'DBConnect.php';



$nameType = 'iPhone 8|8Plus';
$sql = "SELECT p.* 
        FROM products p
        INNER JOIN categories c
        ON c.id = p.id_type
        WHERE c.name='$nameType'";

$conn = new DBConnect();
$products = $conn->loadMoreRow($sql);
// print_r($products);
echo '<ul>';
foreach($products as $p){
    echo '<li>'.$p->name.': '.$p->price.'</li>';
}
echo "</ul>";

// $nameType = ['iPhone 8|8Plus'];
// $sql = "SELECT p.* 
//         FROM products p
//         INNER JOIN categories c
//         ON c.id = p.id_type
//         WHERE c.name=?";

// $conn = new DBConnect();
// $products = $conn->loadMoreRow($sql,$nameType);
// print_r($products);

// $idUser1 = 12;
// $idUser2 = 10;

// $sql = "SELECT * FROM users WHERE id=$idUser1 OR id=$idUser2";
// $user = $conn->loadMoreRow($sql);
// print_r($user);

// $data = [12];
// $sql = "SELECT * FROM users WHERE id=?";
// $user = $conn->loadOneRow($sql, $data);
// print_r($user);


// $sql = "DELETE FROM users WHERE id=?";
// $data = [9];
/*
$username = "manager02";
$password = md5(md5('111111111').'private_key');
$fullname = 'Nguyễn Văn Manger 02';
$birthdate = '2000-12-30';
$email = 'manager02@gmail.com';

$data = [$username, $password, $fullname,$birthdate, $email];

$sql = "INSERT INTO users(username,password,fullname, birthdate,email) 
        VALUES(?,?,?,?,?)";
$result = $conn->executeQuery($sql,$data);
if($result){
    echo $conn->getInsertedId();
}
else{
    echo 'error!';
}
*/

?>