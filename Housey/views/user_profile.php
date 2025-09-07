<?php
require_once("../../connection.php");
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
    // header("Location:index.php");
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

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link rel="stylesheet" href="./assets/css/normalize.css?">
  <link rel="stylesheet" href="./assets/css/master.css?">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
    <title>Housey </title>
    <link rel="icon" href="./assets/imgs/Housey.svg">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!--  -->
  <link rel="stylesheet" href="./assets/css/profile.css?">
  <link rel="stylesheet" href="./assets/css/nav_footer.css?">

  <title> User Profile </title>
</head>

<body onload="loading()">
  <!-- loader -->
  <div id="loader" class="loader"></div>
  <!-- end loader -->
  <loader id="myBody">


    <!-- start navbar -->
    <!------------------------navigation  ------------------------->
    <!-- start navbar -->
    <!-- navbar(icons) -->
    <?php include_once("./inc/header.php"); ?>
    <!-- navbar(links) -->
    
    <nav class="navbar__links sticky-top">
      <div class="container">
        <div class="nav-bar">
          <ul class="links">
            <li>
              <a href="./home.php" class="cool-link "></i>الرئيسية</a>
            </li>
            <li>
              <a href="./plumbing.php" class="cool-link"></i>سباكة</a>
            </li>
            <li>
              <a href="./carpentary.php" class="cool-link"></i>نجارة</a>
            </li>
            <li>
              <a href="./painting.php" class="cool-link"></i>نقاشة</a>
            </li>
            <li>
              <a href="./electro.php" class="cool-link"></i>كهرباء</a>
            </li>
            <li>
              <a href="./about.php" class="cool-link"></i>اعرف عنا</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
    <!-- Start Content -->
    <div class="container">
      <div class="row">
        <div class="main-div">

          <div class="right-side">
            <div class="alert pe-4 alert-success collapse" role="alert" id="alert">
              <a href="#" class=" ps-3 close" data-bs-dismiss="alert">&times; </a>
              تم تعديل البيانات بنجاح !
            </div>

            <!-- <form action="./index.php?action=update"></form> -->
            <div class="icon-div center">
              <i class="fa-solid fa-shop fa-3x"></i>
            </div>
            <!-- <h5 class="center"> الصفحة الشخصية</h5> -->
            <div class="accordion  accordion-flush" id="accordionFlushExample">


              <div class="accordion-item bg-color mt-5 ">
                <h2 class="accordion-header " id="flush-headingThree">
                  <button class="accordion-button bg-color collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    معلومات الملف الشخصي
                  </button>
                </h2>
                <?php 
                 $sql="select * from users where id=1";
                 $stmt=$pdo->prepare($sql);
                 $stmt->execute();
                 $result=$stmt->fetchAll(pdo :: FETCH_ASSOC);
                 foreach ($result as $value):
                  ?>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="mb-3">
                        <label for="formFile" class="form-label">الصورة الشخصية</label>
                        <div class="image_prof">
                          <img src="<?php echo $value['image']; ?>" class="w-100 " alt="images">
                          <!-- <img class="w-10" src=""> -->
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="formFile" class="form-label">الاسم: </label>
                        <input class="form-control" type="text" value="<?php echo $value["name"]; ?>"
                          aria-label="Disabled input example" disabled="">
                      </div>

                      <div class="mb-3">
                        <label for="formFile" class="form-label">العنوان: </label>
                        <input class="form-control" type="text" value="<?php echo $value["address"]; ?>"
                          aria-label="Disabled input example" disabled="">
                      </div>

                      <div class="mb-3">
                        <label for="formFile" class="form-label">رقم التليفون: </label>
                        <input class="form-control" type="text" value="<?php echo $value["phone"]; ?> "
                          aria-label="Disabled input example" disabled="">
                      </div>

                      <div class="mb-3">
                        <label for="formFile" class="form-label">الرقم القومي: </label>
                        <input class="form-control" type="text" value="<?php echo $value["national_id"]; ?> "
                          aria-label="Disabled input example" disabled="">
                      </div>

                      <div class="mb-3">
                        <label for="formFile" class="form-label">البريد الإلكتروني: </label>
                        <input class="form-control" type="email" value="<?php echo $value["email"]; ?>"
                          aria-label="Disabled input example" disabled="">
                      </div>


                    </div>
                  </div>
                <?php endforeach; ?>
              </div>

              <div class="accordion-item mt-2">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button bg-color collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    تعديل الملف الشخصي
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body bg-color">
                    <p>
                      بتعديلك بعض البيانات الشخصية يرجي العلم
                      أنه لا يمكنك تعديل بعض البيانات التي ادخلتها عند
                      تسجيل الدخول مثل اسمك والرقم القومي ...
                    </p>
                  </div>
                  <form method="post" action="user_profile.php?id=<?php echo $value['id']; ?>&action=edit"
                    enctype="multipart/form-data">
                    <input type="button" id="edit_data" value="تعديل البيانات" class="d-block btns btns-primary w-100">

                    <!-- <a href="#" class=" btn btns-secondary bg-body-emphasis w-50 me-1">حذف</a> -->
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Form For Editing Data (start) -->
          <section id="vendor_data_edit">

            <form method="post" action="user_profile.php?action=update" enctype="multipart/form-data">
              <!-- <input type="text" hidden> -->

              <div class="profile-pic">
                <label class="-label" for="file">
                  <span>تغيير الصورة الشخصية</span>
                </label>
                <input id="file" type="file" onchange="loadFile(event)" name="image" />
                <img src="./assets/imgs/avatar.png" id="output" alt="img" />
              </div>

              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">العنوان: </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="address">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">رقم التليفون: </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="phone">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">البريد الإلكتروني: </label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" name="email">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">كلمة السر الجديدة: </label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputEmail3" name="password">
                </div>
              </div>

              <div class="col-12 text-center m-auto mb-5">
                <button type="submit" class=" form-control btns btns-primary">حفظ</button>
              </div>
            </form>
          </section>

          <!-- Form For Editing Data (end)-->


        </div>


        <!-- products card -->

        <bug id="cards_hide">
          <div class=" container other-data d-flex justify-content-between ">
            <div class="skills-card p-20 bg-white rad-10 mt-20" style="width: 49%;">
              <h2 class="mt-0 mb-10">قائمة المشتريات <i class="fa fa-cart-arrow-down"></i></h2>
              <div class="flex-row" style="width=80%;">

                <?php
                $sql = "select * from products  inner join order_details on products.id=order_details.product_id where order_details.user_id=1";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(pdo::FETCH_ASSOC); foreach ($result as $value):
                  ?>
                  <div class='card mt-5 '>
                    <div class='position-relative'>
                      <?php if ($value['offers'] > 0): ?>
                        <span class='badge discount_tag'>عرض خاص</span>
                      <?php endif; ?>

                      <div id='carouselExampleAutoplaying' class='carousel slide' data-bs-ride='carousel'>
                        <div class='carousel-inner'>
                          <div class='carousel-item active'>
                            <img src=<?php echo $value['image_one']; ?>class='card-img-top d-block w-100'
                              alt='Card image cap'>
                          </div>
                          <div class='carousel-item'>
                            <img src=<?php echo $value['image_two']; ?> class='card-img-top d-block w-100'
                              alt='Card image cap'>
                          </div>
                          <div class='carousel-item'>
                            <img src=<?php echo $value['image_three']; ?> class='card-img-top d-block w-100'
                              alt='Card image cap'>
                          </div>
                        </div>
                      </div>
                      <div class='btns'>
                        <?php echo "<a href= 'index.php?add_to_cart=$value[id]'><button class='cart_btn tooltip'><span
                                        class='tooltiptext'>اضف الى السلة</span><i
                                        class='fa-solid fa-cart-plus'></i></button></a>"; ?>
                        <?php echo "<a href= 'index.php?fav=$value[id]'> <button class='fav_btn tooltip'><span class='tooltiptext'>اضف للمفضلة</span><i
                                        class='fa-solid fa-heart-circle-plus'></i></button></a>"; ?>
                        <?php echo "<a href= 'description.php?see_more=$value[id]'><button type='button' class='more_btn tooltip' data-bs-target='#exampleModalToggle'
                                data-bs-toggle='modal'><span class='tooltiptext'>نظرة سريعة</span><i
                                    class='fa-regular fa-eye'></i></button>"; ?>
                      </div>
                    </div>
                    <div class='card-body'>
                      <h5 class='card-title'>
                        <?php echo $value['name']; ?>
                      </h5>
                      <!-- RATING start -->
                      <div class='rating'>
                        <input type='radio' name='rating' value='4' id='4'><label for='4'>☆</label>
                        <input type='radio' name='rating' value='3' id='3'><label for='3'>☆</label>
                        <input type='radio' name='rating' value='2' id='2'><label for='2'>☆</label>
                        <input type='radio' name='rating' value='1' id='1'><label for='1'>☆</label>
                      </div>
                      <!--RATINGend-->
                      <p class='card-text '>

                        <small>اسم البراند: <span>
                            <?php echo $value['brand_name']; ?>
                          </span></small>
                        <br>
                        <small>القطع المتوفرة:<span class='me-2'>(
                            <?php echo $value['available_pieces']; ?> قطعة)
                          </span></small>
                        <br>
                        <?php if ($value['offers'] == 0): ?>
                          <small>السعر: <span class='price'>
                              <?php echo $value['price']; ?>EGP
                            </span></small>
                        <?php endif; ?>
                        <?php if ($value['offers'] > 0): ?>
                          <small>السعر: <span class='actual-price dissabled'>
                              <?php echo $value['price']; ?>EGP
                            </span></small>
                          <span class='price'>
                            <?= $value['offers'] ?>EGP
                          </span>
                        <?php endif; ?>
                        <?php echo " <a href='user_profile.php?add_to_cart=$value[id]'> <button class='button'><i class='fa fa-cart-plus'></i></button></a>"; ?>

                      </p>
                    </div>
                  </div>

                <?php endforeach; ?>


              </div>
            </div>
          
          <!-- whishlist --> 
          <div class="activities p-20 bg-white rad-10 mt-20" style="width: 80%;" > 
              <h2 class="mt-0 mb-10">قائمة الأمنيات<i class="fa fa-heart"></i></h2> 
              <div class=" flex-row"style="width=50%;"> 
              <?php 
 
            
            $sql = "select * from products  inner join fav_products on products.id=fav_products.product_id where fav_products.user_id=1"; 
            $stmt = $pdo->prepare($sql); 
            $stmt->execute(); 
            $result = $stmt->fetchAll(pdo::FETCH_ASSOC); 
          //  header("Location: ../index.php");

            foreach ($result as $value): ?> 
                <div class='card mt-5 '> 
                    <div class='position-relative'> 
                        <?php if ($value['offers'] > 0): ?> 
                            <span class='badge discount_tag'>عرض خاص</span> 
                        <?php endif; ?> 
 
                        <div id='carouselExampleAutoplaying' class='carousel slide' data-bs-ride='carousel'> 
                            <div class='carousel-inner'> 
                                <div class='carousel-item active'> 
                                    <img src=<?php echo $value['image_one']; ?>class='card-img-top d-block w-100' 
                                        alt='Card image cap'> 
                                </div> 
                                <div class='carousel-item'> 
                                    <img src=<?php echo $value['image_two']; ?> class='card-img-top d-block w-100' 
                                        alt='Card image cap'> 
                                </div> 
                                <div class='carousel-item'> 
                                    <img src=<?php echo $value['image_three']; ?> class='card-img-top d-block w-100' 
                                        alt='Card image cap'> 
                                </div> 
                            </div> 
                        </div> 
                        <div class='btns'> 
                            <?php echo "<a href= 'index.php?add_to_cart=$value[product_id]'><button class='cart_btn tooltip'><span 
                                        class='tooltiptext'>اضف الى السلة</span><i 
                                        class='fa fa-cart-plus'></i></button></a>"; ?> 
                            <?php echo "<a href= '../index.php?id=$value[id]&action=delete'> <button class='fav_btn tooltip'><span class='tooltiptext'>إزالة من المفضلة</span><i 
                                        class='fa fa-trash'></i></button></a>"; ?> 
                            <button type='button' class='more_btn tooltip' data-bs-target='#exampleModalToggle' 
                                data-bs-toggle='modal'><span class='tooltiptext'>نظرة سريعة</span><i 
                                    class='fa fa-eye'></i></button> 
                        </div> 
                    </div> 
                    <div class='card-body'> 
                        <h5 class='card-title'> 
                            <?php echo $value['name']; ?> 
                        </h5> 
                        <!-- RATING start --> 
                        <div class='rating'> 
                            <input type='radio' name='rating' value='4' id='4'><label for='4'>☆</label> 
                            <input type='radio' name='rating' value='3' id='3'><label for='3'>☆</label> 
                            <input type='radio' name='rating' value='2' id='2'><label for='2'>☆</label> 
                            <input type='radio' name='rating' value='1' id='1'><label for='1'>☆</label> 
                        </div> 
                        <!--RATINGend--> 
                        <p class='card-text '> 
                            <small>اسم البراند: <span> 
                                    <?php echo $value['brand_name']; ?> 
                                </span></small> 
                            <br> 
                            <small>القطع المتوفرة:<span class='me-2'>(<?php echo $value['available_pieces']; ?> قطعة) 
                                </span></small> 
                            <br> 
                            <?php if ($value['offers'] == 0): ?> 
                                <small>السعر: <span class='price'> 
                                        <?php echo $value['price']; ?>EGP 
                                   </span></small> 
                            <?php endif; ?> 
                            <?php if ($value['offers'] > 0): ?> 
                                <small>السعر: <span class='actual-price dissabled'> 
                                        <?php echo $value['price']; ?>EGP 
                                    </span></small> 
                                <span class='price'> 
                                    <?= $value['offers'] ?>EGP 
                                </span> 
                            <?php endif; ?> 
                            <?php echo " <a href='index.php?add_to_cart=$value[id]'> <button class='btns btn-outline-success card_btn'><i class='fa fa-cart-plus'></i></button></a>"; ?> 
 
                        </p> 
                    </div> 
                </div> 
                <?php endforeach; ?> 
            </div> 
        </div>
          </div>
        </bug>
      </div>
  
     </div>

    </div>
    <!-- footer -->

    <?php include_once("./inc/footer.php") ?>
  </loader>
</body>
<script>

  var myVar;
  function loading() {
    myVar = setTimeout(showPage, 500);
    document.getElementById("loader").style.display = "block";
    document.getElementById("myBody").style.display = "none";
  }

  function showPage() {
    document.getElementById("myBody").style.display = "block";
    document.getElementById("loader").style.display = "none";
  }
  // *************************************************************
  // Change Shop Profile Pic
var loadFile = function (event) {
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
}


</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="./assets/js/profile.js"></script>

</html>