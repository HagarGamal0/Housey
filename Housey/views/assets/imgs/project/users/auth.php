
<?php
include_once('./connection.php');
include_once('./lib/user.php');

$user= new user($pdo);

 function register($data ){

   global $user;

 $user->userRegistration($data);

 }

 function login($data){

    global $user;
$user->userLogin($data);


 }


 













?>