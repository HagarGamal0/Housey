<?php

$filepath = realpath(dirname(__FILE__));
include_once $filepath.'/../lib/session.php';
session::init();



//logout mechanism is created here
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action'])){
    session::destroy();
}


?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>user signup</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="./assets/css/normalize.css">
	<link rel="stylesheet" href="./assets/fontawesome/css/all.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
<div class="background" id="background" ></div>
