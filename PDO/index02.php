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

if(isset($_GET['id'])){
    $idUser = (int) $_GET['id'];
    $username = 'huong02';
    // $sql = "SELECT * FROM users WHERE id=? OR username=?";
    // $st->bindValue(1,$idUser);
    // $st->bindValue(2,$username);

    // $sql = "SELECT * FROM users WHERE id=:id OR username=:username";
    // $st = $connect->prepare($sql);
    // $st->bindValue(':id',$idUser);
    // $st->bindValue(':username',$username);

    $sql = "SELECT * FROM users WHERE id=:id OR username=:username";
    $st = $connect->prepare($sql);
    // $st->bindValue(':id',1);
    // // $st->bindParam(':id',$idUser);
    // $st->bindParam(':username',$username);

    $check = $st->execute([':id'=>$idUser,':username'=>$username]);
    if($check){
        $user = $st->fetchAll(PDO::FETCH_OBJ);
        // $user = $st->fetch(PDO::FETCH_OBJ);
        $count = $st->columnCount();
        echo $count;
        // var_dump($user);
        if($user){
            print_r($user);
            // echo $user->username;
        }
        else{
            echo "User not found!";
        } 
    }
    else{
        echo "wrong query";
    }
}
else{
    echo 'Vui lòng nhập user id';
}


// if(isset($_GET['id'])){
//     $idUser = (int) $_GET['id'];
//     $sql = "SELECT * FROM users WHERE id=$idUser";
//     $st = $connect->prepare($sql);
//     $check = $st->execute();
//     if($check){
//         $user = $st->fetch(PDO::FETCH_OBJ);
//         // var_dump($user);
//         if($user){
//             echo $user->username;
//         }
//         else{
//             echo "User not found!";
//         } 
//     }
//     else{
//         echo "wrong query";
//     }
// }
// else{
//     echo 'Vui lòng nhập user id';
// }
?>