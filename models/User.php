<?php
class User
{
    public static function isLoggedIn() {
        
        session_start();
        if($_SESSION["logged"]){
            return true;
        }else{
            return false;
        }
        
    }

    public static function verify() {
        session_start();
    }

    public static function getLoggedInUserType() {

        session_start();
    
                
    }

   public static function getLoggedInUser() {
        session_start();
        return $_SESSION["logged"];
        
    }
    

    public static function getProfilePhoto($username) {
        return "images/def.png";
    }

    public static function getUserData($username) {
    

    }

    public static function login($username,$password) {
        session_start();

        //testing purposes only CHANGE IN PRODUCTION

        if($username == "pospis65" && $password == "testingPassword"){
            return true;
        }else{
            return false;
        }
        
    }
    
}