<?php

//header file is included here

//user file is included here
include_once('./users/auth.php');
include_once('./vendors/auth.php');

//if user logged in redirect user to index page
session::logedIn();



if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
if ( $_POST['role']=='user') {
  login($_POST);

} else{

  vLogin($_POST);

}
}

?>


<!-- body area started form here -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.8.11/tailwind.min.css"
    integrity="sha512-KO1h5ynYuqsFuEicc7DmOQc+S9m2xiCKYlC3zcZCSEw0RGDsxcMnppRaMZnb0DdzTDPaW22ID/gAGCZ9i+RT/w=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Changa:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="assets/css/login.css" />
  <title>تسجيل الدخول</title>
</head>

<body>
  <div class="background" id="background"></div>
  <div class="bg-white rounded p-10 text-center shadow-md">
    <h1 class="text-3xl"> أهلا بيك تابعنا حتي يصلك كل جديد
    </h1>
    <!-- <p class="text-sm text-gray-700">  ادخل بإستخدام حسابات التواصل الإجتماعي  </p> -->
    <div class="text-sm text-gray-700  text-icon ">
      <h2> ادخل بإستخدام حسابات التواصل الإجتماعي</h2>
      <div class="icon">
        <div class="social-login">
          <div class="social-icons">
            <a href="#" class="social-login__icon fab fa-google"></a>
            <a href="#" class="social-login__icon fab fa-facebook"></a>
            <a href="#" class="social-login__icon fab fa-twitter"></a>
          </div>
        </div>
      </div>
      <p class="text-black"> ــــــــــــ أو ــــــــــــ</p>
    </div>


    <form action="" method="post" >
      <b class="type"> حدد نوع حسابك !</b>
      <div style="display:flex; margin:0 80px; justify-content: space-between;">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="role" value="user" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
          حساب شخصي </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="role" value="vendor" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
          حساب تجاري </label>
      </div>
      </div>
      <div class="my-4 text-right">

        <label for="email" class="text-gray-900">الايميل:</label>
        <input type="text" class="border block w-full p-2 mt-2 rounded" id="email"  name="email" placeholder="الايميل" />
      </div>

      <div class="my-4 text-right text-sm text-gray-700">
        <label for="email" class="text-gray-900">كلمة السر:</label>
        <input type="password" class="border block w-full p-2 mt-2 rounded"  id="password" name="password"
          placeholder=" كلمة السر" />
      </div>

      <a href="../final/home.html">

        <button class="text-white py-2 mt-4 inline-block w-full rounded btn" type="submit" name="submit" value="login">
          تسجيل الدخول
        </button>
      </a>


    </form>


    <div class="my-3 text">
      <p class="signup"> مستخدم جديد ؟ </p>
      <div style="display:flex; margin:0 80px; justify-content: space-between;">
      <a href="vendorsignup.php" class="signup-link">
        <p> سجّل كصاحب محل</p>
      </a>
      <a href="registration.php" class="signup-link">
        <p> سجّل كمستخدم</p>
      </a>
      </div>
    </div>

  </div>
</body>
<script>
  // هنا الربط
var pass = document.getElementById("password");
var email = document.getElementById("email");

pass.onkeydown=function ()
{
 
            // هنا بعمل بتاكد ان عدد الاحرف فالباسورد اكتر من 8 احرف

    if(pass.value.length<10)
    {
        pass.style.border="5px red solid";
        
    }
    else{
        pass.style.border="5px green solid";
    }
}
// هنا بعمل بتاكد ان عدد الاحرف فاليميل اكتر من 4 احرف
// هنا بتاكد ان ال @ موجوده
email.onkeydown = function()
{
if (email.value.length < 5 || email.value.indexOf('@') == -1) {
    email.style.border = "5px red solid";

}
else {
    email.style.border = "5px green solid";
}
}
</script>
<script src="assets/js/login.js"></script>

</html>