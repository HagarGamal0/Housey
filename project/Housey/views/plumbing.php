<?php
require_once("../../connection.php");
// require_once("../index.php");
$stmt = $pdo->prepare("SELECT * FROM cart WHERE  user_id =1");
$stmt->execute();
$count_cart_items = count($stmt->fetchAll(PDO::FETCH_ASSOC));


/////////////////////////////////////////////////
// // filter

$action=isset($_GET["action"])?$_GET["action"]:"";

if ($action == "highest_price") {
    $stmt = $pdo->prepare("SELECT * FROM products where field='plumbing' ORDER BY price DESC");
    ($stmt)->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

} elseif ($action == "lowest_price") {
    $stmt = $pdo->prepare("SELECT * FROM products where field='plumbing' ORDER BY price ASC");
    ($stmt)->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} elseif ($action == "top_rated") {
  $stmt = $pdo->prepare("SELECT * FROM products where field='plumbing' ORDER BY rate DESC");
    ($stmt)->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
} elseif ($action == "best_seller") {

} else {
    $stmt = $pdo->prepare("SELECT * FROM products where field='plumbing'");
    $stmt->execute();
   $products =$stmt->fetchAll(PDO::FETCH_ASSOC);
}

// ////////////////////////////////////////////////////////////
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
    <link rel="stylesheet" href="./assets/css/products.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./assets/css/nav_footer.css?v=<?php echo time(); ?>">

</head>

<body onload="loading()">
  <!-- loader -->
  <div id="loader" class="loader"></div>

  <loader id="myBody"> 
  <!------------------------navigation  ------------------------->
  <!-- start navbar -->
  <!-- navbar(icons) -->
  <?php include_once("./inc/header.php");?>

    <!-- navbar(links) -->
    <nav class="navbar__links sticky-top">
        <div class="container">
            <div class="nav-bar">
                <ul class="links">
                    <li>
                        <a href="./home.php" class="cool-link "></i>الرئيسية</a>
                    </li>
                    <li>
                        <a href="./plumbing.php" class="cool-link active"></i>سباكة</a>
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
    <!-------------------------content  ---------------------->
    <div class="container">
        <div class="container">

            <button class="btn mt-5 mb-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight ">تصنيف <i class="fa-solid fa-angles-left"></i>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel">عن ماذا تبحث؟</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="d-flex-column">
                        <?php echo "<a href='plumbing.php?action=all'><button class=' btn button__value' >الكل </button></a>"; ?>
                        <br>
                        <?php echo "<a href='plumbing.php?action=best_seller'><button class=' btn button__value' >الاكثر مبيعاً </button></a>"; ?>
                        <br>
                        <?php echo "<a href='plumbing.php?action=top_rated'><button class=' btn button__value' >الاعلى تقييماً</button></a>"; ?>
                        <br>
                        <?php echo "<a href='plumbing.php?action=highest_price'><button class=' btn button__value' >الاعلى سعراً</button></a>"; ?>
                        <br>
                        <?php echo "<a href='plumbing.php?action=lowest_price'><button class=' btn button__value' >الاقل سعراً</button></a>"; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between flex-wrap " id="main">
            <?php require_once("../index.php");
            // if()
            foreach ($products as $value): ?>
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
                            <?php echo "<a href= 'plumbing.php?add_to_cart=$value[id]'><button class='cart_btn tooltip'><span
                                        class='tooltiptext'>اضف الى السلة</span><i
                                        class='fa-solid fa-cart-plus'></i></button></a>"; ?>
                            <?php echo "<a href= 'plumbing.php?fav=$value[id]'> <button class='fav_btn tooltip'><span class='tooltiptext'>اضف للمفضلة</span><i
                                        class='fa-solid fa-heart-circle-plus'></i></button></a>"; ?>
                            <?php echo "<a href= 'description.php?see_more=$value[id]'><button type='button' class='more_btn tooltip' data-bs-target='#exampleModalToggle'
                                data-bs-toggle='modal'><span class='tooltiptext'>نظرة سريعة</span><i
                                    class='fa-regular fa-eye'></i></button>";?>
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
                            <?php echo " <a href='plumbing.php?add_to_cart=$value[id]'> <button class='btns btn-outline-success card_btn'><i class='fa-solid fa-cart-plus'></i></button></a>"; ?>

                        </p>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
    <!-- footer -->
    
    <?php include_once("./inc/footer.php");?>
</loader>

    <!-- END FOOTER -->

    
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
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>

</html>