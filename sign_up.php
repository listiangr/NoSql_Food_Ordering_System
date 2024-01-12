<?php
    require_once 'library.php';
    if(checkSignIn()){
        header("Location: home.php");
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form Sign Up</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-image:linear-gradient(rgba(238,214,212,255),rgba(238,214,212,255)); margin:8%;" class="bg-light">
  <div class="container my-5 pt-4 pb-5 px-5 rounded bg-white" style="max-width:500px">
    <h1 class="text-center mb-4">Sign Up</h1>

    <form class="form-horizontal" method="post" action="sign_up_action.php">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input style="border: 2px solid #cc0c0c;"  type="text" name="username" id="username" class="form-control" placeholder="Masukan username">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input style="border: 2px solid #cc0c0c;"  type="email" name="email" id="email" class="form-control" placeholder="Masukan email">
      </div>
      <div class="mb-3">
        <label for="no_telepon" class="form-label">Phone</label>
        <input style="border: 2px solid #cc0c0c;"  type="text" name="phone" id="no_telepon" class="form-control" placeholder="Masukan no telepon">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input style="border: 2px solid #cc0c0c;"  type="password" name="password" id="password" class="form-control" placeholder="Masukan password">
      </div>
      <div>
      <p class="text-center mb-4">Already have an account? <a  style="color:#cc0c0c" href="sign_in.php">Sign In</a></p>
      </div>
      <button type="submit" name="sign_up" style="background-color: #e66868; border: 2px solid #e66868; border-radius: 30px; color: white; height: 50px; width: 400px; margin-buttom: -200px">Create account</button>
    </form>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>