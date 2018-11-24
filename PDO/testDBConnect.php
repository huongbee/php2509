<?php
include_once 'DBConnect.php';


$conn = new DBConnect();

// $sql = "DELETE FROM users WHERE id=?";
// $data = [9];

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

?>