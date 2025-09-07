<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../vendor-new.css">
    <title> Edit My Card </title>
</head>

<body onload="loading()">

    <div id="loader" class="loader"></div>

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





        <!-- START EDIT page -->
        <div class="container" >

            <div class="row">

                <div class="main-div">

                    <div class="right-side" >
                        
                        <form method="post"
                        action="./index.php"
                        enctype="multipart/form-data">
                        
                        
                        <input type="submit" class="btns btns-primary w-100"
                        value="عودة الي السابق">
                        
                    </form>
                </div>
            <section class="left-side mt-5">
                <div class="header-text pb-2">
                    <h3 class="text-center"><b>تـعديــــل المنتــــج </b>
                    <h1>
                        </div>
                        <div class="modal-body">
                                                        <form method="post" action="./index.php?action=update" enctype="multipart/form-data">
                                                            
                                                            <input  name="id" type="text" value="<?php echo $user["id"]; ?>" hidden>
                                                            
                                                            <div class="center">
                                                                <!-- <label for="input1" class="image-label1 center">
                                                                    <i class="fa fa-3x fa-camera center "></i>
                                                                    <input id="input1" type="file" required class="d-none"
                                                                    name="image_one">
                                                                    <span id="imageName" class="center"></span>
                                                                </label>
                                                                
                                                                <label for="input2" class="image-label2 center">
                            <i class="fa fa-3x fa-camera center "></i>
                                                    <input id="input2" type="file" required class="d-none"
                                                    name="image_two">
                                                    <span id="imageName" class="center"></span>
                                                </label>
                                                
                                                <label for="input3" class="image-label3 center">
                                                    <i class="fa fa-3x fa-camera center "></i>
                                                    <input id="input3" type="file" required class="d-none"
                                                    name="image_three">
                                                    <span id="imageName" class="center"></span>
                                                </label> -->
                                                <div class="d-flex justify-content-evenly mb-4">

                                                    <label for="input1" class="image-label btn btns-primary ">
                                                        <img src="<?php echo $product["image_one"]; ?>" alt="">
                                                        اختر الصورة الأولي
                                                    </label> 
                                                    <input id="input1" type="file" 
                                                name="image_one" hidden> 

                                                <label for="input2" class="image-label btn btns-primary">
                                                 <img src="<?php echo $product["image_two"]; ?>" alt="">

                                                    اختر الصورة الثانية
                                                    <input id="input2" type="file" 
                                                    name="image_two" hidden > 
                                                </label> 
                                                
                                                <label for="input3" class="image-label btn btns-primary">
                                                     <img src="<?php echo $product["image_three"]; ?>" alt="">

                                                    اختر الصورة الثالثة
                                                </label> 
                                                <input id="input3" type="file" 
                                                name="image_three" hidden> 
    
                                            </div>
                    </div>
                    <div class="row mt-12">
                        <div class="col-md-12">
                            <input type="text" class="form-control mt-2" id="product_name2"
                            placeholder="تعديل اسم المنتج" name="name" value="<?php echo $user["name"]; ?>"
                            required>
                            
                        </div>
                        
                            <div class="col-md-12 mt-3">
                                <input type="number" min="0" class="form-control" name="price" id="product_price2" 
                                placeholder="تعديل السعر (ج.م)" value="<?php echo $user["price"]; ?>">
                            </div>
                            <div class="col-md-12 mt-3">
                                <input type="number" min="0" class="form-control" 
                                placeholder=" تعديل عدد القطع المتوفرة (قطعة)" name="available_pieces"
                            id="product_count2" value="<?php echo $user["available_pieces"]; ?>">
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="mb-3">
                              
                                <textarea type="text" class="form-control" id="message-text2"
                                placeholder="تعديل معلومات المنتج"name="details" value="<?php echo $user["details"]; ?>"></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-12 mt-3">
                        <label class="attribute "> تعديل العروض و التخفيضات :</label>
                        <input type="number" min="0" class="form-control mt-1" 
                        placeholder="اضف السعر الجديد (ج.م)" name="offers" value="<?php echo $user["offers"]; ?>">
                    </div>
                    <div class="modal-footer mt-3">
                        <input type="submit" value="حفظ" class="btns btns-primary">
                        <!-- <button type="submit" class="btns btns-primary" id="kero" > save</button> -->
                    </div>
                </form>
            </div>
            
            
        </section>
    </div>
    </div>
    </div>
        <!-- END EDIT MODAL -->
        
        
        
        
        
        
        
        
        
        
        
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
    </div>
    </div>
    <!-- END FOOTER -->


</body>
<script src="../vendor-new.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>

</html>