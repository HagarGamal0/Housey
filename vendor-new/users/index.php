<?php
// $user="";
// echo isset($usert);
require_once("../connection.php");
session_start();
// gate
// if(!isset($_SESSION["user"])){
// header("Location:../login.php");
// }

$action = isset($_GET["action"]) ? $_GET["action"] : "";

// delete user

if ($action == "delete") {
  $sql = "delete from products where id ='$_GET[id]'";
  $db->prepare($sql)->execute();
  header("Location:index.php");
}
//  create user (-->form)
elseif ($action == "create") {
  header("Location:views/addform.php");
}

//  store user in database
elseif ($action == "store") {

  $ext1 = pathinfo($_FILES["image_one"]["name"], PATHINFO_EXTENSION);
  $img_name_one = md5(microtime() . $_FILES["image_one"]["name"]) . "." . $ext1;
  move_uploaded_file($_FILES["image_one"]["tmp_name"], "../imgs/" . $img_name_one);

  $ext2 = pathinfo($_FILES["image_two"]["name"], PATHINFO_EXTENSION);
  $img_name_two = md5(microtime() . $_FILES["image_two"]["name"]) . "." . $ext2;
  move_uploaded_file($_FILES["image_two"]["tmp_name"], "../imgs/" . $img_name_two);
  
  $ext3 = pathinfo($_FILES["image_three"]["name"], PATHINFO_EXTENSION);
  $img_name_three = md5(microtime() . $_FILES["image_three"]["name"]) . "." . $ext3;
  move_uploaded_file($_FILES["image_three"]["tmp_name"], "../imgs/" . $img_name_three);
  
  // var_dump($img_name_three);
  // die();
  
  // store  in database
  $sql = "insert into products (name,price,offers,details,available_pieces,image_one,image_two,image_three) values('$_POST[name]','$_POST[price]','$_POST[offers]','$_POST[details]','$_POST[available_pieces]','$img_name_one','$img_name_two','$img_name_three')";
  $db->prepare($sql)->execute();
  $db = null;
  header("Location:index.php");
}
//  edit ( --> edit form)
elseif ($action == "editt") {
  $sql = "select * from vendors where id='1'";
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $user = $stmt->fetch(pdo::FETCH_ASSOC);
    

  require_once("views/vendordata.php");

}

//  edit ( --> edit form)
elseif ($action == "edit") {
  $sql = "select * from products where id='$_GET[id]'";
  // var_dump($_GET["id"]);
  // die();
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $user = $stmt->fetch(pdo::FETCH_ASSOC);


  require_once("views/editcard.php");

}

//  update user
elseif ($action == "update") {

  // upload file 
  $ext1 = pathinfo($_FILES["image_one"]["name"], PATHINFO_EXTENSION);
  $img_name_one = md5(microtime() . $_FILES["image"]["name"]) . "." . $ext1;
  move_uploaded_file($_FILES["image_one"]["tmp_name"], "../imgs/" . $img_name_one);

  $ext2 = pathinfo($_FILES["image_two"]["name"], PATHINFO_EXTENSION);
  $img_name_two = md5(microtime() . $_FILES["image"]["name"]) . "." . $ext2;
  move_uploaded_file($_FILES["image_two"]["tmp_name"], "../imgs/" . $img_name_two);

  $ext3 = pathinfo($_FILES["image_three"]["name"], PATHINFO_EXTENSION);
  $img_name_three = md5(microtime() . $_FILES["image"]["name"]) . "." . $ext3;
  move_uploaded_file($_FILES["image_three"]["tmp_name"], "../imgs/" . $img_name_three);

  // store  in database
  $sql = "update products set name='$_POST[name]' ,price='$_POST[price]' ,offers='$_POST[offers]' ,available_pieces='$_POST[available_pieces]' ,image_one='$img_name_one',image_two='$img_name_two',image_three='$img_name_three' where id='$_POST[id]'";
  $db->prepare($sql)->execute();
  $db = null;
  header("Location:index.php");
} 
elseif ($action == "updatedata") {
  // var_dump($_POST);
  // die();
    if (!empty($_FILES["image"]["name"])) {

  $ext = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
  $img_name = md5(microtime() . $_FILES["image"]["name"]) . "." . $ext;
  move_uploaded_file($_FILES["image"]["tmp_name"], "../imgs/" . $img_name);

  $sql = "update vendors set name='$_POST[name]' ,email='$_POST[email]' ,address='$_POST[address]' ,phone='$_POST[phone]' ,password='$_POST[password]' ,image='$img_name' where id=1";
  $db->prepare($sql)->execute();
  $db = null;
  header("Location:index.php");
    } else {

   $sql = "update vendors set name='$_POST[name]' ,email='$_POST[email]' ,address='$_POST[address]' ,phone='$_POST[phone]' ,password='$_POST[password]' where id=1";
  $db->prepare($sql)->execute();
  $db = null;
  header("Location:index.php");

}
}
//------------------------------------------------------------------
//  update user
elseif ($action == "update") {

  
  if (!empty($_FILES["image_one"]["name"])) {
    // var_dump($_FILES);
    // die();

    
    $ext1 = pathinfo($_FILES["image_one"]["name"], PATHINFO_EXTENSION);
    $img_name_one = md5(microtime() . $_FILES["image_one"]["name"]) . "." . $ext1;
    move_uploaded_file($_FILES["image_one"]["tmp_name"], "../imgs/" . $img_name_one);
    
    $ext2 = pathinfo($_FILES["image_two"]["name"], PATHINFO_EXTENSION);
    $img_name_two = md5(microtime() . $_FILES["image_two"]["name"]) . "." . $ext2;
    move_uploaded_file($_FILES["image_two"]["tmp_name"], "../imgs/" . $img_name_two);
    
    $ext3 = pathinfo($_FILES["image_three"]["name"], PATHINFO_EXTENSION);
    $img_name_three = md5(microtime() . $_FILES["image_three"]["name"]) . "." . $ext3;
    move_uploaded_file($_FILES["image_three"]["tmp_name"], "../imgs/" . $img_name_three);
      } else {
    // var_dump($img_name_three);
    // die();
    $sql = "update products set name='$_POST[name]' ,price='$_POST[price]' ,offers='$_POST[offers]' ,available_pieces='$_POST[available_pieces]' ,
    image_one='$img_name_one', image_two='$img_name_two', image_three='$img_name_three' where id='$_POST[id]'";
  $db->prepare($sql)->execute();
  $db = null;
    header("Location:index.php");
      }
}
// ---------------------------------------------------------------------------------



//  fetch all data
else {
  $sql = "select * from products";
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll(pdo::FETCH_ASSOC);
  // inject view ---------
  $sql = "select * from vendors";
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $info = $stmt->fetchAll(pdo::FETCH_ASSOC);
  // var_dump($result);
  // die();



  require("views/new.php");
}
?>