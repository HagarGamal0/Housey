<?php

//header file is included here

//user file is included here
include 'lib/vendor.php';


$vendor = new vendor;

//if user logged in redirect user to index page
session::vendorLogin();



if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    $vendorLog = $vendor->vendorLogin($_POST);
}

?>

<!-- body area started form here -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.11/tailwind.min.css"
      integrity="sha512-KO1h5ynYuqsFuEicc7DmOQc+S9m2xiCKYlC3zcZCSEw0RGDsxcMnppRaMZnb0DdzTDPaW22ID/gAGCZ9i+RT/w=="
      crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
 
    <link rel="stylesheet" href="./assets/css/login.css" />
    <title>تسجيل الدخول</title>
  </head>
  <body>
    <div class="background" id="background" ></div>
    <div class="bg-white rounded p-10 text-center shadow-md">
      <h1 class="text-3xl">  أهلا بيك تابعنا حتي يصلك كل جديد
      </h1>
      <!-- <p class="text-sm text-gray-700">  ادخل بإستخدام حسابات التواصل الإجتماعي  </p> -->
      <div class="text-sm text-gray-700  text-icon ">
        <h2> ادخل بإستخدام حسابات التواصل الإجتماعي</h2>
        <div class="icon">
          <div class="social-login">
            <div class="social-icons">
              <a href="#" class="social-login__icon fab fa-instagram"></a>
              <a href="#" class="social-login__icon fab fa-facebook"></a>
              <a href="#" class="social-login__icon fab fa-twitter"></a>
            </div>
          </div>
                    </div>
          <p> ــــــــــــ أو ــــــــــــ</p>
    </div>
   
 
           <form action="" method="post">
      <div class="my-4 text-right">

        <label for="email" class="text-gray-900">الايميل:</label>
        <input
          type="text"
          class="border block w-full p-2 mt-2 rounded"
          id="email"
          name="email"
          placeholder="الايميل"
        />
      </div>

      <div class="my-4 text-right text-sm text-gray-700">
        <label for="email" class="text-gray-900">كلمة السر:</label>
        <input
          type="password"
          class="border block w-full p-2 mt-2 rounded"
          id="password"
          name="password"
          placeholder=" كلمة السر"
        />
      </div>

    <a href="../final/home.html">

      <button 
      class="text-white py-2 mt-4 inline-block w-full rounded btn"
      type="submit" name="submit" value="login">
      تسجيل الدخول
    </button>
  </a> 


  </form>


      <div class="my-3 text">
        <p class="signup"> مستخدم جديد ؟ </p>
        <a href="vendorsignup.php" class="signup-link"><p> سجّل كصاحب محل</p></a>
        <a  href="registration.php" class="signup-link"><p> سجّل كمستخدم</p></a>
    </div>
    </div>
    <script src="./assets/js/login.js"></script>
  </body>
</html>