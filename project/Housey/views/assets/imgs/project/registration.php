<?php

//header file is included here
include 'inc/header.php';


//user file is included here
include_once('./users/auth.php');




//if user logged in redirect user to index page
session::logedIn();



if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    register($_POST);
}

?>


<!-- body area started form here -->

<div class="wrapper" style="background-image: url('./imgs/top-five-vendor-management-tools.webp'); margin: auto 0; ">
    <div class="inner">
        <?php

        if (isset($userRegi)) {
            echo $userRegi;
        }

        ?>



        <form class="" method="post" action="" enctype="multipart/form-data">

             <div class="profile-pic">
              <label class="-label" for="file">
                <span>أضف صورة</span>
                <!-- <input class="form-control" lang="ar" type="file" name="image" id="formFile" hidden> -->
              </label>
              <input id="file" type="file" onchange="loadFile(event)" name="image" class="form-control" />
             <img src="./imgs/[removal.ai]_tmp-63fa0a5e3c2bb.png" id="output" alt="img" />
            </div>
            <!-- <h3>سجل معنا</h3> -->
            <div class="form-group">
           
                <div class="form-wrapper">
                    <label for=""> الاسم :</label>
                    <div class="form-holder">
                        <i class="zmdi zmdi-account-o"></i>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for=""> الايميل :</label>
                    <div class="form-holder">
                        <i style="font-style: normal; font-size: 15px;">@</i>
                        <input type="text" name="email" class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-wrapper">
                    <label for="">الرقم :</label>
                    <div class="form-holder">
                        <i class="zmdi zmdi-account-box-phone"></i>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for=""> الرقم القومي :</label>
                    <div class="form-holder">
                        <i class="zmdi zmdi-calendar-alt"></i>
                        <input type="text" name="national_id" class="form-control" required>
                    </div>
                </div>
            </div>



            <div class="form-group">
                <div class="form-wrapper">
                    <label for=""> الرقم السري :</label>
                    <div class="form-holder">
                        <i class="zmdi zmdi-lock-outline"></i>
                        <input id="password" type="password" name="password" class="form-control" placeholder="********" required>
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for=""> تأكيد الرقم السري :</label>
                    <div class="form-holder">
                        <i class="zmdi zmdi-lock-outline"></i>
                        <input type="password" name="cpassword" class="form-control" placeholder="********" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-wrapper">
                    <label for=""> العنوان :</label>
                    <div class="form-holder">
                        <i class="zmdi zmdi-border-color"></i>
                        <input type="text" name="address" class="form-control address" required>
                    </div>
                </div>
                <!-- <div class="form-wrapper">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">الصورة الشخصية</label>
                        <input class="form-control" lang="ar" type="file" name="image" id="formFile">
                    </div>
                </div> -->
            </div>
            <div class="form-end form-group">
                <div class="input-group mb-3">
                    <div class>
                        <input class="form-check-input ms-1 mt-1 terms" type="checkbox" value="" aria-label="Checkbox for following text input" required>
                        <label for="input-group-text" class="text-white"> اوافق علي الشروط و الاحكام </label>
                        <span class="terms-link"> <a href="../terms and condtion/terms.html"> الشروط و الأحكام </a></span>
                    </div>
                </div>

            </div>
            <div class="button-holder">
                <button class="btn btn-outline-success" type="submit" name="submit">تسجيل</button>
            </div>
        </form>
    </div>
</div>
