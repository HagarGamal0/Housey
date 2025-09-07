<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo $_SESSION["user"]["name"] ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../logout.php">logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section id="myBody">
    <div class="container">
        <div class="row">
            <div class="main-div">

                <div class="right-side">
                    <div class="icon-div center">
                        <i class="fa-solid fa-shop fa-3x"></i>
                    </div>
                    <h5 class="center"> الكترو للكهرباء </h5>
                    <div class="accordion  accordion-flush" id="accordionFlushExample">
                    
                    
                        <div class="accordion-item bg-color mt-5 ">
                            <h2 class="accordion-header " id="flush-headingThree">
                                <button class="accordion-button bg-color collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    معلومات الملف الشخصي
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                                data-bs-parent="#accordionFlushExample" >
                                <div class="accordion-body">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">الصورة الشخصية</label>
                                        <div class="image_prof">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjMyiFn8FNJYqTGqznSrrBAtwlIBQj9K_ioA&usqp=CAU"
                                                class="w-100 " alt="images">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">اسمك</label>
                                        <input class="form-control" type="text" placeholder="محمد احمد" aria-label="Disabled input example" disabled="">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">اسم المحل</label>
                                        <input class="form-control" type="text" placeholder="الكترو للكهرباء" aria-label="Disabled input example"
                                            disabled="">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">عنوان المحل</label>
                                        <input class="form-control" type="text" placeholder="شارع البستان عمارة 52" aria-label="Disabled input example"
                                            disabled="">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">رقم التليفون</label>
                                        <input class="form-control" type="text" placeholder="01224567891 " aria-label="Disabled input example" disabled="">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">رقم السجل الضريبي</label>
                                        <input class="form-control" type="text" placeholder="53789-15684-15457 " aria-label="Disabled input example" disabled="">
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button bg-color collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    تعديل الملف الشخصي
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body bg-color">
                                    <p>
                                        بتعديلك بعض البيانات الشخصية يرجي العلم
                                        انه لا يمكنك تعديل بعض البيانات التي ادخلتها عند
                                    تسجيل الدخول مثل اسمك ، و رقم السجل الضريبي ، و خلافه ..
                                        
                                    </p>
                                </div>
                                    <button class="d-block btn btns-edit" id="edit_data" > تعديل البيانات</button>
                            </div>
                        </div>

                    </div>
                </div>

                
            <div class="left-side"> 

                    <button type="button" class="btns btns-primary btn-main" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        data-bs-whatever="@mdo" >اضافة منتج جديد</button>
                    
                    
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header d-block">
                                    <button type="button" class="btn-close fs-5 d-block" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <h3 class="modal-title  d-block text-center" id="exampleModalLabel">اضف منتجك الجديد<h1>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="center">
                                        <label for="img" class="attribute d-block">
                                            <h4> اضف صورة المنتج </h4>
                                        </label>
                                            <label for="inputTag" class="image-label center">
                                                <i class="fa fa-4x fa-camera center "></i>
                                                <input id="inputTag" type="file" multiple required class="d-none">
                                                <span id="imageName" class="center"></span>
                                            </label>
                                        </div>
                                        <div class="row mt-12">
                                            <div class="col-md-12">
                                                <input type="text" class="form-control mt-2" id="product_name" placeholder="اسم المنتج" required>
                                            </div>
                    
                                            <div class="col-md-12 mt-3">
                                                <input type="number" min="0" class="form-control" id="product_price" required placeholder="اضف السعر (ج.م)">
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <input type="number" min="0" class="form-control" required
                                                    placeholder=" القطع المتوفرة (قطعة)" id="product_count">
                                            </div>
                    
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <textarea class="form-control" id="message-text"
                                                        placeholder="معلومات عن المنتج"></textarea>
                                                </div>
                    
                                                <label class="attribute block d-block">اختر القسم الذي ينتمي اليه المنتج :</label>
                                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                    id="flexRadioDefault1">
                                                <label class="form-check-label pe-1 ps-4" for="flexRadioDefault1">
                                                    كهرباء
                                                </label>
                    
                    
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault">
                                                <label class="form-check-label pe-1 ps-4" for="flexRadioDefault2">
                                                    سباكة
                                                </label>
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault">
                                                <label class="form-check-label pe-1 ps-4" for="flexRadioDefault2">
                                                    نجارة
                                                </label>
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault">
                                                <label class="form-check-label pe-1 ps-4" for="flexRadioDefault2">
                                                    نقاشة
                                                </label>
                    
                                            </div>
                    
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <label class="attribute ">العروض و التخفيضات (اختياري)</label>
                                            <input type="number" min="0" class="form-control mt-1" required placeholder="اضف السعر الجديد (ج.م)">
                                        </div>
                                        <div class="modal-footer mt-3">
                                            <button type="button" class="btns btns-secondary" data-bs-dismiss="modal">اغلاق</button>
                                            <button type="button" class="btns btns-primary" onclick="savelocal()">حفظ</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cards -->
                    <!-- Example Code -->
                    <div class="cards_hide" id="cards_hide">
                    <div class="d-flex flex-wrap">
                    <div class="card" style="width: 15rem;" >
                        <div>

                    
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                                        aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="300" height="150"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1EGUph9WvJQHHrmoLVEmxfbhm-LAZxBK9FA&usqp=CAU"
                                            role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555"
                                            dy=".3em"></text>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="150"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYyO3Hkv3uomrTepa_aecOW4JAqrz-QphTkQ&usqp=CAU"
                                            role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333"
                                            dy=".3em"></text>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="150"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0LGFH7WSr4pgw8Hig4ltvPXqpNf_R08it7Q&usqp=CAU"
                                            role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333"
                                            dy=".3em"></text>
                                    </div>
                                </div>
                                <button class="carousel-control-prev mt-5" type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon bg-black" aria-hidden="true" ></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next mt-5" type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                        </div>
                        <div class="card-body">
                            <h5 class="card-title">حوض رخام </h5>
                            <p class="card-text">حوض رخام طبيعي بني عالي الجودة امبلادور اسباني مستورد
                                  500ج.م</p>
                        </div>
                        <ul class="list-group list-group-flush">
                        </ul>
                        <div class="card-body d-flex justify-content-between">
                            <a href="#" class="btn btns-primary  w-50">تعديل</a>
                            <a href="#" class=" btn btns-secondary bg-body-emphasis w-50 me-1">حذف</a>
                        </div>
                    </div>
                    
                    <!-- End Example Code -->
                  
                    <!-- Example Code -->
                    
                    <div class="card" style="width: 15rem;">
                        <div>
                    
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                                        aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="300" height="150"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1EGUph9WvJQHHrmoLVEmxfbhm-LAZxBK9FA&usqp=CAU"
                                            role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555"
                                            dy=".3em"></text>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="150"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYyO3Hkv3uomrTepa_aecOW4JAqrz-QphTkQ&usqp=CAU"
                                            role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333"
                                            dy=".3em"></text>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="150"
                                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0LGFH7WSr4pgw8Hig4ltvPXqpNf_R08it7Q&usqp=CAU"
                                            role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice"
                                            focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333"
                                            dy=".3em"></text>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                    
                            <!-- End Example Code -->
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">حوض رخام </h5>
                            <p class="card-text">حوض رخام طبيعي بني عالي الجودة امبلادور اسباني مستورد
                                500ج.م</p>
                        </div>
                        <ul class="list-group list-group-flush">
                        </ul>
                        <div class="card-body d-flex justify-content-between">
                            <a href="#" class="btns btns-primary w-50">تعديل</a>
                            <a href="#" class="btns btns-secondary w-50 me-1">حذف</a>
                        </div>
                    </div>
                    <!-- End Example Code -->
                    
      
                </div>
                </div>
<form  method="post"  action="" id="vendor_data_edit">

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
    <?php
    // foreach ($result as  $value) {
    //     echo "
    //     <tr>
    //       <th >$value[id]</th>
    //       <td>$value[name]</td>
    //       <td>$value[price]</td>
    //       <td><img  width='60px' src='../imgs/$value[image]'></td>
    //       <td><a href='index.php?id=$value[id]&action=delete'>delete</a></td>
    //       <td><a href='index.php?id=$value[id]&action=edit'>edit</a></td>
    //     </tr>  
    //     ";    }
   
    
    ?>
    
  </tbody>
</table>
</body>
</html>
