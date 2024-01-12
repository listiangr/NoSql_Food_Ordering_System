<?php session_start();
require 'config.php';
$var = $_GET['key'];
$coll = $db->user;
$coll->deleteOne(['Email' => $var]);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-image:linear-gradient(rgba(238,214,212,255),rgba(238,214,212,255)); margin:8%;" class="bg-light">
    <div class="container my-5 py-4 px-5 rounded bg-white" style="max-width:1000px">
        <center>
            <!-- Content -->
            <p class="fs-2">Akun berhasil dihapus.</p>
            <p><button onclick="window.location.href='index.php'" class="btn" style="background-color: #EED6D4; border-radius: 30px; height: 60px; width: 250px">Home</button></p>
        </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>