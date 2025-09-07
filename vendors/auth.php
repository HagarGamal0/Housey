
<?php
include_once('./connection.php');
include_once('./lib/vendor.php');

$vendor= new vendor($pdo);

 function vregister($data ){

   global $vendor;

   $vendor->vendorRegistration($data);

 }

 function vlogin($data){

    global $vendor;
$vendor->vendorLogin($data);


 }


 
