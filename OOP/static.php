<?php

class User{

    public static $name = 'Nam Nguyen';

    static function getName($a = '12345'){
        echo $a;
        return User::$name;
    }
}
echo '<div>';

$userA = new User;
$userA::$name = 'Hoang';
echo $userA::$name;

echo '<br>';
echo User::getName('76543');
// $userB = new User;
// echo $userB->getName();
// echo $userB::getName();
// echo $userB::$name;

// echo '<br>';

// $userC = new User;
// $userC::$name = 'Huy';
// echo $userC::$name;

// echo '<br>';
// $userD = new User;
// echo $userD::$name;

?>
