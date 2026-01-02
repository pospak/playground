<?php
class User
{
    public static function isLoggedIn() {
        
        if($_SESSION["logged"]){
            return true;
        }else{
            return false;
        }
        
    }

    public static function verify() {
    }

    public static function getLoggedInUserType() {

    
                
    }

   public static function getLoggedInUser() {
        return $_SESSION["logged"];
        
    }
    

    public static function getProfilePhoto($username) {
        return "images/def.png";
    }

    public static function getUserData($username) {
    

    }

    public static function login($username,$password) {

        //testing purposes only CHANGE IN PRODUCTION

        if($username == "pospis65" && $password == "testingPassword"){
            return true;
        }else{
            return false;
        }
        
    }
    
}