 <?php

//sessoin is included for once 
//if it exist it will not work it not then it will load
include_once 'session.php';

//database is included here


//all mechanism started from here

class user{
    private $db;

    public function __construct($pdo){
        $this->db = $pdo;
    }


    //user registration mechanism is created here
    public function userRegistration($data){


        $ext=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
		$img_name=md5(microtime().$_FILES["image"]["name"]).".".$ext; 
	  //   22jgoijfsomgkl.png   
		  //           ( from ,to  )
	  move_uploaded_file($_FILES["image"]["tmp_name"],"./assets/img/". $img_name);

	  
	

        $name       = $data['name'];
        $email      = $data['email'];
        $password   = $data['password'];
        $cpassword   = $data['cpassword'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $national_id = $data['national_id'];
        $address = $data['address'];
        $phone = $data['phone'];
        $emailcheck = $this->checkEmail($email);


        //empty validation of fields
        if($name ==  "" OR $national_id ==  "" OR $email ==  "" OR $password ==  "" OR $address ==  ""){
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
        $query = "INSERT INTO `users`(name,password,email,image,phone,national_id,address) VALUES (:name,:password_hash,:email,:img_name,:phone,:national_id,:address)";

        $sql = $this->db->prepare($query);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':password_hash', $password_hash);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':img_name', $img_name);
        $sql->bindValue(':phone', $phone);
        $sql->bindValue(':national_id', $national_id);
        $sql->bindValue(':address', $address);


        $result = $sql->execute();

        if($result){
            
            header("location: ../project/products/views/home.php");
        }

        
}


    //email existence check before account registering
    public function checkEmail($email){

        $query = "SELECT * FROM users WHERE `email` = :email";
        $sql = $this->db->prepare($query);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }



    //user login mechanism is created here
    public function userLogin($data){
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

        $result = $this->getLoginUserData($email, $password);

       if($result){
           session::init();
            session::set("login", true);
            session::set("id", $result['id']);
            session::set("name", $result["name"]);
            session::set("email", $result['email']);
            session::set("role", "user");

            session::set("loginmsg", "<div class='container'><div class='alert alert-success'>You are logged in</div></div>");

            header("Location: ../project/products/views/home.php");
        }else{
            echo "<div class='container mt-5'><div class='alert alert-danger'>Username and Passwords are not correct</div></div>";
        }
    }


    
    //user data fetch form database
    public function getLoginUserData($email, $password){

     //  $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $query = "SELECT * FROM users WHERE `email` = :email  ";

        $sql = $this->db->prepare($query);
        $sql->bindValue(':email', $email);
        $sql->execute();
        $result = $sql->fetch(pdo :: FETCH_ASSOC );
       if ($result && password_verify($password, $result['password'] ))
   {
    return $result ;
      } 

    }


    //get all data from the database
    public function userList(){
        
        $query = "SELECT * FROM users";
        $sql = $this->db->prepare($query);
        $sql->execute();
        $result = $sql->fetchAll();
        return $result;
    }

    //get all data from database based on id
    public function userById($id){

        $query = "SELECT * FROM users WHERE `id` = :id LIMIT 1";
        $sql = $this->db->prepare($query);
        $sql->bindValue(':id', $id);
        $sql->execute();
        $result = $sql->fetchAll();
        return $result;
    }


    //user update mechanism is created here
    public function userUpdate($id, $data){


        $ext=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
		$img_name=md5(microtime().$_FILES["image"]["name"]).".".$ext; 
	  //   22jgoijfsomgkl.png   
		  //           ( from ,to  )
	  move_uploaded_file($_FILES["image"]["tmp_name"],"./assets/img/". $img_name);


	

        $name       = $data['name'];
        $email      = $data['email'];
        $password   = $data['password'];
        $cpassword   = $data['cpassword'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $national_id = $$data['national_id'];
        $address = $data['address'];
        $emailcheck = $this->checkEmail($email);



        //empty validation of fields
        if($name ==  ""  OR $email ==  "" OR $password ==  "" OR $cpassword ==  ""){
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
        $query = "UPDATE `users` SET `name`=:name,`email`=:email,`password`=:password_hash ,'email'=:email,'photo'=:img_name ,'address'=:address   WHERE `id` = :id";
        $sql = $this->db->prepare($query);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':password_hash', $password_hash);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':img_name', $img_name);
        $sql->bindValue(':address', $address);
        $sql->bindValue(':id', $id);
        $result = $sql->execute();

        if($result){
            $msg = "<div class='alert alert-success'>* Your updated successfully</div>";
            return $msg;
        }
    }

} 