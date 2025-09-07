<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

          <link rel="stylesheet" href="./assets/css/normalize.css">
    <link rel="stylesheet" href="./assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="./assets/css/master.css">
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap"
      rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  -->
    <link rel="stylesheet" href="./assets/css/profile.css">
   
    <title> User Profile </title>
</head>

<body>
  
<!-- start navbar -->
<!-- navbar(icons) -->
<nav class="navbar navbar-expand-lg navbar__icons  ">
  <div class="container">
    <a class="navbar-brand logo ms-3" href="#"><img src="/assets/img/Housey.svg" alt=""></a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="ابحث عن المنتج..." aria-label="Search">
      <button class="btn btn-outline-success me-1" type="submit">بحث</button>
    </form>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-users"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../PROJECT/login/login.html "><i class="fa fa-arrow-left"> </i>تسجيل
                الحروج</a></li>
            <li><a class="dropdown-item" href="./vendorsignup.html"><i class="fa fa-user-plus"> </i> تسجيل
                كصاحب محل</a></li>
          </ul>
        </li>
      </ul>
      <b><a href="./profile.html" >Mark</a></b>
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
          <a href="../final/home.html" class="cool-link"></i>الرئيسية</a>
        </li>
        <li>
          <a href="../Products/Plumbing_Products.html" class="cool-link"></i>سباكة</a>
        </li>
        <li>
          <a href="../Products/Carpentary_Products.html" class="cool-link"></i>نجارة</a>
        </li>
        <li>
          <a href="../Products/Painting_Products.html" class="cool-link"></i>نقاشة</a>
        </li>
        <li>
          <a href="../Products/Electro_Products.html" class="cool-link"></i>كهرباء</a>
        </li>
        <li>
          <a href="../About Us/about use .html" class="cool-link"></i>اعرف عنا</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- end navbar -->

    <div class="main">
        <!-- Nav Bar -->
        <div class="contanier">
          <h1 class="hp-relative">الصفحة الشخصية</h1>
          <div class="profile-page m-20">
           <!-- Start Overview -->
           <div class="overview bg-white rad-10 d-flex align-center">
             <div class="avatar-box txt-c p-20">
               <img class="rad-half mb-10" src="./assets/img/avatar.png" alt="">
               <h3 class="m-0">هاجر جمال</h3>
                      
             </div>
             <div class="info-box w-full txt-c-mobile">
               <!-- Start Information Row -->
               <div class="box p-20 d-flex align-center">
                 <h4 class="c-grey fs-15 m-0 w-full">معلومات عامة</h4>
                 <div class="fs-14">
                   <span class="c-grey">الاسم:</span>
                   <span>هاجر جمال</span>
                 </div>
                 <div class="fs-14">
                   <span class="c-grey"> الجنس:</span>
                   <span>انثي</span>
                 </div>
                 <div class="fs-14">
                   <span class="c-grey">الدولة:</span>
                   <span>مصر</span>
                 </div>
                
               </div>
               <!-- End Information Row -->
               <!-- Start Information Row -->
               <div class="box p-20 d-flex align-center">
                 <h4 class="c-grey w-full fs-15 m-0">معلومات شخصية</h4>
                 <div class="fs-14">
                   <span class="c-grey">الايميل:</span>
                   <span>o@nn.sa</span>
                 </div>
                 <div class="fs-14">
                   <span class="c-grey">رقم الهاتف:</span>
                   <span>019123456789</span>
                 </div>
                 <div class="fs-14">
                   <span class="c-grey">تاريخ الميلاد:</span>
                   <span>25/10/1982</span>
                 </div>
                 
               </div>
               <!-- End Information Row -->
               <!-- Start Information Row -->
               
               <!-- End Information Row -->
               <!-- Start Information Row -->
            
               <!-- End Information Row -->
             </div>
           </div>
           <!-- End Overview -->
           <!-- Start Other Data -->
           <div class="other-data d-flex gap-80">
             <div class="skills-card p-20 bg-white rad-10 mt-20">
               <h2 class="mt-0 mb-10">المفضلة</h2>
               <!-- <p class="mt-0 mb-20 c-grey fs-15">اعمالي السابقة </p> -->
               <ul class="m-0 txt-c-mobile">
                 <li><span>ahmed mahomed</span></li>
                 <li><span>yaser ziad</span></li>
          
               </ul>
             </div>
             <div class="activities p-20 bg-white rad-10 mt-20">
               <h2 class="mt-0 mb-10">اخر الانشطة</h2>
               <p class="mt-0 mb-20 c-grey fs-15">اخر انشطة المستخدم</p>
               <div class="activity d-flex align-center txt-c-mobile">
                 <img src="./assets/img/activity-01.png" alt="">
                 <div class="info">
                   <span class="d-block mb-10">Store</span>
                   <span class="c-grey">Bought The Mastering Python Course</span>
                 </div>
                 <div class="date">
                   <span class="d-block mb-10">18:10</span>
                   <span class="c-grey">Yesterday</span>
                 </div>
               </div>
               <div class="activity d-flex align-center txt-c-mobile">
                 <img src="./assets/img/activity-02.png" alt="">
                 <div class="info">
                   <span class="d-block mb-10">Academy</span>
                   <span class="c-grey">Got The PHP Certificate</span>
                 </div>
                 <div class="date">
                   <span class="d-block mb-10">16:05</span>
                   <span class="c-grey">Yesterday</span>
                 </div>
               </div>
               <div class="activity d-flex align-center txt-c-mobile">
                 <img src="./assets/img/activity-03.png" alt="">
                 <div class="info">
                   <span class="d-block mb-10">Badges</span>
                   <span class="c-grey">Unlocked The 10 Skills Badge</span>
                 </div>
                 <div class="date">
                   <span class="d-block mb-10">18:05</span>
                   <span class="c-grey">Yesterday</span>
                 </div>
               </div>
               <div class="activity d-flex align-center txt-c-mobile">
                 <img src="./assets/img/activity-01.png" alt="">
                 <div class="info">
                   <span class="d-block mb-10">Store</span>
                   <span class="c-grey">Bought The Typescript Course</span>
                 </div>
                 <div class="date">
                   <span class="d-block mb-10">12:05</span>
                   <span class="c-grey">Yesterday</span>
                 </div>
               </div>
             </div>
           </div>
           <!-- End Other Data -->
         </div>
       
        </div>
    </div>

<!-- footer -->

<footer>
  <div class="foot">
    <div class="container">
      <div class="row">
        <div class="foot__content col-lg-4 offset-lg-4">
          <h2>عن موقعنا </h2>
          <p>هنوصلك بالصنايعي بأسهل الطرق، ولو بتدور على الخامات هتلاقيها عندنا وكمان هتعرف أفضلها لأنها
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
<!-- END FOOTER -->

</body>
<script src="/vendor-new.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
  integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
  integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>