<?php
require_once("connection.php");
// 1-get data ---->form
// 2-validate----->check users
// 3-session
// $_POST=["email"=>"fffffff"];
session_start();
print_r($_SESSION);
if(!empty($_POST)){

$email=$_POST["email"];

$sql="select * from users";
$stmt=$db->prepare($sql);
$stmt->execute();
$emails=$stmt->fetchAll(pdo :: FETCH_ASSOC);
foreach ($emails as $value){
if($email==$value['email']){
$_SESSION["user"]=$value;
header("Location:users");
}
}
echo "email & password doesn't match";
}

?>




<form   enctype="multipart/form-data">
Email:<input name="email" type="email">
<br>
Pass:<input name="pass" type="password">
<br>
 <input type="submit" value="login">
</form>
