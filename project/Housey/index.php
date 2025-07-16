<?php
require_once("../../connection.php");
// function to send products to cart table in database
if (isset($_GET['add_to_cart'])) {
  $get_product_id = $_GET['add_to_cart'];
  $get_user_id = 1; //$SESSION['id'];
  $stmt = $pdo->prepare("SELECT * FROM cart WHERE  product_id = $get_product_id and user_id =$get_user_id");
  $stmt->execute();
  $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $count_product = count($product);


  //   لما بعمل refresh  بيعمل ال alert
  if ($count_product > 0) {
    echo "<script>alert('هذا المنتج موجود بالسلة بالفعل (ان كنت ترغب بزيادة الكمية الرجاء التوجه للسلة)')</script>";
    // echo"<script>window.open('cart.php,_self')</script>";
    // header("Location:./cart.php");

  } else {
    $stmt = $pdo->prepare("INSERT INTO `cart`( `quantity`, `product_id`, `user_id`) VALUES (1,$get_product_id,1)");
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<script>alert('تم اضافة المنتج للسلة')</script>";
    // echo"<script>window.open('cart.php,_self')</script>";
    // header("Location:./cart.php");



  }
}

// add to favourite function

if (isset($_GET['fav'])) {

  $fav = $_GET['fav'];
  // $get_user_id =$SESSION['id'];
  $stmt = $pdo->prepare("SELECT * FROM fav_products WHERE  product_id = $fav and user_id =6");
  $stmt->execute();
  $fav_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $count_fav_products = count($fav_products);
  if ($count_fav_products > 0) {
    echo "<script>alert('هذا المنتج موجود بالمفضلة')</script>";
  } else {
    $stmt = $pdo->prepare("INSERT INTO `fav_products`( `user_id`,`product_id`) VALUES (1,$fav)");
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<script>alert('تم اضافة المنتج للمفضلة')</script>";

  }

}
if (isset($_GET['see_more'])) {
  // header(("Location:description.php"));
  $see_more = $_GET['see_more'];
  // $get_user_id =$SESSION['id'];
  $stmt = $pdo->prepare("SELECT * FROM products WHERE id = $see_more ");
  $stmt->execute();
  $info = $stmt->fetchAll(PDO::FETCH_ASSOC);
}






// cart page 

$action = isset($_GET["cart"]) ? $_GET["cart"] : "";
// var_dump($_GET) ; die() ;
if ($action == "delete") {
  if (isset($_GET['id'])) {
    $deleted_product = $_GET['id'];
    $sql = "DELETE FROM cart WHERE product_id =$deleted_product";
    $pdo->prepare($sql)->execute();
  }
}

  if ($action == "ssubmit") {
    $_get_user_id = 7; // $_SESSION['id'];
    // get order from carts
    $stmt = $pdo->prepare("SELECT * FROM cart WHERE  user_id= $_get_user_id");
    $stmt->execute();
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $tottal=0;
    foreach ($orders as $key => $value) {
      ///////////get order detailes 
      $stmt = $pdo->prepare("SELECT * FROM products WHERE  id= $value[product_id]");
      $stmt->execute();
      $product = $stmt->fetch(PDO::FETCH_ASSOC);
      ////////////////total price
      $tottal=$tottal+$product['price']*$value["quantaty"];
    }
    // create new order (get id fror last instance )
 
    // create order details


    // ////////////////////////
    $stmt = $pdo->prepare("SELECT id FROM order_details WHERE  user_id= $_get_user_id");
    $stmt->execute();
    $order_details_id = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $address = $_REQUEST['address'];
    $result = $pdo->prepare("INSERT INTO orders (`total_price`, `order_status`, `address`, `user_id`, `order_details_id`) VALUES (5,'pending','111',$_get_user_id ,$order_details_id)");
    $result->execute();

    $sql = "DELETE FROM cart WHERE user_id=$_get_user_id ";
    $pdo->prepare($sql)->execute();
    echo "<script> alert('تم الشراء بنجاح')  </script>";
  }

  // total price





/////////////submit cart

// if (isset($_GET['submit'])) {
//   //$_get_user_id = 1; // $_SESSION['id'];
//   //$stmt = $pdo->prepare("SELECT id FROM order_details WHERE  user_id= $_get_user_id");
//   //$stmt->execute();
//   //$order_details_id = $stmt->fetchAll(PDO::FETCH_ASSOC);
//   // $address = $_REQUEST['address'];
//   // $result = $pdo->prepare("INSERT INTO orders (`total_price`, `order_status`, `address`, `user_id`, `order_details_id`) VALUES (5,'pending','111',$_get_user_id ,$order_details_id)");
//   // $result->execute();
//   $sql = "DELETE FROM cart WHERE user_id=1";
//   $pdo->prepare($sql)->execute();
//   header("Location:cart.php");
// }



// user profile
$action=isset($_GET["action"])?$_GET["action"]:"";
//delete


if($action=="delete"){
    $sql ="delete from fav_products where id = '$_GET[id]'";
    $pdo->prepare($sql)->execute();
    header("Location:index.php");
}

//store user in database
elseif($action=="store"){
    print_r($_FILES);
    //upload file
    $ext=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
    $img_name=md5(microtime().$_FILES["image"]["name"]).".".$ext;
    print_r($_FILES);

move_uploaded_file($_FILES["image"]["tmp_name"],"../images/".$img_name);
// store in database
$sql= "insert into users(image, name, address, password, phone) values('$img_name', '$_POST[name]','$_POST[address]','$_POST[password]','$_POST[phone]')";
$pdo->prepare($sql)->execute();
$pdo=null;
header("Location:index.php");
 }
 //edit form
else if($action=="edit"){
    $sql="select * from users where id='$_POST[id]'";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $user=$stmt->fetch(pdo :: FETCH_ASSOC);
    header("Location:index.php");
}
    //update user
elseif($action=="update"){
    //  upload file
     $ext=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
     $img_name=md5(microtime().$_FILES["image"]["name"]).".".$ext;
 move_uploaded_file($_FILES["image"]["tmp_name"],"../images/".$img_name);
//  store in database
 $sql= "update users set address='$_POST[address]',email='$_POST[email]' ,password='$_POST[password]',phone='$_POST[phone]', image='$img_name' where id=1";
 $stmt=$pdo->prepare($sql);
 $stmt->execute();
 $pdo=null;

}

//fetch all data
else{
    $sql="select * from users where id=1";
    $stmt=$pdo->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
}


?>