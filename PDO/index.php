<?php


$user = 'root';
$pass = '';

try{
    $connect = new PDO('mysql:host=localhost;dbname=shop_2509',$user,$pass);
    $connect->exec('set names utf8');

}
catch(PDOException $e){
    echo $e->getMessage();
    die;
}

// $sql = "DELETE FROM users WHERE id > 4";

// $username = "admin02";
// $password = md5(md5('111111111').'private_key');
// $fullname = 'Nguyễn Văn A';
// $birthdate = '2000-12-30';
// $email = 'admin02@gmail.com';

// $sql = "INSERT INTO users(username,password,fullname, birthdate,email) 
//         VALUES('$username','$password','$fullname','$birthdate','$email')";
        
// $check = $connect->exec($sql);
// var_dump($check);
// echo "<div>";

// $sql = "SELECT * FROM users";
// $result = $connect->query($sql,PDO::FETCH_OBJ);
// $result = $connect->query($sql,PDO::FETCH_ASSOC);
// $result = $connect->query($sql,PDO::FETCH_BOTH);
// $result = $connect->query($sql,PDO::FETCH_NUM);

// print_r($result);
// foreach($result as $r){
//     print_r($r);
//     // echo $r['username'];
//     // echo $r->username;
//     // echo "<br>";
// }



// $sql = "DELETE FROM users WHERE id = 11";
// $stmt = $connect->prepare($sql);
// $check = $stmt->execute();
// var_dump($check);


$sql   = "SELECT * FROM users";
$stmt  = $connect->prepare($sql);
$check = $stmt->execute();
if($check){
    // $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    $result = $stmt->fetch(PDO::FETCH_OBJ);
    print_r($result);
}
else{
    echo "Error: review query";
}



?>