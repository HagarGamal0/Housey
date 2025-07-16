<?php

//sessoin is included for once 
//if it exist it will not work it not then it will load
include_once 'session.php';

//database is included here
require_once 'database.php';


//all mechanism started from here

class vendor{
    private $db;

    public function __construct(){
        $this->db = new database;
    }


    //user registration mechanism is created here
    public function vendorRegistration($data){


        $ext=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
		$im_name=md5(microtime().$_FILES["image"]["name"]).".".$ext; 
	  //   22jgoijfsomgkl.png   
		  //           ( from ,to  )
	  move_uploaded_file($_FILES["image"]["tmp_name"],"./assets/img/". $im_name);

        $name       = $data['name'];
        $store_name   = $data['store_name'];
        $email      = $data['email'];
        $password   = $data['password'];
        $cpassword   = $data['cpassword'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $tax_number = $data['tax_number'];
        $address = $data['address'];
        $number = $data['number'];
        $field = $data['field'];

        $emailcheck = $this->checkEmail($email);


        //empty validation of fields
        if($name ==  "" OR $store_name ==  "" OR $email ==  "" OR $password ==  "" OR $cpassword ==  ""OR $tax_number ==  "" OR $address ==  "" OR $number ==  "" ){
            $msg = "<div class='alert alert-danger'>* Fileds are required!</div>";
            return $msg;
        }

        
        //length validatoin

        //name length validation
        if(strlen($name) < 3){
            $msg = "<div class='alert alert-danger'>* Name can not be less than 3 character!</div>";
            return $msg;
        }elseif(strlen($name) > 15){
            $msg = "<div class='alert alert-danger'>* Name can not be more than 15 characters</div>";
            return $msg;
        }

        //username validation
      

        //password and confirm password length validation
        if(strlen($password) < 5 && strlen($cpassword) < 5){
            $msg = "<div class='alert alert-danger'>* Password can not be less than 5 characters</div>";
            return $msg;
        }elseif(strlen($password) > 30 && strlen($cpassword) > 30){
            $msg = "<div class='alert alert-danger'>* Password can not be more than 15 characters</div>";
            return $msg;
        }

        //passwords equality validation
        if($password != $cpassword){
            $msg = "<div class='alert alert-danger'>* Password are not the same</div>";
            return $msg;
        }


        //email vaidation
        if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            $msg = "<div class='alert alert-danger'>* Email is not valid!</div>";
            return $msg;
        }


        //email existence validation
        if($emailcheck == true){
            $msg = "<div class='alert alert-danger'>* Email already exist!</div>";
            return $msg;
        }


        
        //insert data if there is no error    
        

        $query = "INSERT INTO `vendors`(name,store_name, password,email,image,tax_number,address,number,field) VALUES (:name,:store_name,:password_hash,:email,:im_name,:tax_number,:address,:number,:field)";
        $sql = $this->db->pdo->prepare($query);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':store_name', $store_name);
        $sql->bindValue(':password_hash', $password_hash);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':im_name', $im_name);
        $sql->bindValue(':tax_number', $tax_number);
        $sql->bindValue(':address', $address);
        $sql->bindValue(':number', $number);
        $sql->bindValue(':field', $field);

        $result = $sql->execute();

        if($result){
            $msg = "<div class='alert alert-success'>* Your account is created successfully</div>";
            return $msg;
            header("location: vendor.php");
        }

        
}


    //email existence check before account registering
    public function checkEmail($email){

        $query = "SELECT * FROM vendors WHERE `email` = :email";
        $sql = $this->db->pdo->prepare($query);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }



    //user login mechanism is created here
    public function vendorLogin($data){
        $email = $data['email'];
        $password = $data['password'];

        //empty value validation
        if($email == "" OR $password == ""){
            $msg = "<div class='alert alert-danger'>* Fields are required</div>";
            return $msg;
        }


        //length validation
        
        //username length validation
        if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            $msg = "<div class='alert alert-danger'>* Email is not valid!</div>";
            return $msg;
        }

        //password validation
        if(strlen($password) <5 && strlen($password) > 50){
            $msg = "<div class='alert alert-danger'>* Password should be between 5-15 characters</div>";
            return $msg;
        }


        //user will be login if there is no error

        $result = $this->getLoginaVendorData($email, $password);
        
        if($result){
            session::init();
            session::set("login", true);
            session::set("id", $result->id);
            session::set("name", $result->name);
            session::set("email", $result->email);
            session::set("role", "vendor");

            session::set("loginmsg", "<div class='container'><div class='alert alert-success'>You are logged in</div></div>");
            header("location: vendor.php");
        }else{
            echo "<div class='container mt-5'><div class='alert alert-danger'>Username and Passwords are not correct</div></div>";
        }
    }


    
    //user data fetch form database
    public function getLoginaVendorData($email, $password_hash){

        $query = "SELECT * FROM vendors WHERE `email` = :email ";

        $sql = $this->db->pdo->prepare($query);
        $sql->bindValue(':email', $email);
     //   $sql->bindValue(':password_hash', $password_hash);
        $sql->execute();
        $result = $sql->fetch();
        if ($result && password_verify($password_hash, $result['password'] ))
{
    return $result;
    
} 

    }


    //get all data from the database
    public function allVendors(){
        
        $query = "SELECT * FROM vendors";
        $sql = $this->db->pdo->prepare($query);
        $sql->execute();
        $result = $sql->fetchAll();
        return $result;
    }

    //get all data from database based on id
    public function vendorById($vid){

        $query = "SELECT * FROM vendors WHERE `id` = :id LIMIT 1";
        $sql = $this->db->pdo->prepare($query);
        $sql->bindValue(':id', $vid);
        $sql->execute();
        $result = $sql->fetchAll();
        return $result;
    }


    //user update mechanism is created here
    public function vendorUpdate($id, $data){


        $ext=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
		$im_name=md5(microtime().$_FILES["image"]["name"]).".".$ext; 
	  //   22jgoijfsomgkl.png   
		  //           ( from ,to  )
	  move_uploaded_file($_FILES["image"]["tmp_name"],"./assets/img/". $im_name);


	

      $name       = $data['name'];
      $store_name       = $data['store_name'];
      $email      = $data['email'];
      $password   = $data['password'];
      $cpassword   = $data['cpassword'];
      $password_hash = password_hash($password, PASSWORD_BCRYPT);
      $tax_number = $data['tax_number'];
      $address = $data['address'];
      $number = $data['number'];
      $field = $data['field'];

      $emailcheck = $this->checkEmail($email);



        //empty validation of fields
        if($name ==  "" OR $store_name ==  "" OR $email ==  "" OR $password ==  "" OR $cpassword ==  ""OR $tax_number ==  "" OR $address ==  "" OR $number ==  "" ){
            $msg = "<div class='alert alert-danger'>* Fileds are required!</div>";
            return $msg;
        }

        
        //length validatoin

        //name length validation
        if(strlen($name) < 3){
            $msg = "<div class='alert alert-danger'>* Name can not be less than 3 character!</div>";
            return $msg;
        }elseif(strlen($name) > 15){
            $msg = "<div class='alert alert-danger'>* Name can not be more than 15 characters</div>";
            return $msg;
        }

        //username validation
      

        //password and confirm password length validation
        if(strlen($password) < 5 && strlen($cpassword) < 5){
            $msg = "<div class='alert alert-danger'>* Password can not be less than 5 characters</div>";
            return $msg;
        }elseif(strlen($password) > 30 && strlen($cpassword) > 30){
            $msg = "<div class='alert alert-danger'>* Password can not be more than 15 characters</div>";
            return $msg;
        }

        //passwords equality validation
        if($password != $cpassword){
            $msg = "<div class='alert alert-danger'>* Password are not the same</div>";
            return $msg;
        }


        //email vaidation
        if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
            $msg = "<div class='alert alert-danger'>* Email is not valid!</div>";
            return $msg;
        }


        //email existence validation
        if($emailcheck == true){
            $msg = "<div class='alert alert-danger'>* Email already exist!</div>";
            return $msg;
        }


        
        //insert data if there is no error            
        $query = "UPDATE `vendors` SET `name`=:name, 'store_name'=:store_name ,`password`=:password_hash,`email`=:email ,'tax_number'=:tax_number,'address'=:address, 'image'=:im_name 
        ,'number'=:number ,'field'=:field   WHERE `id` = :id";
        $sql = $this->db->pdo->prepare($query);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':store_name', $store_name);

        $sql->bindValue(':password_hash', $password_hash);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':tax_number', $tax_number);
        $sql->bindValue(':address', $address);

        $sql->bindValue(':im_name', $im_name);
        $sql->bindValue(':number', $number);
        $sql->bindValue(':field', $field);
        $sql->bindValue(':id', $id);
        $result = $sql->execute();

        if($result){
            $msg = "<div class='alert alert-success'>* Your updated successfully</div>";
            return $msg;
        }
    }
}
