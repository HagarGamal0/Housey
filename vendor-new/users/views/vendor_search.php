
<?php
if (isset($_GET['btn-search'])) {
require_once("../../connection.php");
$SEARCH = $db->prepare("select * from products where name LIKE :value");
$SEARCH_VALUE = "%" . $_GET['search'] . "%";

$SEARCH->bindParam("value", $SEARCH_VALUE);
$SEARCH->execute();
}
else{

    $sql = "select * from products";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(pdo::FETCH_ASSOC);
    // inject view ---------
    $sql = "select * from stores";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $info = $stmt->fetchAll(pdo::FETCH_ASSOC);
    // var_dump($info);
// die();

}


?>

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
    <link rel="stylesheet" href="../../vendor-new.css">
    <title> Vendor Profile </title>


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
            <input name="search" class="form-control me-2" type="search" placeholder="ابحث عن المنتج..." aria-label="Search">
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
                        <h5 class="center"> الكترو للكهرباء </h5>
                        <div class="accordion  accordion-flush" id="accordionFlushExample">


                            <div class="accordion-item bg-color mt-5 ">
                                <h2 class="accordion-header " id="flush-headingThree">
                                    <button class="accordion-button bg-color collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                        aria-expanded="false" aria-controls="flush-collapseThree">
                                        معلومات الملف الشخصي
                                    </button>
                                </h2>
                                <?php foreach ($info as  $value) {
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
                                                    <img class="w-100" src="../imgs/<?php echo $value['photo']; ?>">
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">اسمك</label>
                                                <input class="form-control" type="text" value="<?php echo $value["vendor_name"];?>"
                                                aria-label="Disabled input example" disabled="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">اسم المحل</label>
                                            <input class="form-control" type="text" value="<?php echo $value["name"]; ?>"
                                                aria-label="Disabled input example" disabled="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">عنوان المحل</label>
                                            <input class="form-control" type="text" value="<?php echo $value["address"];?>"
                                                aria-label="Disabled input example" disabled="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">رقم التليفون</label>
                                            <input class="form-control" type="text" value="<?php echo $value["phone"]; ?> "
                                                aria-label="Disabled input example" disabled="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">رقم السجل الضريبي</label>
                                            <input class="form-control" type="text" value="<?php echo $value["tax_number"]; ?> "
                                                aria-label="Disabled input example" disabled="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">البريد الإلكتروني</label>
                                            <input class="form-control" type="email" value="<?php echo $value["vendor_email"];?>"
                                                aria-label="Disabled input example" disabled="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">القسم</label>
                                            <input class="form-control" type="text" value="<?php echo $value["field"]; ?>"
                                                aria-label="Disabled input example" disabled="">
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
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
                                    <button class="d-block btn btn-outline-success w-100" id="edit_data"> تعديل
                                        البيانات</button>
                                </div>
                            </div>

                        </div>

                    </div>


                    <div class="left-side">
                        <!-- ALERT WHEN SAVING -->
                        <!-- END ALERT -->

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
                                     <form  method="post"  action="index.php?action=store" enctype="multipart/form-data">
                                            <div class="center">
                                                <label for="img" class="attribute d-block">
                                                    <h4> اضف صور المنتج </h4>
                                                </label>

                                                <label for="inputTag" class="image-label center">
                                                    <i class="fa fa-4x fa-camera center "></i>
                                                    <input id="inputTag" type="file"  required class="d-none" name="image">
                                                    <span id="imageName" class="center"></span>
                                                </label>






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
                                                        placeholder=" القطع المتوفرة (قطعة)" id="product_count" name="available_pieces">
                                                </div>

                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="message-text"
                                                            placeholder="معلومات عن المنتج"></textarea>
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
                                                <label class="attribute ">العروض و التخفيضات (اختياري)</label>
                                                <input type="number" min="0" class="form-control mt-1" required
                                                  name="offers"  placeholder="اضف السعر الجديد (ج.م)">
                                            </div>
                                            <div class="modal-footer mt-3">
                                                <button type="button" class="btns btns-secondary"
                                                    data-bs-dismiss="modal">اغلاق</button>
                                                <!-- <button type="submit" class="btns btns-primary"
                                                >حفظ</button> -->
                                                       <input type="submit" value="حفظ" class="btns btns-primary">

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Add -->
                        <!-- START EDIT MODAL -->

                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                            style="display: none;" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header d-block">
                                        <!--  -->
                                        <button class="btn-close fs-5 d-block" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <!--  -->
                                        <h3 class="modal-title  d-block text-center" id="exampleModalLabel2">تعديل
                                            المنتج <h1>
                                    </div>
                                    <div class="modal-body">
                                     <form  method="post"  action="index.php?action=update" enctype="multipart/form-data">
                                            <div class="center">
                                                <label for="img" class="attribute d-block">
                                                    <h4> تعديل صور المنتج </h4>
                                                </label>
                                                <label for="inputTag2" class="image-label center">
                                                    <i class="fa fa-4x fa-camera center "></i>
                                                    <input id="inputTag2" type="file" multiple required name="image"
                                                        class="d-none">
                                                    <span id="imageName2" class="center"></span>
                                                </label>
                                            </div>
                                            <div class="row mt-12">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control mt-2" id="product_name2"
                                                        placeholder="تعديل اسم المنتج"
                                                       name="name" required>
                                                </div>

                                                <div class="col-md-12 mt-3">
                                                    <input type="number" min="0" class="form-control"
                                                        name="price"  id="product_price2" required placeholder="تعديل السعر (ج.م)">
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <input type="number" min="0" class="form-control" required
                                                        placeholder=" تعديل عدد القطع المتوفرة (قطعة)"
                                                        name="available_pieces" id="product_count2">
                                                </div>

                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <textarea class="form-control" id="message-text2"
                                                            placeholder="تعديل معلومات المنتج"></textarea>
                                                    </div>

                                                    <label class="attribute block d-block">تعديل القسم الذي ينتمي اليه
                                                        المنتج :</label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault12">
                                                    <label class="form-check-label pe-1 ps-4" for="flexRadioDefault1">
                                                        كهرباء
                                                    </label>


                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault2">
                                                    <label class="form-check-label pe-1 ps-4" for="flexRadioDefault2">
                                                        سباكة
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault2">
                                                    <label class="form-check-label pe-1 ps-4" for="flexRadioDefault2">
                                                        نجارة
                                                    </label>
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault2">
                                                    <label class="form-check-label pe-1 ps-4" for="flexRadioDefault2">
                                                        نقاشة
                                                    </label>

                                                </div>

                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <label class="attribute ">تعديل العروض و التخفيضات</label>
                                                <input type="number" min="0" class="form-control mt-1" required
                                                    placeholder="اضف السعر الجديد (ج.م)" name="offers" >
                                            </div>
                                            <div class="modal-footer mt-3">
                                                <button type="button" class="btns btns-secondary"
                                                    data-bs-dismiss="modal">اغلاق</button>
                                                    <input type="submit" value="حفظ" class="btns btns-primary">
                                                <!-- <button type="submit" class="btns btns-primary" id="kero" > save</button> -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- END EDIT MODAL -->

                        <!-- Start Modal Product Description -->
                        <!-- Modal -->
                        <!-- Example Code -->

                        <div class="modal fade" id="exampleModalToggle" aria-labelledby="exampleModalToggleLabel"
                            tabindex="-1" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">تفاصيل المنتج </h1>
                                    </div>
                                    <div class="modal-body">
                                        هو قالب مستطيل ذو حجم قياسي يُستخدم في إنشاء المباني. يُعد الطوب الخرساني أحد
                                        منتجات البناء الأكثر
                                        تنوعًا والمتوفرة
                                        نظرًا لتنوع المظاهر التي يمكن تنفيذها باستخدام الطوب الخرساني.

                                        في الولايات المتحدة، يُطلق على الطوب الذي يحتوي على ركام من الرماد (الرماد
                                        المتطاير أو الرماد السفلي)
                                        طوب الرماد، وطوب
                                        السقاط (السقاط هو مرادف للرماد) في المملكة المتحدة، والطوب المفرغ أو الهوردي في
                                        الفلبين. يُعرف في
                                        نيوزيلندا وكندا بالطوب
                                        الخرساني (اسم شائع في الولايات المتحدة أيضًا). يُطلق عليه أيضًا اسم طوب البناء
                                        في نيوزيلندا. يُسمى في
                                        أستراليا طوب بيسر،
                                        نظرًا لكون شركة بيسر المورد الرئيسي للآلات التي صنعت الطوب الخرساني. تُستخدم
                                        مادة كلنكر كركام في طوب
                                        كلنكر. لغايات
                                        الاستخدام غير التقني، عادة ما تُعمم مصطلحات طوب الرماد وطوب السقاط لتشمل جميع
                                        هذه الأصناف.
                                    </div>
                                    <div class=" flex d-flex">
                                        <div class="modal-footer">
                                            <button class="btns btns-primary" data-bs-target="#exampleModalToggle2"
                                                data-bs-toggle="modal">حالة
                                                المنتج</button>
                                            <button class="btns btn-outline-success" onclick="cart()">اضف الى السلة <i
                                                    class="fa fa-shopping-cart"></i></button>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
                            aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">الحالة</h1>
                                    </div>
                                    <div class="modal-body">
                                        المنتج يصل خلال 15 يوما من تاريخ الشراء
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btns btns-primary" data-bs-target="#exampleModalToggle"
                                            data-bs-toggle="modal">
                                            موافق</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End Example Code -->
                        <!-- End Modal Product Description -->










                        <!-- Cards -->
                        <!-- Example Code -->
                        <div class="cards_hide" id="cards_hide">
                            <div class="d-flex flex-wrap">
                                <!-- Cards -->
                            <?php 
                            // var_dump($result);
                            // die();
                            
                            foreach ($SEARCH as $value) {
                                # code...
                            
                            ?>
                                <!-- Example Code -->
                            
                                <div class=" card mt-5 hide ">
                                    <div class="position-relative">
                                        <input type="text" <?php echo $value["id"];?> hidden >
                                        <span class=" badge discount_tag ">50% خصم</span>
                                        <div id="carouselExampleAutoplaying" class="carousel slide"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="../imgs/<?php echo $value['image']; ?>"
                                                        class="card-img-top d-block w-100"  alt="Card image cap">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="../imgs/<?php echo $value['image']; ?>"
                                                        class="card-img-top d-block w-100" alt="Card image cap">
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="../imgs/<?php echo $value['image']; ?>"
                                                        class="card-img-top d-block w-100" alt="Card image cap">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btns">
                                            <button class="cart_btn "><i class="fa-solid fa-cart-plus"></i></button>
                                            <button class="fav_btn"><i
                                                    class="fa-solid fa-heart-circle-plus"></i></button>
                                            <button type="button" class="more_btn" data-bs-target="#exampleModalToggle"
                                                data-bs-toggle="modal"><i class="fa-regular fa-eye"></i></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"> </h5>
                                        <p class="card-text ">
                                            <small><?php echo $value["name"]; ?></small>
                                            <br>
                                            <small>القطع المتوفرة <span class="me-2"></span><?php echo $value["available_pieces"]; ?></small>
                                            <br>
                                            <span class="price"><?php echo $value["price"];?></span></span>
                                            <span class="actual-price dissabled"><?php echo $value["offers"]; ?></span>
                                        </p>
                                        <!-- RATING start -->
                                        <div class="rating">
                                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                        </div>
                                        <!-- RATING end -->
                                        <div class="card-body d-flex justify-content-between">
                                            
                                            <a  class="btn btns-primary w-50" data-bs-toggle="modal"
                                                           data-bs-target="#exampleModal2" data-bs-whatever="@mdo"
                                                    >تعديل</a>
                                             
                                        

                                             
                                     <form  method="post" action="index.php?id=<?php echo $value['id']; ?>&action=delete" enctype="multipart/form-data">
                                     <input type="submit" value="حذف" class="btn btns-secondary bg-body-emphasis w-50 me-1">
                                             
                                         <!-- <a href="#" class=" btn btns-secondary bg-body-emphasis w-50 me-1">حذف</a> -->
                                     </form>
                
                                            </div>
                                        </div>
                                    </div>
                        <?php
                               }?>




                            

                                <!-- end card body -->



                            </div>
                        </div>
                        <!-- Form For Editing Data (start) -->
                                     <form id="vendor_data_edit" method="post"  action="index.php?action=updatedata" enctype="multipart/form-data">

                            <div class="profile-pic">
                                <label class="-label" for="file">
                                    <span>تغيير صورة المحل</span>
                                </label>
                                <input id="file" type="file" onchange="loadFile(event)" name="image" />
                                <img src="../assets/images/1444714083.svg" id="output" alt="img" />
                            </div>

                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">اسم المحل الجديد</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">عنوان المحل الجديد</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="address" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">رقم التليفون</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" name="phone" >
                                </div>
                            </div>
                             <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">البريد الإلكتروني</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" name="email" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">كلمة السر الجديدة</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputEmail3" name="password" >
                                </div>
                            </div>

                            <div class="col-12 text-center m-auto mb-5">
                                <input type="submit" class=" form-control btns btns-primary" value="حفظ" >
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>

</html>