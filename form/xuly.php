<?php

if($_GET['txtNumber1'] =='' || !is_numeric($_GET['txtNumber1'])){
    echo "enter number 1";
}
else if($_GET['txtNumber2'] =='' || !is_numeric($_GET['txtNumber2'])){
    echo "enter number 2";
}
else {
    $r = $_GET['txtNumber1'] + $_GET['txtNumber2'];
    echo $r;
}

?>