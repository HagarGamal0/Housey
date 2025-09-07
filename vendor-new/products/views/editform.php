<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form   method="post"  action="./index.php?action=update" enctype="multipart/form-data">
    <input  value ="<?php echo $user["id"];?>" name="id" type="text" hidden>
      Name:<input  value ="<?php echo $product["name"];?>" name="name" type="text">
      <br>
      Price:<input value ="<?php echo $product["price"] ;?>" name="price" type="text">
      <br>
      Image:<input name="image" type="file">
      <br>
       <input type="submit" value="create">
    </form>



    <form  method="post"  action="./index.php?action=update" id="vendor_data_edit">

                        <div class="profile-pic">
                            <label class="-label" for="file">
                                <span>تغيير صورة المحل</span>
                            </label>
                            <input id="file" type="file" name="file" onchange="loadFile(event)" />
                            <img src="/assets/images/1444714083.svg" id="output"  alt="img" />
                        </div>

                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">اسم المحل الجديد</label>
                            <div class="col-sm-10">
                                <input type="text" name="shop_name" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">عنوان المحل الجديد</label>
                            <div class="col-sm-10">
                                <input type="text" name="shop_address" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">رقم التليفون</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" class="form-control" id="inputEmail3">
                            </div>
                        </div>

                        <div class="col-12 text-center m-auto mb-5">
                            <button type="submit" class=" form-control btns btns-edit">حفظ</button>
                        </div>
                    </form>
</body>
</html>