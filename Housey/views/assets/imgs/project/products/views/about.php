<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/css/about_us.css">
    <link rel="stylesheet" href="./assets/css/nav_footer.css">
    <link rel="icon" href="./assets/imgs/Housey.svg">

    <title>Housey </title>
</head>

<body>
    <!------------------------navigation  ------------------------->
    <!-- start navbar -->
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
                        <a href="./about.php" class="cool-link active"></i>اعرف عنا</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- start of my paper (eisa)........................................................................................... -->
    <div class="first-section">
        <div class="section-head">
            <h1> عــــــــــــنّــــا</h1>
            <div class="section-text">
                <p> هاوسى هو موقع الكترونى يقوم فيه أصحاب المعارض بعرض بضائعهم وخدماتهم</p>
            </div>
        </div>
        <div>
            <h2>لـماذا نـحن</h2>
            <p class="section-text">هاوسى يستهدف جميع الفئات و ذلك لما يقدمه الموقع من سهولة استخدام وتنافس بين اصحاب
                المعارض لتقديم افضل خدمه باقل سعر.(اختار ما تريد ,أكد الطلب ,وستصلك الشحنه من 3 الى 5 ايام )</p>
            <!-- <div class="comment">
                    <textarea name="للتواصل" id="" placeholder=" اترك لنا تعليقا  "cols="58" rows="3"></textarea>
                    <button class="btn btn-outline-success d-block m-0 m-auto ">ارسال</button>
                </div> -->
        </div>

    </div>
    <!--navbar  فى مشكله ؟؟؟ عند الوقوف على الصور بالمؤشر يحصل تفاعل (الصوره تصغر) وهذا يخرب ال    -->
    <!-- افتكر تاخد اسم افراد الفريق الثلاثى وتسجلو فالصوره!!!!!!!!!!!!!!!!!! -->
    <div class="section">
        <div class="container">
            <div class="container row">
                <div class="gallery col-sm-6 col-lg-3 col-md-4 mb-5">
                    <div class="desc">
                        <p><a>محمد نجم</a>/ Eng <br>
                            Junior software developer
                        </p>

                    </div>
                    <a target="_blank" href="./img/IMG_٢٠٢٢١٢٢٧_١٤٣٣٣٤.jpg">
                        <img src="./assets/imgs/img/negmIMG-20230214-WA0020.jpg" alt="developer img">
                    </a>
                    <div class="imgicon ">
                        <a href=""><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                        <a href=""><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    </div>
                </div>

                <div class="gallery col-sm-6 col-lg-3 col-md-4 mb-5">
                    <div class="desc">

                        <p><a> عيسى علاء الدين </a>/ ENG <br>
                            Junior software developer</p>

                    </div>
                    <a target="_blank" href="./img/WhatsApp Image 2023-01-07 at 10.23.51 AM.jpeg">
                        <img src="./assets/imgs/img/eisaIMG_٢٠٢٣٠٢١٢_١٥٠٠٥٨.jpg" alt="developer img">
                    </a>
                    <div class="imgicon">
                        <a href=""><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                        <a href=""><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    </div>
                </div>

                <div class="gallery col-sm-6 col-lg-3 col-md-4 mb-5">
                    <div class="desc">
                        <p><a> كيرلس مرقس</a>/ Eng <br>
                            Junior software developer</p>
                    </div>
                    <a target="_blank" href="./img/WhatsApp Image 2023-01-07 at 10.24.06 AM.jpeg">
                        <img src="./assets/imgs/img/WhatsApp Image 2023-01-07 at 10.24.06 AM.jpeg" alt="developer img">
                    </a>
                    <div class="imgicon">
                        <a href=""><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                        <a href=""><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    </div>
                </div>

                <div class="gallery col-sm-6 col-lg-3 col-md-4 mb-5">
                    <div class="desc">
                        <p><a>محمود الصاوى</a>/ Eng <br>
                            Junior software developer</p>
                    </div>
                    <a target="_blank" href="./imgs/img/WhatsApp Image 2023-01-07 at 10.24.05 AM.jpeg">
                        <img src="./assets/imgs/img/WhatsApp Image 2023-01-07 at 10.24.05 AM.jpeg" alt="developer img">
                    </a>
                    <div class="imgicon">
                        <a href="https://www.linkedin.com/in/mahmoudelsawy9/"><i
                                class="fa-brands fa-linkedin fa-2xl"></i></a>
                        <a href="https://www.facebook.com/mahmoud.elsawy.731"><i
                                class="fa-brands fa-facebook fa-2xl"></i></a>
                    </div>
                </div>
                <div class="gallery col-sm-6 col-lg-3 col-md-4 mb-5">
                    <div class="desc">
                        <p><a> ألاء اكرم محمد</a>/ Eng <br>
                            Junior software developer</p>
                    </div>
                    <a target="_blank" href="./img/IMG_٢٠٢٢١٢٢٧_١٤٣٢١٣.jpg">
                        <img src="./assets/imgs/img/alaaeea34bce-bf5c-4e0e-bbff-0c071b5bf9b1.jpg" alt="developer img">
                    </a>
                    <div class="imgicon">
                        <a href="https://www.linkedin.com/in/alaa-akram-0a7534207"><i
                                class="fa-brands fa-linkedin fa-2xl"></i></a>
                        <a href="https://www.facebook.com/alaa.shams.794?mibextid=ZbWKwL"><i
                                class="fa-brands fa-facebook fa-2xl"></i></a>
                    </div>
                </div>
                <div class="gallery col-sm-6 col-lg-3 col-md-4 mb-5">
                    <div class="desc">
                        <p><a>هاجر جمال عبدالرحمن</a>/ Eng <br>
                            Junior software developer</p>
                    </div>
                    <a target="_blank" href="./img/IMG_٢٠٢٢١٢٢٧_١٤٣١٥١.jpg">
                        <img src="./assets/imgs/img/hagarc72f926c-4481-4ed6-ae0c-f14899dfe85e.jpg" alt="developer img">
                    </a>
                    <div class="imgicon">
                        <a href=""><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                        <a href=""><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    </div>
                </div>
                <div class="gallery col-sm-6 col-lg-3 col-md-4 mb-5">
                    <div class="desc">
                        <p><a>عايده حسن بحر</a>/ Eng <br>
                            Junior software developer
                        </p>
                    </div>
                    <a target="_blank" href="./img/IMG_٢٠٢٢١٢٢٧_١٤٣٣٠٤.jpg">
                        <img src="./assets/imgs/img/ayda4f0446a7-d8e5-4287-bd34-1b80b105b739.jpg" alt="developer img">
                    </a>
                    <div class="imgicon">
                        <a href=""><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                        <a href=""><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    </div>
                </div>
                <div class="gallery col-sm-6 col-lg-3 col-md-4 mb-5">
                    <div class="desc">
                        <p><a>مريم اسحاق أحمد</a>/ Eng <br>
                            Junior software developer
                        </p>
                    </div>
                    <a target="_blank" href="./img/IMG_٢٠٢٢١٢٢٧_١٤٣٢٣٦.jpg">
                        <img src="./assets/imgs/img/mariamd14db60b-2782-40f7-86d1-ad1add60c982.jpg" alt="developer img">
                    </a>
                    <div class="imgicon">
                        <a href="https://www.linkedin.com/in/mariam-ishak-148004252/"><i
                                class="fa-brands fa-linkedin fa-2xl"></i></a>
                        <a href=""><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of my paper(eisa)........................................................................................................ -->
    <!-- START FOOTER -->
    <!-- footer -->

    <?php include_once("./inc/footer.php"); ?>
    <!-- end footer -->
</body>

<script src="./js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>

</html>