<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form   method="post"  action="../index.php?action=store" enctype="multipart/form-data">

      Name:<input name="name" type="text">
      <br>
      Price:<input name="price" type="text">
      <br>
      Image:<input name="image" type="file">
      <br>
       <input type="submit" value="create">
    </form>
</body>
</html>