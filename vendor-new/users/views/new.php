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
    <title> Housey </title>
    <link rel="icon" href="../assets/images/Housey.svg">
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
                <a class="navbar-brand logo ms-3" href="#"><img src="../assets/images/Housey.svg" alt=""></a>
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
            <a href="index.php"><img src="../assets/images/IMGS/[removal.ai]_tmp-63fb26bfc4317 (2).png" alt="" class="user_image" style="width:8%; float:left; margin-right:260px;"></a>

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
                    <!-- <b><a href="/hagar/profile.html">Mark</a></b> -->
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
                            <a href="../../Home/users/views/home.php" class="cool-link"></i>الرئيسية</a>
                        </li>
                        <li>
                            <a href="../../products/views/plumbing.php" class="cool-link"></i>سباكة</a>
                        </li>
                        <li>
                            <a href="../../products/views/carpentary.php" class="cool-link"></i>نجارة</a>
                        </li>
                        <li>
                            <a href="../../products/views/painting.php" class="cool-link"></i>نقاشة</a>
                        </li>
                        <li>
                            <a href="../../products/views/electro.php" class="cool-link"></i>كهرباء</a>
                        </li>
                        <li>
                            <a href="#" class="cool-link"></i>اعرف عنا</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end navbar -->
    <div class="container-fluid">
            <div class="">
                <div class="main-div ">
                         <div class="right-side">

                        <!-- <form action="./index.php?action=update"></form> -->
                        <div class="icon-div center">
                            <i class="fa-solid fa-shop fa-3x"></i>
                        </div>
                        <h5 class="center"> معـرضـــي </h5>
                        <div class="accordion  accordion-flush" id="accordionFlushExample">


                            <div class="accordion-item bg-color mt-5 ">
                                <h2 class="accordion-header " id="flush-headingThree">
                                    <button class="accordion-button bg-color collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        معلومات الملف الشخصي
                                    </button>
                                </h2>

                          <?php foreach ($info as $value) {
                                    # code...
                                    ?>

                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">الصورة الشخصية</label>
                                                <div class="image_prof">
                                                    <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjMyiFn8FNJYqTGqznSrrBAtwlIBQj9K_ioA&usqp=CAU"
                                                                class="w-100 " alt="images"> -->
                                                    <img class="w-100" src="../imgs/<?php echo $value['image']; ?>">
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">اسمك</label>
                                                    <input class="form-control" type="text"
                                                          value="<?php echo $value["name"]; ?>"
                                                            aria-label="Disabled input example" disabled="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">اسم المحل</label>
                                                        <input class="form-control" type="text"
                                                             value="<?php echo $value["store_name"]; ?>"
                                                            aria-label="Disabled input example" disabled="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">عنوان المحل</label>
                                                        <input class="form-control" type="text"
                                                            value="<?php echo $value["address"]; ?>"
                                                                aria-label="Disabled input example" disabled="">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="formFile" class="form-label">رقم التليفون</label>
                                                            <input class="form-control" type="text"
                                                                value="<?php echo $value["phone"]; ?> "
                                                                    aria-label="Disabled input example" disabled="">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">رقم السجل الضريبي</label>
                                                                <input class="form-control" type="text"
                                                                  value="<?php echo $value["tax_number"]; ?> "
                                                                    aria-label="Disabled input example" disabled="">
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">البريد الإلكتروني</label>
                                                                <input class="form-control" type="email"
                                                                    value="<?php echo $value["email"]; ?>"
                                                                        aria-label="Disabled input example" disabled="">
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="formFile" class="form-label">القسم</label>
                                                                    <input class="form-control" type="text"
                                                                        value="<?php echo $value["field"]; ?>"
                                                                            aria-label="Disabled input example" disabled="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item mt-2">
                                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                                <button class="accordion-button bg-color collapsed" type="button"
                                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                                    تعديل الملف الشخصي
                                                                </button>
                                                            </h2>
                                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                                <div class="accordion-body bg-color">
                                                                    <p>
                                                                        بتعديلك بعض البيانات الشخصية يرجي العلم
                                                                        انه لا يمكنك تعديل بعض البيانات التي ادخلتها عند
                                                                        تسجيل الدخول مثل اسمك ، و رقم السجل الضريبي ، و خلافه ..

                                                                    </p>
                                                                </div>





                                                                    <form method="post"
                                                                            action="./index.php?id=<?php echo $value['id']; ?>&action=editt"
                                                    enctype="multipart/form-data">


                                        <input type="submit" class="d-block btns btns-primary w-100"
                                                value="تعديل البيانات">

                                                </form>
                                        
                                        
                                        
                                    </div>
                                </div>

                            </div>

                        </div>
                                                <?php } ?>

                        
                        <div class="left-side">
                            
                        <!-- Modal For Add -->
                        <button type="button" class="btns btn-outline-success" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@mdo">اضافة منتج جديد</button>


                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            style="display: none;" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header d-block">
                                        <button type="button" class="btn-close fs-5 d-block" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <h3 class="modal-title  d-block text-center" id="exampleModalLabel">اضف منتجك
                                            الجديد<h1>
                                    </div>

                                    <div class="modal-body">
                                        <form method="post" action="index.php?action=store"
                                            enctype="multipart/form-data">
                                            <div class="center">
                                                <label for="img" class="attribute d-block mb-4">
                                                    <h4>  اضف صور المنتج <span style="font-size:16px; color:red;">(مطلوب)</span>  </h4>
                                                </label>

                                                <!-- ADD PHOTOS IN ADD PRODUCT -->
                                                <!-- <label for="inputTag" class="image-label center" hidden>
                                                    <i class="fa fa-3x fa-camera center " hidden></i>
                                                    <input id="inputTag" type="file" hidden
                                                    name="image">
                                                    <span id="imageName" class="center" hidden></span>
                                                </label> -->




                                                <div class="d-flex justify-content-between">

                                                    <label for="input1" class="image-label btn btns-primary ">
                                                        اختر الصورة الأولي
                                                    </label> 
                                                    <input id="input1" type="file" required
                                                name="image_one" hidden> 

                                                <label for="input2" class="image-label btn btns-primary">
                                                    اختر الصورة الثانية
                                                    <input id="input2" type="file" required
                                                    name="image_two" hidden > 
                                                </label> 
                                                
                                                <label for="input3" class="image-label btn btns-primary">
                                                    اختر الصورة الثالثة
                                                </label> 
                                                <input id="input3" type="file" required
                                                name="image_three" hidden> 
    
                                            </div>
                                                
                                            <div class="d-flex justify-content-between" id="error" style="color:red;">
                                                <small>*هذا الحقل مطلوب</small>
                                                <small>*هذا الحقل مطلوب</small>
                                                <small>*هذا الحقل مطلوب</small>
                                            </div>

                                            <div class="d-flex justify-content-between" id="success" style="color:green;">
                                                <small>تمت الإضافة بنجاح !</small>
                                                <small>تمت الإضافة بنجاح !</small>
                                                <small>تمت الإضافة بنجاح !</small>
                                            </div>
                                            
                                            

                                                
                                                <!-- END ADD PHOTOS IN ADD PRODUCT -->





                                            </div>
                                            <div class="row mt-12">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control mt-2" id="product_name"
                                                        placeholder="اسم المنتج" name="name" required>
                                                </div>

                                                <div class="col-md-12 mt-3">
                                                    <input type="number" min="0" class="form-control" id="product_price"
                                                        required placeholder="اضف السعر (ج.م)" name="price">
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <input type="number" min="0" class="form-control" required
                                                        placeholder=" القطع المتوفرة (قطعة)" id="product_count"
                                                        name="available_pieces">
                                                </div>

                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="message-text"name="details"
                                                            placeholder="معلومات عن المنتج" required></textarea>
                                                    </div>

                                                    <label hidden class="attribute block">اختر القسم الذي ينتمي اليه
                                                        المنتج :</label>
                                                    <input class="form-check-input" type="radio" name="field"
                                                        id="flexRadioDefault1" hidden>
                                                    <label class="form-check-label pe-1 ps-4" for="flexRadioDefault1"
                                                        hidden checked>
                                                        كهرباء
                                                    </label>


                                                    <input class="form-check-input" type="radio" name="field"
                                                        id="flexRadioDefault" hidden>
                                                    <label class="form-check-label pe-1 ps-4" for="flexRadioDefault2"
                                                        hidden>
                                                        سباكة
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="field"
                                                        id="flexRadioDefault" hidden>
                                                    <label class="form-check-label pe-1 ps-4" for="flexRadioDefault2"
                                                        hidden>
                                                        نجارة
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="field"
                                                        id="flexRadioDefault" hidden>
                                                    <label class="form-check-label pe-1 ps-4" for="flexRadioDefault2"
                                                        hidden>
                                                        نقاشة
                                                    </label>

                                                </div>

                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <label class="attribute ">العروض و التخفيضات <span style="font-size:16px; color:green;">(اختياري)</span></label>
                                                <input type="number" min="0" class="form-control mt-1"
                                                    name="offers" placeholder="اضف السعر الجديد (ج.م)">
                                            </div>
                                            <div class="modal-footer mt-3">
                                                <button type="button" class="btns btns-secondary"
                                                    data-bs-dismiss="modal">اغلاق</button>
                                                <!-- <button type="submit" class="btns btns-primary"
                                                >حفظ</button> -->
                                                <input type="submit" id="save" value="حفظ" class="btns btns-primary">

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Add -->
                        


                        
                        <!-- < class="cards_hide" id="cards_hide"> -->
                        <div class="cards_hide " id="cards_hide">
                                <div class="row " id="main">
                            
                            
                            <?php //require_once("../index.php");
                            // var_dump($result);
                            // die();
                            
                            foreach ($result as $value):
                                // var_dump($result);
                                // die(); ?>
            
                               <div class='card mt-5 '>
                <div class='position-relative'>
                    <?php if ($value['offers'] > 0): ?>
                        <span class='badge discount_tag'>عرض خاص</span>
                        <?php endif; ?>

                        <div id='carouselExampleAutoplaying' class='carousel slide' data-bs-ride='carousel'>
                            <div class='carousel-inner'>
                                <div class='carousel-item active'>
                                    <img src="../imgs/<?php echo $value['image_one']; ?>"class='card-img-top d-block w-100'
                                        alt='Card image cap'>
                                </div>
                                <div class='carousel-item'>
                                    <img src="../imgs/<?php echo $value['image_two']; ?>" class='card-img-top d-block w-100'
                                        alt='Card image cap'>
                                </div>
                                <div class='carousel-item'>
                                    <img src="../imgs/<?php echo $value['image_three']; ?>" class='card-img-top d-block w-100'
                                        alt='Card image cap'>
                                </div>
                            </div>
                        </div>
                        <!-- <div class='btns'>
                        

                         <button type="button" class="more_btn" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" title="نظرة سريعة"><i class="fa-regular fa-eye"></i></button>

                         

                        </div> -->
                    </div>
                    <div class='card-body'>
                        <h5 class='card-title'>
                            <?php //echo $value['name']; ?>
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
                            <b> <?php echo $value['name']; ?></b> <br>

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
                            
                            
                            
                        </p>
                        <div class="card-body d-flex justify-content-between">
                            

                                                <form method="post"
                                                    action="index.php?id=<?php echo $value['id']; ?>&action=edit"
                                                    enctype="multipart/form-data">


                                        <button class="btn btns-secondary" type="submit" value="تعديل" class=""><i class="fa-solid fa-pen-to-square" style='color:green'; ></i></button>
                                                </form>

                                                <form method="post"
                                                    action="index.php?id=<?php echo $value['id']; ?>&action="
                                                    enctype="multipart/form-data">

                                <button class="btn btns-secondary" type="submit" title="نظرة سريعة"><i class="fa-regular fa-eye" style='color:#2c99b5';></i></button>
            <!-- <button type="button" class="more_btn" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" title="نظرة سريعة"><i class="fa-regular fa-eye"></i></button> -->
           
                                                </form>

                                                <form method="post"
                                                    action="index.php?id=<?php echo $value['id']; ?>&action=delete"
                                                    enctype="multipart/form-data">
                                                    <button class="btn btns-secondary" type="submit"><i class="fa-solid fa-trash-can"></i></button>

                                                    <!-- <a href="#" class=" btn btns-secondary bg-body-emphasis w-50 me-1">حذف</a> -->
                                                </form>
                        </div>
                    </div>
                </div>

                            <?php endforeach; ?>
                                </div>
                                </div>

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
<script>
                                                var input1 = document.getElementById("input1");
                                                var input2 = document.getElementById("input2");
                                                var input3 = document.getElementById("input3");
                                                var err = document.getElementById("error");

                                                var succ1 = document.getElementById("success1");
                                                var succ2 = document.getElementById("success2");
                                                var succ3 = document.getElementById("success3");

                                                var save = document.getElementById("save");

                                                save.onclick= function()
                                                {
                                                    if(input1.value.length=="" && input2.value.length=="" && input3.value.length=="")
                                                    {
                                                        err.style.visibility="visible";
                                                    }
                                                    // else if(input1.value !=null)
                                                    // {
                                                    //     succ1.style.visibility="visible";
                                                    // }
                                                    // else if(input2.value!=null)
                                                    // {
                                                    //     succ2.style.visibility="visible";
                                                    // }
                                                    // else if(input3.value!null)
                                                    // {
                                                    //     succ3.style.visibility="visible";
                                                    // }
                                            
                                                }
                                            </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>

</html>



