<?php require_once 'config.php'; ?>
<?php require_once 'library.php'; ?>
<?php   
    if(checkSignIn()){
        $username = $_SESSION["username"];
        header("Location: home.php");
    }
?>

<?php
    if(isset($_POST['sign_in'])){
        $email = $_POST['email'];
        $upass = $_POST['password'];
        $criteria = array("email"=> $email);
        $query = $collection->findOne($criteria);
        
        if(empty($query)){
            echo "email ID is not registered.";
            echo "Either <a href='sign_up'>Sign_Up</a> with the new email ID or <a href='sign_in.php'>Sign In</a> with an already registered ID";
        }
        else{
            $pass = $query["password"];
            if(password_verify($upass,$pass)){
                $var = setSession($email);                   
                    if($var){ 
                      $username = $_SESSION["username"];    
                      header("Location: home.php");
                    }
                    else{
                        echo "Some error";
                    }
                }
                else{
                    echo "You have entered a wrong password";
                    echo "<br>";
                    echo "Either <a href='sign_up'>Sign_Up</a> with the new email ID or <a href='sign_in.php'>Sign In/a> with an already registered ID";
                }
        }              
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Sign In</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-image:linear-gradient(rgba(238,214,212,255),rgba(238,214,212,255)); margin:8%;" class="bg-light">
  <div class="container my-5 pt-4 pb-5 px-5 rounded bg-white" style="max-width:500px">
    <center>
    <img src="assets/images/logo without text.png" width="180px" height="180px" style="margin-top: 30px"/>
    </center>
    <h1 class="text-center mb-4">Sign In</h1>
    <form class="form-horizontal" action="home.php" method="post">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input style="border: 2px solid #cc0c0c;" type="text" name="email" placeholder="Masukan email" id="email" class="form-control"
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input style="border: 2px solid #cc0c0c;" type="password" name="password" placeholder="Masukan password" id="password" class="form-control">
      </div>
      <div>
      <p class="text-center mb-4">Don't have an account? <a style="color:#cc0c0c; ;" href="sign_up.php">Sign Up</a></p>
      </div>
      <button type="submit" name="sign_in" style="background-color: #e66868; border: 2px solid #e66868; border-radius: 30px; color: white; height: 50px; width: 400px; margin-buttom: -200px">Sign In</button>
    </form>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
