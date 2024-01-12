<?php session_start();
require_once 'config.php';
$var = $_GET['key'];
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
    <div class="container my-5 pt-4 pb-5 px-5 rounded bg-white" style="max-width:1000px">
        <center>
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light style=" background-color:white">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="assets/images/logo.png" width="30" height="30" alt="">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="home.php?key=<?php echo $var; ?>">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="history.php?key=<?php echo $var; ?>">HISTORY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">PROFILE</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Content -->
            <h1>Profile</h1>
        </center>
        <div class="container-sm mt-5 mb-0 px-5">
            <!-- Row 1 -->
            <div class="row align-items-center">
                <div class="col">
                    <p class="fs-6 mt-3 mb-0">Name</p>
                    <p class="fs-4 fw-bold mb-3 mt-0">
                        <?php
                        $coll = $db->user;
                        $akun = $coll->findOne(['Email' => $var]);
                        echo $akun['Username'];
                        ?>
                    </p>
                </div>
            </div>
            <!-- Row 2 -->
            <div class="row align-items-center">
                <div class="col">
                    <p class="fs-6 mt-3 mb-0">Phone Number</p>
                    <p class="fs-4 fw-bold mb-3 mt-0">
                        <?php
                        echo $akun['Phone'];
                        ?>
                    </p>
                </div>
            </div>
            <!-- Row 3 -->
            <div class="row align-items-center">
                <div class="col">
                    <p class="fs-6 mt-3 mb-0">Email</p>
                    <p class="fs-4 fw-bold mb-3 mt-0">
                        <?php
                        echo $akun['Email'];
                        ?>
                    </p>
                </div>
            </div>
            <!-- Button -->
            <div class="d-flex justify-content-between mt-4">
                <a href='edit.php?key=<?php echo $var ?>' class="fs-6 mt-3 mb-0">Edit Profile</a>
                <p><button onclick="window.location.href='sign_out.php'" class="btn me-md-2" style="background-color: #EED6D4; border-radius: 30px; height: 60px; width: 250px">Sign Out</button></p>
                <a href='delete.php?key=<?php echo $var ?>' class="fs-6 mt-3 mb-0" style="color:red">Delete Account</a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>