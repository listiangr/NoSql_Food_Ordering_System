<?php session_start(); ?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>History</title>
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
                <a class="nav-link" href="home.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">HISTORY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">PROFILE</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Content -->
      <h1>History</h1>
    </center>
    <div class="container-sm my-5 px-5">
      <?php
        require_once 'config.php';
        $email = $_GET['key'];
        $coll1 = $db->user;
        $coll2 = $db->restoran;
        $coll3 = $db->order;
        $order = $coll3->find(array('user' => $email));

        foreach($order as $doc){
          echo '<div class="row align-items-center border-bottom">';
            echo '<div class="col-6">';
              $id_resto = $doc['id_restoran'];
              $var_resto = new MongoDB\BSON\ObjectID($id_resto);
              $resto = $coll2->findOne(array('_id' => $var_resto));
              echo '<p class="fs-4 fw-bold mb-0 mt-4">'. $resto['nama'] .'</p>';
              echo '<p class="fs-6 mt-0 mb-4">Finished Order</p>';
            echo '</div>';
            echo '<div class="col text-end">';
              echo '<p class="fs-4 fw-bold mb-0 mt-4">'. $doc['total'] . '</p>';
              echo '<p class="fs-6 mt-0 mb-4">01 Jan 2022 12:01</p>';
            echo '</div>';
            echo '<div class="col-md-auto">';
              echo '<p class="fs-3">></p>';
            echo '</div>';
          echo '</div>';
        }
      ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>