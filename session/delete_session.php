<?php
session_start();

unset($_SESSION['user']); //xoa session voi key user

session_destroy(); // delete all



?>