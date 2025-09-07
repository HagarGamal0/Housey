<?php
require_once("../connection.php");
$stmt = $conn->prepare("SELECT * FROM order_details WHERE  user_id =1");
$stmt->execute();
$count_cart_items = count($stmt->fetchAll(PDO::FETCH_ASSOC));
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link rel="stylesheet" href="../assets/css/normalize.css">
  <link rel="stylesheet" href="./assets/css/master.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
  <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!--  -->
  <link rel="stylesheet" href="assets/css/profile.css?v=<?php echo time();?>">

  <title> User Profile </title>
</head>

<body onload="loading()">
  <!-- loader -->
  <div id="loader" class="loader"></div>
  <!-- end loader -->


  <!-- start navbar -->
<!------------------------navigation  ------------------------->
    <!-- start navbar -->
    <!-- navbar(icons) -->
    <nav class="navbar navbar-expand-lg navbar__icons  ">
        <div class="container">
            <a class="navbar-brand logo ms-3" href="../../Home/users/views/home.php"><img src="assets/img/Housey.svg" alt=""></a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="ابحث عن المنتج..." aria-label="Search">
                <button class="btn btn-outline-success me-1" type="submit">بحث</button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="index.php"><img src="assets/images/[removal.ai]_tmp-63fb26bfc4317 (2).png" alt="" class="user_image" style="width:8%; float:left; margin-right:260px;"></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa fa-users"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../../loginsystem/login.php"><i class="fa fa-arrow-left"> </i>تسجيل الخروج</a></li>
                            <!-- <li><a class="dropdown-item" href="#"><i class="fa fa-user-plus"> </i>أنشئ حساب</a></li> -->
                        </ul>
                    </li>
                </ul>
                <!-- <b><a href="#">Mark</a></b> -->
                <a href="../../cart/views/cart.php">
                    <i class="fa fa-cart-arrow-down">
                        <?php
                        if ($count_cart_items > 0) {
                            echo " <sup class='number'> $count_cart_items </sup>";
                        } ?>
                    </i>
                </a>


            </div>
    </nav>
    <!-- navbar(links) -->
    <nav class="navbar__links sticky-top">
        <div class="container">
            <div class="nav-bar">
                <ul class="links">
                    <li>
                        <a href="../../Home/users/views/home.php" class="cool-link "></i>الرئيسية</a>
                    </li>
                    <li>
                        <a href="../../../vendor-new/users/index.php" class="cool-link"></i>سباكة</a>
                    </li>
                    <li>
                        <a href="../Products/Carpentary_Products.html" class="cool-link"></i>نجارة</a>
                        </li>
                        <li>
                        <a href="../Products/Carpentary_Products.html" class="cool-link"></i>نقاشة</a>
                        </li>
                        <li>
                        <a href="../Products/Carpentary_Products.html" class="cool-link"></i>كهرباء</a>
                        </li>
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
              <?php foreach ($result as $value) {
                # code...
                ?>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="mb-3">
                      <label for="formFile" class="form-label">الصورة الشخصية</label>
                      <div class="image_prof">
                        <img src= "<?php echo $value['image']; ?>" class="w-100 " alt="images">
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
                  <?php } ?>
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
                <form method="post" action="index.php?id=<?php echo $value['id']; ?>&action=edit"
                  enctype="multipart/form-data">
                  <input type="button" id="edit_data" value="تعديل البيانات" class="d-block btns btns-primary w-100">

                  <!-- <a href="#" class=" btn btns-secondary bg-body-emphasis w-50 me-1">حذف</a> -->
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Form For Editing Data (start) -->
        <bug id="vendor_data_edit">

          <form method="post" action="index.php?action=update" enctype="multipart/form-data">
            <input type="text"  hidden>
            <div class="profile-pic">
              <label class="-label" for="file">
                <span>تغيير الصورة الشخصية</span>
              </label>
              <input id="file" type="file" onchange="loadFile(event)" name="image" />
              <img src="assets/img/avatar.png" id="output" alt="img" />
            </div>

            <div class="row mb-3">
              <label for="inputEmail3" class="col-sm-2 col-form-label">العنوان: </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3"
                  name="address">
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
                <input type="password" class="form-control" id="inputEmail3"
                  name="password">
              </div>
            </div>

            <div class="col-12 text-center m-auto mb-5">
              <button type="submit" class=" form-control btns btns-primary">حفظ</button>
            </div>
          </form>
              </bug>

        <!-- Form For Editing Data (end)


      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  <-- products card -->
  
        <bug id="cards_hide">
          <div class=" container other-data d-flex gap-80">
            <div class="skills-card p-20 bg-white rad-10 mt-20" style="width: 80%;">
              <h2 class="mt-0 mb-10">قائمة المشتريات <i class="fa fa-cart-arrow-down"></i></h2>
              <div class="flex-row" style="width=50%;">
                <?php

                require_once("../connection.php");
                $sql = "select * from products  inner join order_details on products.id=order_details.product_id where order_details.user_id=1";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(pdo::FETCH_ASSOC);

                foreach ($result as $value) {

                  ?>
                  <div class="card mt-5 hide ">
                    <div class="position-relative">
                      <input type="text" <?php echo $value["id"]; ?> hidden>
                      <!-- <span class=" badge discount_tag ">عرض خاص</span> -->
                      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="../../assets/img/activity-01.png  <?php echo $value["image_one"]; ?>" class="card-img-top d-block w-100"
                              alt="Card image cap">
                          </div>
                          <div class="carousel-item">
                            <img src="../../assets/img/activity-01.png/<?php echo $value["image_two"]; ?>" class="card-img-top d-block w-100"
                              alt="Card image cap">
                          </div>
                          <div class="carousel-item">
                            <img src="../../assets/img/activity-01.png/<?php echo $value["image_three"]; ?>" class="card-img-top d-block w-100"
                              alt="Card image cap">
                          </div>
                        </div>
                      </div>
                      <!-- <div class="btns">
                          <button class="cart_btn tooltip"><span class="tooltiptext">اضف الى السلة</span><i
                                  class="fa fa-cart-plus"></i></button>
                          <button class="fav_btn tooltip"><span class="tooltiptext">اضف للمفضلة</span><i
                                  class="fa fa-heart"></i></button>
                          <button type="button" class="more_btn tooltip" data-bs-target="#exampleModalToggle"
                              data-bs-toggle="modal"><span class="tooltiptext">نظرة سريعة</span><i
                                  class="fa fa-eye"></i></button>
                      </div> -->
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"> <?php echo $value["name"]; ?></h5>
                      <!-- RATING start -->
                      <div class="ratings">
                        <input type="radio" name="ratin" value="10" id="10"><label for="10">☆</label>
                        <input type="radio" name="ratin" value="9" id="9"><label for="9">☆</label>
                        <input type="radio" name="ratin" value="8" id="8"><label for="8">☆</label>
                        <input type="radio" name="ratin" value="7" id="7"><label for="7">☆</label>
                        <input type="radio" name="ratin" value="6" id="6"><label for="6">☆</label>
                      </div>
                      <!-- RATING end -->
                      <p class="card-text ">
                        <small>اسم البراند: <span class="me-2">
                            <?php echo $value["brand_name"]; ?>
                          </span></small>
                        <br>
                        <small>القطع المتوفرة: <span class="me-2">
                            <?php echo $value["available_pieces"]; ?>
                          </span></small>
                        <br>
                        <small>السعر: <span class="price">
                            <?php echo $value["offers"]; ?>
                          </span></small>
                        <span class="actual-price dissabled"><?php echo $value["price"]; ?></span>
                        <!-- <button class="btns btn-outline-success card_btn"><i class="fa fa-cart-plus"></i></button> -->

                      </p>
                    </div>
                  </div>

                  <?php
                } ?>

                  <!-- Start Modal Product Description -->
                  <!-- Modal -->
                  <!-- Modal -->
                  <!-- Example Code -->

                  <div class="modal fade" id="exampleModalToggle" aria-labelledby="exampleModalToggleLabel" tabindex="-1"
                    style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          <h1 class="modal-title fs-5" id="exampleModalToggleLabel">تفاصيل المنتج </h1>
                        </div>
                        <div class="modal-body">
                          <?php echo $value["details"]; ?>
                        </div>
                        <div class=" flex d-flex">
                          <div class="modal-footer">
                            <button class="btns btn-outline-success" onclick="cart()">اضف الى السلة <i
                                class="fa fa-shopping-cart"></i></button>


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <!-- whishlist -->
            <div class="activities p-20 bg-white rad-10 mt-20" style="width: 80%;" >
              <h2 class="mt-0 mb-10">قائمة الأمنيات<i class="fa fa-heart"></i></h2>
              <div class=" flex-row"style="width=50%;">
              <?php

           require_once("../connection.php");
            $sql = "select * from products  inner join fav_products on products.id=fav_products.product_id where fav_products.user_id=1";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(pdo::FETCH_ASSOC);

            require_once("index.php");
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
                            <?php echo "<a href= 'index.php?id=$value[id]&action=delete'> <button class='fav_btn tooltip'><span class='tooltiptext'>إزالة من المفضلة</span><i
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
                            <?php echo " <a href='index.php?add_to_cart=$value[product_id]'> <button class='btns btn-outline-success card_btn'><i class='fa fa-cart-plus'></i></button></a>"; ?>

                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    

               
              </div>
          </bug>
        <!-- footer -->
        
      </div>
    </div>
  </div>
  <footer>
            <div class="foot">
                <div class="container">
                    <div class="row">
                        <div class="foot__content col-lg-4 offset-lg-4">
                            <h2>عن موقعنا </h2>
                            <p>هنوصلك بالصنايعي بأسهل الطرق، ولو بتدور على الخامات هتلاقيها عندنا وكمان هتعرف أفضلها
                                لأنها
                                متقيمة من أكبر الصنايعية فهتشتري وانت مطمن،
                                لو عايز شقة بدون مشقة متترددش انك تتواصل معانا.</p>
                        </div>
                        <div class="foot__icons col-lg-4">
                            <ul>
                                <li><a href="#">Add:Egypt, Aswan <i class="fa fa-map"></i></a></li><br>
                                <li><a href="#">0112365478 (002) <i class="fa fa-phone"></i></a></li><br>
                                <li><a href="#">EMAIL@gmail.com <i class="fa fa-envelope"></i></a></li><br>
                                <li><a href="#">Sun.-Fri.9AM-8PM <i class="fa-regular fa-clock"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__icons sticky-bottom">
                <p>كل جديد علي قد الايد - copyright @Group A </p>
            </div>
        </footer>
        <!-- END FOOTER -->
    </div>

        <!-- END FOOTER -->

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
<script src="assets/js/profile.js"></script>

</html>