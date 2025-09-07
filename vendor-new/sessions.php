<?php
// $_POST/$_GET/$_REQUEST/$_SERVER
//  print_r($_POST);
// session
session_start();
$_SESSION["user_name"]="ahmed";
$_SESSION["user_email"]="ahmed@gmail.com";
$_SESSION["count"]=1;
echo session_id();
// print_r($_SESSION);
// $_SESSION=[];
session_unset();
session_destroy();
echo __LINE__."<br>";
// $_SESSION["pass"]="ddddddddd";
// print_r($_SESSION);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form   method="post"  action="users/index.php" enctype="multipart/form-data">

Name:<input name="name" type="text">
<br>
Email:<input name="email" type="email">
<br>
Image:<input name="image" type="file">
<br>
 <input type="submit" value="create">
</form>
</body>
</html>