<?php session_start(); ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Landing Page</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-image:linear-gradient(rgba(238,214,212,255),rgba(238,214,212,255)); margin:8%;" class="bg-light">
  <div class="container my-5 pt-4 pb-5 px-5 rounded bg-white" style="max-width:500px">
  <center>
    <img src="assets/images/logo2.png" width="300px" height="300px" style="margin-top: 50px"/>
  <p><button onclick="window.location.href='sign_up.php' "style="background-color: #cd0909; border: 2px solid #cc0c0c; border-radius: 30px; color: white; height: 60px; width: 250px; margin-top: 30px">Sign Up</button><br></p>
  <p><button onclick="window.location.href='sign_in.php' "style="background-color: #e66868; border: 2px solid #e66868; border-radius: 30px; color: white; height: 60px; width: 250px; margin-buttom: -200px">Sign In</button></p>
  </center>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
