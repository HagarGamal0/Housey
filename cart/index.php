<?php
require_once("connection.php");


// cart page 

$action = isset($_GET["cart"]) ? $_GET["cart"] : "";
// var_dump($_GET) ; die() ;
if ($action == "delete") {
  if (isset($_GET['id'])) {
    $deleted_product = $_GET['id'];
    $sql = "DELETE FROM cart WHERE product_id =$deleted_product";
    $conn->prepare($sql)->execute();
  }
}

  if ($action == "submit") {
    $_get_user_id = 7; // $_SESSION['id'];
    // get order from carts
    $stmt = $conn->prepare("SELECT * FROM cart WHERE  user_id= $_get_user_id");
    $stmt->execute();
    $orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $total=0;
    foreach ($orders as $key => $value) {
      ///////////get order detailes 
      $stmt = $conn->prepare("SELECT * FROM products WHERE  id= $value[product_id]");
      $stmt->execute();
      $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
      ////////////////total price
      $total=$total+$product['price']*$value["quantity"];
    }
    // create new order (get id fror last instance )
 
    // create order details


    // ////////////////////////
    $stmt = $conn->prepare("SELECT id FROM order_details WHERE  user_id= $_get_user_id");
    $stmt->execute();
    $order_details_id = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $address = $_REQUEST['address'];
    $result = $conn->prepare("INSERT INTO orders (`total_price`, `order_status`, `address`, `user_id`, `order_details_id`) VALUES (5,'pending','111',$_get_user_id ,$order_details_id)");
    $result->execute();

    $sql = "DELETE FROM cart WHERE user_id=$_get_user_id ";
    $conn->prepare($sql)->execute();
    echo "<script> alert('تم الشراء بنجاح')  </script>";
  }

  // total price





?>