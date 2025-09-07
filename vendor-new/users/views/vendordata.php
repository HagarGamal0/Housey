<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../vendor-new.css">
    <title> Housey </title>
    <link rel="icon" href="../../assets/images/Housey.svg">
</head>

<body onload="loading()">
    <!-- loader -->
    <div id="loader" class="loader"></div>
    <!-- end loader -->

    <div id="myBody">
        <!-- start navbar -->
        <!-- navbar(icons) -->
        <nav class="navbar navbar-expand-lg navbar__icons  ">
            <div class="container">
                <a class="navbar-brand logo ms-3" href="#"><img src="../../assets/images/Housey.svg" alt=""></a>
                <form class="d-flex" role="search" method="Get">
                    <input name="search" class="form-control me-2" type="search" placeholder="ابحث عن المنتج..."
                        aria-label="Search">
                    <button class="btn btn-outline-success me-1" type="submit" name="btn-search">بحث</button>
                </form>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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
                                <li><a class="dropdown-item" href="./login/login.html"><i class="fa fa-arrow-left">
                                        </i>تسجيل الدخول</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa fa-user-plus"> </i>أنشئ حساب</a></li>
                            </ul>
                        </li>
                    </ul>
                    <b><a href="/hagar/profile.html">Mark</a></b>
                    <a href="#">
                        <i class="fa fa-cart-arrow-down"></i></a>
                </div>
        </nav>
        <!-- navbar(links) -->

        <nav class="navbar__links sticky-top">
            <div class="container">
                <div class="nav-bar">
                    <ul class="links">
                        <li>
                            <a href="./final/home.html" class="cool-link"></i>الرئيسية</a>
                        </li>
                        <li>
                            <a href="./Products/Plumbing_Products.html" class="cool-link"></i>سباكة</a>
                        </li>
                        <li>
                            <a href="./Products/Carpentary_Products.html" class="cool-link"></i>نجارة</a>
                        </li>
                        <li>
                            <a href="./Products/Painting_Products.html" class="cool-link"></i>نقاشة</a>
                        </li>
                        <li>
                            <a href="./Products/Electro_Products.html" class="cool-link"></i>كهرباء</a>
                        </li>
                        <li>
                            <a href="#" class="cool-link"></i>اعرف عنا</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navbar -->
    <div class="container">
            <div class="row">
                <div class="main-div">
                    <form method="post"
                                                    action="./index.php"
                                                    enctype="multipart/form-data">


                                        <input type="submit" class="btns btns-primary w-100"
                                                value="عودة الي السابق">

</form>
                                        
                        
                        
                        <div class="left-side">
                  
                    

                        <form  method="post" action="index.php?id=<?php //echo $value["id"]; ?>&action=updatedata"
                            enctype="multipart/form-data">

                            <div class="profile-pic">
                                <label class="-label" for="file">
                                    <span> تعديل الصورة </span>
                                </label>
                                <input id="file" type="file" onchange="loadFile(event)" name="image" />
                                <img src="../assets/images/1444714083.svg" id="output" alt="img" />
                            </div>
                            <input type="text"  name="id" hidden>

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">اسم المحل الجديد</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="" id="name" name="store_name"required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address" class="col-sm-2 col-form-label">عنوان المحل الجديد</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address" name="address"required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone" class="col-sm-2 col-form-label">رقم التليفون</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" name="phone" required >
    
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">البريد الإلكتروني</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" name="email"required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-sm-2 col-form-label">كلمة السر الجديدة</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password"required>
                                    </div>
                                </div>

                                <div class="col-12 text-center m-auto mb-5">
                                    <input type="submit" class=" form-control btns btns-primary" value="حفظ">
                                </div>
                            </form>
                        
                            <!-- Form For Editing Data (end) -->
               


                         </div> 


                     </div>
                     
                    </div>
                </div>
 



       
        <!-- START FOOTER -->
        <!-- footer -->

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


</body>
<script src="../vendor-new.js"></script>

<!-- <script>
var loadFile = function (event) {
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
}
// *****************************************
</script> -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>

</html>