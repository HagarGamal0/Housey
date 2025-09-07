<?php

//header file is included
include 'inc/header.php';

//user file is included here
include 'lib/user.php';
$user = new user;

session::userSession();

print_r($_SESSION);
?>

<!-- body area started from here -->

