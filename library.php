<?php
    require_once 'config.php';
    session_start();

    function sign_up($document){
        global $collection;
        $collection->insertOne($document);
        return true;
    }
    
    function checkUsername($username){
        global $collection;
        $temp = $collection->findOne(array('username'=> $username));
        if(empty($temp)){
        return true;
        }
        else{
            return false;
        }
    }
    
    function setSession($email){
        $_SESSION["userLoggedIn"] = 1;
        global $collection;
        $temp = $collection->findOne(array('email'=> $email));
        $_SESSION["uname"] = $temp["username"];
        $_SESSION["email"] = $email;
        return true;
        
    }

    function checkSignIn(){
        if(isset($_SESSION["userLoggedIn"])){
            return true;
        }
        else{
            return false;
        }
    }
?>