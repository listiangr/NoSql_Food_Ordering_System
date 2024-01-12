<?php require_once 'config.php'; ?>
<?php require_once 'library.php'; ?>
<?php
    
    if(checkSignIn()){
        header("Location: home.php");
    }
?>
<?php

   if(isset($_POST['sign_up'])){
       
        $username= $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $temp  = $_POST['password'];
        $options = array('cost' => 10);
        $password = password_hash($temp, PASSWORD_BCRYPT, $options);
    
        $arrays = array(
            
            "Username"      => $username,
            "Email"         => $email,
            "Phone"         => $phone,
            "Password"      => $password
        
        );
        
        $query = checkUsername($username);
        if($query){
            sign_up($arrays);
            header("Location: sign_in.php");
            }
        else{
        echo "Username already registered!";
           echo"<br>";
        echo "Please <a href='sign_up.php'>Sign Up</a> with another username ID";
        }
}

?>