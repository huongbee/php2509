<?php
class User{

    public $name = 'Nam Nguyen';

}
echo '<div>';

$userA = new User;
$userA->name = 'Hoang';
echo $userA->name;

echo '<br>';
$userB = new User;
echo $userB->name;

?>