<?php
require_once("../../connection.php");
require_once("../index.php");

///////////////////////////////
$stmt = $pdo->prepare("SELECT * FROM cart WHERE  user_id =1"); //SESSION['id']
$stmt->execute();
$count_cart_items = count($stmt->fetchAll(PDO::FETCH_ASSOC));

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/description.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./assets/css/nav_footer.css?v=<?php echo time(); ?>">
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- <style>
      .error{
        color: #ff0000;}
      </style> -->
</head>

<body onload="loading()">

    <div id="loader" class="loader"></div>
    <loader id="myBody">
        <!-- navbar icons -->
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
        <!-- ===================================(  contant of page )=========================================== -->
        <main class="container mt-5 row body ">




            <!-- <div class="col-lg-3 col-md-1 col-sm-1"> </div> -->
            <div class="col-sm-1 col-sm-2 col-sm-1 "> </div>

            <div class="col-lg-5 col-lg-5 col-lg-5 des">
                <?php
                //display data on web page
                
                foreach ($info as $value):
                    ?>
                    <h4 class="product_name">
                        <?php echo $value["name"]; ?>
                    </h4>
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 stars</label>
                    </div>
                    <div>
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
                        <p>
                            <?php echo $value["brand_name"]; ?>
                        </p>
                        <span> تفاصيل المنتج</span>
                        <p>
                            <?php echo $value["details"]; ?>
                        </p>
                    </div>
                    <div>
                        <?php echo " <a href='description.php?see_more=$value[id]'> <button class='btns btn-outline-success card_btn mt-5'><i class='fa-solid fa-cart-plus'>اضافة الى السلة</i></button></a>"; ?>
                    </div>
                </div>
                <!-- ==========================( caruosle  )======================================== -->

                <!-- <div class="col-lg-1 col-md-1 col-sm-1"> </div> -->
                <div class="col-lg-5 mt-5 col-lg-5 col-lg-5">
                    <div id='carouselExampleAutoplaying' class='carousel slide' data-bs-ride='carousel'>
                        <div class='carousel-inner'>
                            <div class='carousel-item active'>
                                <img src=<?php echo $value['image_one']; ?> class='rounded card-img-top d-block '
                                    alt='Card image cap'>
                            </div>
                            <div class='carousel-item'>
                                <img src=<?php echo $value["image_two"]; ?> class='rounded card-img-top d-block '
                                    alt='Card image cap'>
                            </div>
                            <div class='carousel-item'>
                                <img src="<?php echo $value["image_three"]; ?>" class='rounded card-img-top d-block '
                                    alt='Card image cap'>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-1 col-sm-1 col-sm-1 "> </div>

                </div>

            <?php endforeach ?>



        </main>








        <!-- 
<div class="main">
        <loader class="products col-md-6">
          <div class="details"> 
    
    
            <div class="form">
              <div class="name"> 
              <label for="test"><h2>اسم المنتج</h2></label>
            </div>
   
            <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
</div> 

    <div class="price" style="display: inline-flex;"> 
    
      <label for="test"><h2 style="padding-right: 15px;">3,800 EGP</h2></label>
      <br>
      <label style="text-decoration: line-through; color:#dc3545;" for="test"><h2>5,000 EGP</h2></label>

    </div>
            <div class="owner"> 
              <label for="test"><h5> :البائع المنتج</h5></label>
            </div>
    
           
          </div>
           
    
           <div class="descr"> <h4>: الوصف </h4>
            <p>  lorem lorem lLorem ipsum dolor sit amet consectetur adipisicing elit. Fugit,
              doloribus corporis aliquid similique ipsa perspiciatis ducimus repudiandae sint velit exercitationem nemo
              reprehenderit rem corrupti error, rerum voluptate, dolor nihil illum.</p>
            </div>
          
          </div> -->






























        <!-- START FOOTER -->
        <!-- footer -->

        <?php include_once("./inc/footer.php"); ?>

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

<script src="./assets/js/description.js"></script>

</html>