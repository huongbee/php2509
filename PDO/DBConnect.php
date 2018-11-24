<?php

class DBConnect{

    private $connect = NULL;

    function __construct($dbName='shop_2509',$user = 'root',$pass = ''){
        $this->connect = new PDO("mysql:host=localhost;dbname=$dbName",$user,$pass);
        $this->connect->exec('set names utf8');
    }

    /**
     * Use for Insert/Update/Delete
     * $param: string $sql
     * $param: array $data = []
     * return bool
     */

    function executeQuery(string $sql, array $data=[]){
        $stmt = $this->connect->prepare($sql);
        for($i=1; $i<=count($data); $i++){
            $stmt->bindParam($i,$data[$i-1]);
        }
        return $stmt->execute();
    }
    /**
     * get recent insert Id
     * return id
     */
    function getInsertedId(){
        return $this->connect->lastInsertId();
    }
    
}



?>