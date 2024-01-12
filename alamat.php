<?php session_start(); ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Foodiest | Alamat Pengantaran</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-image:linear-gradient(rgba(238,214,212,255),rgba(238,214,212,255)); margin:8%;" class="bg-light">
    <div class="container my-5 pt-4 pb-5 px-5 rounded bg-white" style="max-width:1000px">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
              <a class="navbar-brand" href="restoran1.php">
                  <iconify-icon icon="material-symbols:arrow-back-rounded" width="40" height="40" color="#000000"></iconify-icon>
              </a>
              <ul class="nav justify-content-end" style="font-size: 25px; font-weight: bold;">
                <li class="nav-item">
                    Alamat Pengantaran
                </li>
            </ul>
          </div>
      </nav>
      <hr>
        <!-- Content -->
        <div class="container-sm my-5 px-5">
            <!-- Row 1 -->
            <div class="row align-items-center">
                <div class="col">
                    <div class="mb-3">
                        <!-- <label for="jalan" class="form-label">Nama Jalan</label> -->
                        <textarea name="alamat" id="alamat" cols="105" rows="10" placeholder="Alamat lengkap..."></textarea>
                    </div>
                </div>
            </div>
            
        </div>
        <center>
        <?php
          $key = $_GET['key'];
          $key2 = $_GET['key2'];
        ?>
        <button type="button" class="btn btn-secondary btn-lg" style="background-color:#eed6d4; border-radius: 50px;">
          <a href="transaksi.php?key=<?php echo $key;?>&&key2=<?php echo $key2;?>" style="color:#000000; font-weight: bold; font-size: 20px; text-decoration: none; margin:50px">
            Next
          </a>
        </button>
      </center>
        <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>