<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foodiest | Restoran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-light" style="background-image:linear-gradient(rgba(238,214,212,255),rgba(238,214,212,255))">
    <div class="container my-5 pt-4 pb-5 px-5 rounded bg-white" style="max-width:1000px">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
              <a class="navbar-brand" href="home.php">
                  <iconify-icon icon="material-symbols:arrow-back-rounded" width="40" height="40"></iconify-icon>
              </a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 50px; font-size: 25px; font-weight:bold;">
                      <li class="nav-item"> Mau makan apa hari ini?</li>
                  </ul>
                  <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-secondary" type="submit">Search</button>
                  </form>
              </div>
          </div>
      </nav>
      <hr>
      <!-- Navbar End -->
      <!-- List Restoran Start -->
      <table class="table">
        <?php
            require_once 'config.php';
            $coll = $db->restoran;
            $list = $coll->find();

            foreach($list as $doc){
              echo "<tr>";
                echo "<td style='font-size: 22px'; text-align: left;'>". $doc['nama'] ."</td>";
                echo "<td style='font-size: 22px'; text-align: center;'>". $doc['lokasi'] . "</td>";
                $key = $doc['_id'];
                $key2 = $_GET['key'];
                echo "<td style='text-align: right'>";
                  echo "<a href='restoran1.php?key=$key&&key2=$key2'>";
                    echo "<iconify-icon icon='ic:round-navigate-next' width='50' height='50'></iconify-icon>";
                  echo "</a>";
                echo "</td>";
              echo "</tr>";
            }
        ?>
      </table>
      <!-- List Restoran End -->
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>