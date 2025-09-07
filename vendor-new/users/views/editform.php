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
    <title> Vendor Profile </title>
</head>

<body>
    <!-- <form   method="post"  action="./index.php?action=update" enctype="multipart/form-data">
    <input  value ="<?php echo $user["id"]; ?>" name="id" type="text" hidden>
      Name:<input  value ="<?php echo $user["name"]; ?>" name="name" type="text">
      <br>
      Email:<input value ="<?php echo $user["email"]; ?>" name="email" type="email">
      <br>
      Image:<input name="image" type="file">
      <br>
       <input type="submit" value="create">
    </form> -->






    <a href="index.php?action=edit" class="btn btns-primary w-50" data-bs-toggle="modal"
        data-bs-target="#exampleModal2" data-bs-whatever="@mdo">تعديل</a>
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header d-block">
                    <!--  -->
                    <a class="btn-close fs-5 d-block" data-bs-dismiss="modal" aria-label="Close"
                        href="index.php?id=$value[id]&action=edit">تعدييلللل</a>
                    <!--  -->
                    <h3 class="modal-title  d-block text-center" id="exampleModalLabel2">تعديل
                        المنتج <h1>
                </div>
                <div class="modal-body">
                    <form method="post" action="./index.php?action=update">
                        <div class="center">
                            <label for="img" class="attribute d-block">
                                <h4> تعديل صور المنتج </h4>
                            </label>
                            <label for="inputTag2" class="image-label center">
                                <i class="fa fa-4x fa-camera center "></i>
                                <input id="inputTag2" type="file" multiple required name="image" class="d-none">
                                <span id="imageName2" class="center"></span>
                            </label>
                        </div>
                        <div class="row mt-12">
                            <div class="col-md-12">
                                <input type="text" class="form-control mt-2" id="product_name2"
                                    placeholder="تعديل اسم المنتج" value="<?php echo $user["name"]; ?>" name="name"
                                    required>
                            </div>

                            <div class="col-md-12 mt-3">
                                <input type="number" min="0" class="form-control" id="product_price2" required
                                    placeholder="تعديل السعر (ج.م)">
                            </div>
                            <div class="col-md-12 mt-3">
                                <input type="number" min="0" class="form-control" required
                                    placeholder=" تعديل عدد القطع المتوفرة (قطعة)" id="product_count2"
                                    value="<?php echo $user["available_pieces"]; ?>" name="available_pieces">
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
                                placeholder="اضف السعر الجديد (ج.م)">
                        </div>
                        <div class="modal-footer mt-3">
                            <button type="button" class="btns btns-secondary" data-bs-dismiss="modal">اغلاق</button>
                            <button type="button" class="btns btns-primary">حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- END EDIT MODAL -->







</body>
<script src="../vendor-new.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
    crossorigin="anonymous"></script>

</html>