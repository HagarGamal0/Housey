<?php
require_once("../Connection.php");
$action=isset($_GET["action"])?$_GET["action"]:"";
//delete
if($action=="delete"){
    $sql ="delete from fav_products where id = '$_GET[id]'";
    $conn->prepare($sql)->execute();
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
$conn->prepare($sql)->execute();
$conn=null;
header("Location:index.php");
 }
 //edit form
else if($action=="edit"){
    $sql="select * from users where id='$_POST[id]'";
    $stmt=$conn->prepare($sql);
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
 $stmt=$conn->prepare($sql);
 $stmt->execute();
 $conn=null;
 header("Location:index.php");
}

//fetch all data
else{
    $sql="select * from users where id =3";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
    require("views/user.php"); 
}

if (isset($_GET['add_to_cart'])) {
    $get_product_id = $_GET['add_to_cart'];
    // $get_user_id =$SESSION['id'];
    $stmt = $conn->prepare("SELECT * FROM order_details WHERE  product_id = $get_product_id and user_id =3");
    $stmt->execute();
    $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $count_product=count($product);
       
    //   لما بعمل refresh  بيعمل ال alert
    if ($count_product>0) {
      echo "<script>alert('هذا المنتج موجود بالسلة بالفعل (ان كنت ترغب بزيادة الكمية الرجاء التوجه للسلة)')</script>";
      // echo"<script>window.open('cart.php,_self')</script>";
    } else {
        // var_dump($product);
        // die();
        $stmt = $conn->prepare("INSERT INTO order_details(num_of_items, product_id, user_id) VALUES (0,$get_product_id,1)");
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "<script>alert('تم اضافة المنتج للسلة')</script>";
      // echo"<script>window.open('cart.php,_self')</script>";
  
  
    }
  }