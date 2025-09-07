<?php
require_once("../../connection.php");
require_once("../index.php");
// define variables to empty values  
$nameErr = $emailErr = $phoneErr = $addressErr = "";
$user = $email = $phone = $address = "";

//Input fields validation  

if (isset($_POST["submit"])) {

  //String Validation  
  if (empty($_POST["user"])) {
    $nameErr = "Name is required";
  } else {
    $user = ($_POST["user"]);
  }
  // check if name only contains letters and whitespace  
  if (!preg_match("/^[a-zA-Z ]*$/", $user)) {
    $nameErr = "Only alphabets and white space are allowed";
  }

  if (empty($_POST["address"])) {
    $addressErr = "address is required";
  } else {
    $address = ($_POST["address"]);
  }
  //Email Validation   
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
  }



  //Number Validation  
  if (empty($_POST["phone"])) {
    $phoneErr = "Mobile no is required";
  } else {
    $phone = ($_POST["phone"]);
  }

  if (strlen($phone) != 11) {
    $phoneErr = "Mobile no must contain 11 digits.";
  } else {
    $phone = ($_POST["phone"]);
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Housey </title>
  <link rel="icon" href="./assets/imgs/Housey.svg">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./assets/css/cart.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="./assets/css/nav_footer.css?v=<?php echo time(); ?>">
  <style>
    .error {
      color: #ff0000;
    }
  </style>
</head>

<body onload="loading()">
  <!-- loader -->
  <div id="loader" class="loader"></div>
  <loader id="myBody">
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


    <!-- Page Body -->


    <div class="container styling mt-5">
      <div class="pay col-6 offset-md-1">
        <form method="POST" action="index.php?action=submit" enctype="multipart/form-data">
          <div class="row">
            <div class="col ">

              <h3 class="title">بيانات العميل </h3>
              <?php
              $sql = "SELECT  * FROM users WHERE id=3"; //$get_user_id
              $stmt = $pdo->prepare($sql);
              $stmt->execute();
              $result = $stmt->fetchAll(pdo::FETCH_ASSOC);
              foreach ($result as $value): ?>

                <div class="inputBox">
                  <span>الاسم بالكامل :</span>
                  <input id='user' name='user' type='text' placeholder='الاسم ثلاثى'
                    value="<?php echo $value['name']; ?>">
                  <span class='error'> *
                    <?php echo $nameErr; ?>
                  </span>
                </div>
                <div class='inputBox'>
                  <span>الايميل :</span>
                  <input id='email' name='email' type='email' placeholder='example@gmail.com'
                    value="<?php echo $value['email']; ?>">
                  <span class='error'>*
                    <?php echo $emailErr; ?>
                  </span>

                </div>
                <div class='inputBox'>
                  <span>العنوان :</span>
                  <input type='text' id='address' name='address' placeholder='المنطقة الشارع  رقم العمارة'>
                  <span class='error'>*
                    <?php echo $addressErr; ?>
                  </span>

                </div>
                <div class='inputBox'>
                  <span>رقم الموبايل :</span>
                  <input id='phone' type='text' name='phone' placeholder='رقم الموبايل'
                    value="<?php echo $value['phone']; ?>">
                  <span class='error'>*
                    <?php echo $phoneErr; ?>
                  </span>
                </div>

          </form>
        <?php endforeach ?>
        <!-- </div> -->
      </div>
    </div>
    <form method="post" action="cart.php?&cart=submit">
      <input type='submit' value=' اتمام الشراء' class='submit-btn '>
    </form>
    <?php

    ?>
    </div>


    <div class="container2-fluid">
      <div class="row ">
        <div class="cart d-flex align-items-center">
          <h3 class="my-4 cart-text"> عربة التسوق </h3>
          <i class="fa fa-shopping-cart me-1" style="font-size:36px"></i>
        </div>

        <div class="col-12">
          <form action="cart.php" method="POST">
            <table class="table table-responsive">
              <thead>
                <tr>
                  <th scope="col">اسم المنتج</th>
                  <th scope="col">السعر (ج)</th>
                  <th scope="col">الكمية</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>

                <?php
                $sql = "SELECT  * from cart  INNER JOIN products on products.id=cart.product_id ";
                $stmt = $pdo->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(pdo::FETCH_ASSOC); //display data on web page
                ?>

<?php foreach ($result as $value): ?>
  <tr>
                    <td class="name">
                      <?php echo " $value[name]"; ?>
                    </td>
                    <td class="unit"><input type="number" name="price" value=<?php echo $value['price']; ?> disabled />
                    </td>
                    <td class="num"><input type="number" name="num" value=<?php echo $value['quantity']; ?> /></td>
                    <td>
                      <a href="cart.php?id=<?php echo "$value[id]"; ?>&cart=delete" class='btn  btn-sm remove'>
                       <svg
                          width='22px' height='22px' viewBox='0 0 22 22' version='1.1' xmlns='http://www.w3.org/2000/svg'
                          xlink='http://www.w3.org/1999/xlink'>
                          <g id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'>
                            <g id='trash-34-px' transform='translate(-6.000000, -6.000000)' fill-rule='nonzero'>
                              <polygon id='Path'
                                transform='translate(17.000000, 17.000000) rotate(-180.000000) translate(-17.000000, -17.000000)'
                                points='3.55271368e-15 -3.55271368e-15 34 -3.55271368e-15 34 34 3.55271368e-15 34'>
                              </polygon>
                              <path
                                d='M7.125,10.914 L7.948,10.914 L9.868,26.966 C9.904,27.35 10.234,27.625 10.618,27.625 L23.382,27.625 C23.766,27.625 24.077,27.35 24.132,26.966 L26.052,10.914 L26.875,10.914 C27.295,10.914 27.625,10.584 27.625,10.164 C27.625,9.743 27.295,9.414 26.875,9.414 L21.133,9.414 L21.133,7.124 C21.133,6.704 20.803,6.374 20.383,6.374 L13.617,6.374 C13.197,6.374 12.867,6.704 12.867,7.124 L12.867,9.412 L7.124,9.412 C6.704,9.412 6.375,9.742 6.375,10.162 C6.375,10.584 6.722,10.913 7.125,10.913 L7.125,10.914 Z M14.367,7.876 L19.633,7.876 L19.633,9.413 L14.367,9.413 L14.367,7.876 L14.367,7.876 Z M24.534,10.914 L22.724,26.142 L11.276,26.142 L9.466,10.914 L24.534,10.914 Z M14.513,13.367 C14.093,13.367 13.763,13.697 13.763,14.117 L13.763,23.104 C13.763,23.525 14.093,23.854 14.513,23.854 C14.933,23.854 15.263,23.525 15.263,23.104 L15.263,14.117 C15.263,13.697 14.933,13.367 14.513,13.367 Z M19.487,13.367 C19.067,13.367 18.737,13.697 18.737,14.117 L18.737,23.104 C18.737,23.525 19.085,23.854 19.487,23.854 C19.907,23.854 20.237,23.525 20.237,23.104 L20.237,14.117 C20.237,13.697 19.907,13.367 19.487,13.367 Z'
                                id='prefix__a' fill='#000000'></path>
                            </g>
                          </g>
                        </svg> 
                      </a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
              </tbody>
            </table>
          </form>
          <div class="col-12 col-md-12 mb-4">
            <h5><span>
                يرجى العلم بأن مدة وصول المنتج تتراوح ما بين 3أيام الى 5 ايام
              </span></h5>
          </div>
          <!-- <div class="col-12 col-md-12">
                <h3>السعر الكلى:<?php echo $total_price; ?> ج
                <span id='totalValue'></span></h3>
          </div> -->
        </div>

      </div>
    </div>
    </div>


    <!-- START FOOTER -->
    <!-- footer -->

    <?php include_once("./inc/footer.php"); ?>

    </div>
    <!-- END FOOTER -->
  </loader>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

<script src="./assets/js/cart.js"></script>

</html>