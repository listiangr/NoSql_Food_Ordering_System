<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foodiest | Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-light" style="background-image:linear-gradient(rgba(238,214,212,255),rgba(238,214,212,255))">
    <div class="container my-5 pt-4 pb-5 px-5 rounded bg-white" style="max-width:1000px">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
              <a class="navbar-brand" href="restoran.php">
                  <iconify-icon icon="material-symbols:arrow-back-rounded" width="40" height="40"></iconify-icon>
              </a>
              <ul class="nav justify-content-end" style="font-size: 25px; font-weight: bold;">
                <li class="nav-item">
                  <?php
                    require_once 'config.php';
                    $id_resto = $_GET['key'];
                    $coll = $db->restoran;
                    $var = new MongoDB\BSON\ObjectID($id_resto);
                    $list = $coll->findOne(array('_id' => $var));
                    echo $list['nama'];
                  ?>
                </li>
            </ul>
          </div>
      </nav>
      <hr>
      <!-- Navbar End -->
      <!-- List Menu Start -->
      <table class="table">
        <?php
            foreach($list['menu'] as $doc){
              echo "<tr>";
                echo "<td style='font-size: 22px'; text-align: left;'>". $doc['nama'] ."</td>";
                echo "<td style='font-size: 22px'; text-align: center;'>". $doc['harga'] . "</td>";
                //$key = $
                echo '<td style="text-align: center">';
                  echo '<a href="#">';
                      echo '<iconify-icon icon="mdi:minus-circle-outline" width="40" height="40"></iconify-icon>';
                  echo '</a>';
                echo '</td>';
                echo '<td style="font-size: 22px; text-align: right;">0</td>';
                echo '<td style="text-align: right">';
                  echo '<a href="#">';
                      echo '<iconify-icon icon="mdi:plus-circle-outline" width="40" height="40"></iconify-icon>';
                  echo '</a>';
                echo '</td>';
              echo "</tr>";
            }
        ?>
      </table>
      <br>
      <!-- List Menu End -->
      <!-- Button Start -->
      <?php 
        //$key = 
        $key2 = $_GET['key2'];
      ?>
      <center>
        <button type="button" class="btn btn-secondary btn-lg" style="background-color:#eed6d4; border-radius: 50px;">
          <a style="color:#000000; font-weight: bold; font-size: 20px; text-decoration: none; margin:50px;" 
            href="alamat.php?key=<?php echo $var;?>&&key2=<?php echo $key2;?> ">
            Next
          </a>
        </button>
      </center>
      <!-- Button End -->
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>