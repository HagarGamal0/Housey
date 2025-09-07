<?php
// $user="";
// echo isset($usert);
require_once("../connection.php");
session_start();
if(!isset($_SESSION["user"])){
header("Location:../login.php");
}
$action=isset($_GET["action"])?$_GET["action"]:"";

// delete product

 if($action=="delete"){
 $sql ="delete from products where id ='$_GET[id]'";
 $db->prepare($sql)->execute();
 header("Location:index.php");
 }
//  create product (-->form)
 elseif($action=="create"){
  header("Location:views/addform.php");
 }


//  store product in database
 elseif($action=="store"){

  // upload file 
  $ext=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
  $img_name=md5(microtime().$_FILES["image"]["name"]).".".$ext; 
//   22jgoijfsomgkl.png   
    //           ( from ,to  )
move_uploaded_file($_FILES["image"]["tmp_name"],"../imgs/". $img_name);
// store  in database
$sql= "insert into products(name,price,image) values('$_POST[name]','$_POST[price]','$img_name')";
$db->prepare($sql)->execute();
$db=null;
header("Location:index.php");
 }

//  edit ( --> edit form)
elseif($action=="edit"){
$sql="select * from form where id='$_GET[id]'";
$stmt=$db->prepare($sql);
$stmt->execute();
$product=$stmt->fetch(pdo :: FETCH_ASSOC);
$db=null;
require_once("views/editform.php");
}
//  update product
elseif($action=="update"){

 // upload file 
 $ext=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
 $img_name=md5(microtime().$_FILES["image"]["name"]).".".$ext; 
//   22jgoijfsomgkl.png   
   //           ( from ,to  )
move_uploaded_file($_FILES["image"]["tmp_name"],"../imgs/". $img_name);
// store  in database
$sql= "update products set name='$_POST[name]' ,price='$_POST[price]' ,image='$img_name' where id='$_POST[id]'";
$db->prepare($sql)->execute();
$db=null;
header("Location:index.php");

}


//  fetch all data
 else{
$sql="select * from products";
$stmt=$db->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
// inject view ---------
require("views/table.php");

}

?>



