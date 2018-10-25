<?php

function findProduct(string $id, array $array):array{
    foreach($array as $item){
        if($id == $item['id']){
            return $item;
        }
    }
    return [];
}



?>