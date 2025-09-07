<?php
require_once("connection.php");
// function to send products to cart table in database
if (isset($_GET['add_to_cart'])) {
  $get_product_id = $_GET['add_to_cart'];
  $get_user_id = 1; //$SESSION['id'];
  $stmt = $pdo->prepare("SELECT * FROM cart WHERE  product_id = $get_product_id and user_id =$get_user_id");
  $stmt->execute();
  $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $count_product = count($product);

  if ($count_product > 0) {
    echo "<script>alert('هذا المنتج موجود بالسلة بالفعل (ان كنت ترغب بزيادة الكمية الرجاء التوجه للسلة)')</script>";
    
  } else {
    $view=$_GET['view'];

    $stmt = $pdo->prepare("INSERT INTO `cart`( `quantity`, `product_id`, `user_id`) VALUES (1,$get_product_id,1)");
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<script>alert('تم اضافة المنتج للسلة')</script>";
    header("Location:views/$view.php");

    
  }
}

// add to favourite function

if (isset($_GET['fav'])) {
  $view=$_GET ['view'];
  $fav = $_GET['fav'];
  // $get_user_id =$SESSION['id'];
  $stmt = $pdo->prepare("SELECT * FROM fav_products WHERE  product_id = $fav and user_id =1");
  $stmt->execute();
  $fav_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $count_fav_products = count($fav_products);
  echo"$count_fav_products";
  if ($count_fav_products > 0) {
    echo "<script>alert('هذا المنتج موجود بالمفضلة')</script>";
    
    header("Location:views/$view.php");

  } else {
    $stmt = $pdo->prepare("INSERT INTO `fav_products`( `user_id`,`product_id`) VALUES (1,$fav)");
    $stmt->execute();
    // $product = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<script>alert('تم اضافة المنتج للمفضلة')</script>";
    // header("Location : views/plumbing.php ");

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






