<?php
 require_once("../../connection.php");
require_once("../../lib/session.php");
session::init();



//logout mechanism is created here
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['action'])){
    
    session::destroy();
   // header("location : ../../login.php");
}



// require_once("../../../connection.php");
$stmt = $pdo->prepare("SELECT * FROM cart WHERE  user_id =1");
$stmt->execute();
$count_cart_items = count($stmt->fetchAll(PDO::FETCH_ASSOC));


?>

    <!------------------------navigation  ------------------------->
    <!-- start navbar -->
    <!-- navbar(icons) -->
    <nav class="navbar navbar-expand-lg navbar__icons  ">
        <div class="container">
            <a class="navbar-brand logo ms-3" href="./home.php"><img src="./assets/imgs/Housey.svg" alt=""></a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="ابحث عن المنتج..." aria-label="Search">
                <button class="btn btn-outline-success me-1" type="submit">بحث</button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa fa-users"></i>
                        </a>
                        <ul class="dropdown-menu">
                          
                            <?php
                            $userlogin = session::get("login");
                            if($userlogin == true){ ?>
                        
                            
                            <li><a class="dropdown-item" href="?action=logout"><i class="fa-solid fa-arrow-right-from-bracket"></i>تسجيل الخروج</a></li>
                            <?php }else{ ?>

                                <li><a class="dropdown-item" href="../../login.php"><i class="fa-solid fa-arrow-right-to-bracket"></i>تسجيل الدخول</a></li>
                            <li><a class="dropdown-item" href="../../registration.php"><i class="fa fa-user-plus"> </i>أنشئ حساب</a></li>

                        <?php } ?>

                        
                        </ul>
                    </li>
                </ul>
                <b><a href="#">Mark</a></b>
                <a href="./cart.php" class="position-relative">
                    <i class="fa fa-cart-arrow-down">
                        <?php
                        if ($count_cart_items > 0) {
                            echo " <sup class='number '> $count_cart_items </sup>";
                        } ?>
                    </i>
                </a>


            </div>
    </nav>
    <!-- navbar(links) -->
    