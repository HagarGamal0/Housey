<?php
require_once("../../connection.php");
$stmt = $pdo->prepare("SELECT * FROM cart WHERE user_id =1");
$stmt->execute();
$count_cart_items = count($stmt->fetchAll(PDO::FETCH_ASSOC));

// $stmt = $pdo->prepare("SELECT * FROM fav_products WHERE user_id =1");
// $stmt->execute();
// $count_cart_items = count($stmt->fetchAll(PDO::FETCH_ASSOC));
// require_once("../../connection.php");
if (isset($_GET['add_to_cart'])) {
  $get_product_id = $_GET['add_to_cart'];
  // $get_user_id =$SESSION['id'];
  $stmt = $pdo->prepare("SELECT * FROM order_details WHERE  product_id = $get_product_id and user_id =1");
  $stmt->execute();
  $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $count_product = count($product);

  //   لما بعمل refresh  بيعمل ال alert
  if ($count_product > 0) {
    echo "<script>
      alert('هذا المنتج موجود بالسلة بالفعل (ان كنت ترغب بزيادة الكمية الرجاء التوجه للسلة)')
      
      
      </script>";

    // echo"<script>window.open('cart.php,_self')</script>";
  } else {
    // var_dump($product);
    // die();
    $stmt = $pdo->prepare("INSERT INTO order_details(num_of_items, product_id, user_id) VALUES (0,$get_product_id,1)");
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<script>alert('تم اضافة المنتج للسلة')</script>";
    // echo"<script>window.open('cart.php,_self')</script>";


  }
}




if (isset($_GET['add'])) {
  $fav_product_id = $_GET['add'];
  // $get_user_id =$SESSION['id'];

  $stmt = $pdo->prepare("SELECT * FROM fav_products WHERE product_id = $fav_product_id and user_id =1");
  $stmt->execute();
  $fav_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $count_fav_products = count($fav_products);

  //   لما بعمل refresh  بيعمل ال alert
  if ($count_fav_products > 0) {
    echo "<script>alert('هذا المنتج موجود بالمفضلة بالفعل ')
      jQuery(document).ready(function ($) {
        $('alert').click(function (e) {
            var answer = alert('هذا المنتج موجود بالمفضلة بالفعل ');
            if (!answer) {
                e.preventDefault();
            }
        });
    });
      
      
      
      </script>";
    // header("Location:../index.php");
    // echo"<script>window.open('cart.php,_self')</script>";
  } else {
    // var_dump($fav_products);
    // die();
    $stmt = $pdo->prepare("INSERT INTO fav_products(product_id, user_id) VALUES ($fav_product_id,1)");
    $stmt->execute();
    $fav_products = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<script>alert('تم اضافة المنتج للمفضلة')</script>";
    // require_once("../views/home.php");
    // echo"<script>window.open('cart.php,_self')</script>";


  }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Housey </title>
  <link rel="icon" href="./assets/imgs/Housey.svg">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Changa:wght@300;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="./assets/css/home.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="./assets/css/nav_footer.css?v=<?php echo time(); ?>">

</head>

<body onload="loading()">
  <!-- loader -->
  <div id="loader" class="loader"></div>

  <loader id="myBody">

    <!-- end loader -->
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
              <a href="./home.php" class="cool-link active"></i>الرئيسية</a>
            </li>
            <li>
              <a href="./plumbing.php" class="cool-link "></i>سباكة</a>
            </li>
            <li>
              <a href="./carpentary.php" class="cool-link"></i>نجارة</a>
            </li>
            <li>
              <a href="./painting.php" class="cool-link "></i>نقاشة</a>
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
    <!-- SLIDER -->

    <header class="slider-container">
      <div class="left-slide">
        <div style="background-color: #8b3b05">
          <h1>قسم الكهرباء</h1>
          <p>all in pink</p>
          <a href="../Products/Electro_Products.html"><button class="btn btn-outline-success" type="submit">اعرف
              المزيد</button></a>
        </div>
        <div style="background-color: #d6824e">
          <h1>قسم النقاشة</h1>
          <p>with it's mountains</p>
          <a href="../Products/Painting_Products.html"><button class="btn btn-outline-success" type="submit">اعرف
              المزيد</button></a>
        </div>
        <div style="background-color: #d7ac58">
          <h1>قسم النجارة</h1>
          <p>in the wilderness</p>
          <a href="../Products/Carpentary_Products.html"><button class="btn btn-outline-success" type="submit">اعرف
              المزيد</button></a>
        </div>
        <div style="background-color: #e3b4327f">
          <h1>قسم السباكة</h1>
          <p>in the sunset</p>
          <a href="../Products/Plumbing_Products.html"><button class="btn btn-outline-success" type="submit">اعرف
              المزيد</button></a>
        </div>
        <div class="" style="background-color: #dd7642;">
          <h1>مرحبا بكم</h1>
          <p>سايت مش هتخرج منه إلا وأنت مشتري</p>
        </div>
      </div>
      <div class="right-slide">
        <!-- <img src="../IMGS/welcome.png" alt=""> -->
        <div style="background-image: url('./assets/imgs/Best-Website-Welcome-Message-Examples.png')">
        </div>
        <div style="background-image: url('./assets/imgs/img.jpg')">
        </div>
        <div style="background-image: url('./assets/imgs/Tools-Carpenter-Wood-2423826.jpg')">
        </div>
        <div style="background-image: url('./assets/imgs/Paint-tools-AR20012020.jpg')">
        </div>
        <div
          style="background-image: url('./assets/imgs/tool-electricity-electric-professional-repair-industrial-electrician-industry-production.jpg')">
        </div>
      </div>
      <div class="action-buttons">
        <button class="down-button">
          <i class="fa fa-arrow-down"></i>
        </button>
        <button class="up-button">
          <i class="fa fa-arrow-up"></i>
        </button>
      </div>
    </header>
    <!-- About_us & video -->
    <section class="about-us">
      <div class="container mt-5 mb-5"  >
        <div class="row justify-content-between">
          <div class="about-us__content col-lg-6">
            <h2>Super Lux</h2>
            <h3>مميزات الموقع</h3>
            <p> موقع Housey
              موقع لتجارة ادوات المنزل
              <br>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit explicabo possimus delectus incidunt
              perferendis quaerat officia tenetur in porro, aspernatur impedit nisi cumque. Veniam, distinctio illo?
              Eius perferendis ipsa id fugit sed, sit nam corrupti veritatis, saepe officiis quod dolor. Magni sed modi
              praesentium numquam provident cum odio sequi reiciendis totam voluptatibus quas rem quam eveniet incidunt,
              perspiciatis maiores quis.
            </p>
          </div>
          <div class="about-us__video col-lg-5">

            <video width="570" height="272" controls autoplay>
              <source src="./assets/imgs/video.mp4" type="video/mp4">

            </video>


          </div>
        </div>
      </div>
    </section>

    <!-- cards -->
    <section class="product">
      <h2 class="product-category">أحدث العروض</h2>
      <button class="pre-btn"><img src="./assets/imgs/arrow-icon--myiconfinder-23.png" alt="" width="30px"></button>
      <button class="nxt-btn"><img src="./assets/imgs/arrow-icon--myiconfinder-23.png" alt="" width="30px"></button>
      <div class="container">
        <div class=" flex-row">
          <?php

          $sql = "select * from products where offers>0";
          $stmt = $pdo->prepare($sql);
          $stmt->execute();
          $result = $stmt->fetchAll(pdo::FETCH_ASSOC);

          foreach ($result as $value): ?>
            <div class='card mt-5 '>
              <div class='position-relative'>
                <?php if ($value['offers'] > 0): ?>
                  <span class='badge discount_tag'>عرض خاص</span>
                <?php endif; ?>

                <div id='carouselExampleAutoplaying' class='carousel slide' data-bs-ride='carousel'>
                  <div class='carousel-inner'>
                    <div class='carousel-item active'>
                      <img src="<?php echo $value['image_one']; ?>" class='card-img-top d-block w-100'
                        alt='Card image cap'>
                    </div>
                    <div class='carousel-item'>
                      <img src="<?php echo $value['image_two']; ?>" class='card-img-top d-block w-100'
                        alt='Card image cap'>
                    </div>
                    <div class='carousel-item'>
                      <img src="<?php echo $value['image_three']; ?>" class='card-img-top d-block w-100'
                        alt='Card image cap'>
                    </div>
                  </div>
                </div>
                <div class='btns'>
                  <?php echo "<a href= 'home.php?add_to_cart=$value[id]'><button class='cart_btn tooltip'><span
                                        class='tooltiptext'>اضف الى السلة</span><i
                                        class='fa fa-cart-plus'></i></button></a>"; ?>
                  <?php echo "<a href= 'home.php?add=$value[id]'> <button class='fav_btn tooltip'><span class='tooltiptext'>اضف للمفضلة</span><i
                                        class='fa-solid fa-heart-circle-plus'></i></button></a>"; ?>
                  <?php echo "<a href= 'description.php?see_more=$value[id]'><button type='button' class='more_btn tooltip'><span class='tooltiptext'>نظرة سريعة</span>
                            <i class='fa-regular fa-eye'></i></button>"; ?>
                </div>
              </div>
              <div class='card-body'>
                <h5 class='card-title'>
                  <?php echo $value['name']; ?>
                </h5>
                <!-- RATING start -->
                <div class='ratings'>
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
                  <?php echo " <a href='home.php?add_to_cart=$value[id]'> <button class='btns btn-outline-success card_btn'><i class='fa fa-cart-plus'></i></button></a>"; ?>

                </p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <!-- feedbacks -->
    <div class="feedback">
      <div class="container feedback__content">
        <div class="header">
          <h1>اراء العملاء</h1>
          <p> ! over 250.000+ happy customers</p>
        </div>
        <div>
          <div class="feedback__rating row">
            <div class=" col-lg-4">
              <div class="ratings">
                <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
              </div>
              <h3>Eye Liner</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed quaerat modi harum illo Lorem ipsum,
                dolor sit amet consectetur adipisicing elit. Nobis aspernatur laboriosam delectus dicta itaque, at
                libero excepturi maxime quaerat nostrum, autem molestiae veritatis facere quam architecto, ea laborum
                pariatur?</p>
              <p class="font">Julie</p>
            </div>
            <div class=" col-lg-4">
              <div class="ratings">
                <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
              </div>
              <h3>Glides on and lasts</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed quaerat modi harum illo Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Consequuntur totam odit dicta! Culpa, deleniti voluptate maxime
                doloribus omnis in, architecto explicabo numquam illo repellat a possimus reiciendis consectetur vero!
              </p>
              <p class="font">Megscoastallife</p>
            </div>
            <div class=" col-lg-4">
              <div class="ratings">

                <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
              </div>
              <h3>Favorite EyeLiner</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sed quaerat modi harum illo Lorem ipsum dolor
                sit amet consectetur adipisicing elit. Qui est exercitationem quaerat unde ipsa, explicabo itaque
                ratione? Magnam explicabo nisi possimus excepturi ipsam, accusamus vel, iusto maxime dicta ab nemo!</p>
              <p class="font">Sybil</p>
            </div>
          </div>
        </div>
      </div>
      <!-- footer -->

      <?php include_once("./inc/footer.php"); ?>

      <!-- END FOOTER -->

  </loader>
</body>

<script src="./assets/js/home.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>