<?php

//session mechanism is startef from here

class session{

    public static function init(){
        if(version_compare(phpversion(), '8.2.0', '<')){
            if(session_id() == ''){
                session_start();
            }
        }else{
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }
        }
    }

    public static function set($key, $val){
        $_SESSION[$key] = $val;
    }

    public static function get($key){
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return false;
        }
    }


    public static function userSession(){
        if(self::get("login") == false){
            self::destroy();
            header("location: login.php");
        }
    }


    public static function logedIn(){
        if(self::get("login") == true && self::get("role")== "vendor"){
            header("location: vendor.php");
        }elseif(self::get("login") == true && self::get("role")== "user"){
             header("location: ../project/products/views/home.php");
        
        }else {
             

        }
    }

    public static function destroy(){
        session_unset();
        session_destroy();
        header("location: ../../login.php");
    }
}