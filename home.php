<?php 
  if(isset($_POST['email'])){
     $email = $_POST['email'];
  }
  else{
    $email = $_GET['key'];
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foodiest | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-light" style="background-image:linear-gradient(rgba(238,214,212,255),rgba(238,214,212,255))">
    <!-- Navbar Start -->
    <nav class="navbar" style="margin-top:20px">
      <a class="navbar-brand" href="#" style="margin-left: 100px">
        <img src="assets/images/logo.png" alt="Bootstrap" width="75" height="75">
      </a>
      <ul class="nav justify-content-end" style="font-size: 25px; font-weight: bold;">
        <li class="nav-item">
          <a class="nav-link active" href="#" style="color: #cd0909">HOME</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="profile.php?key=<?php echo $email; ?>" style="color: #000000">PROFILE</a>
        </li>
        <li class="nav-item" style="margin-right:100px">
          <a class="nav-link" href="history.php?key=<?php echo $email; ?>" style="color: #000000">HISTORY</a>
        </li>
      </ul>
    </nav>
    <!-- Navbar End -->
    <!-- Image Start -->
    <div id="carouselExampleCaptions" style="margin-top: 10px">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/home.jpg" class="d-block w-100" alt="food home" style="opacity: 70%">
          <div class="carousel-caption d-none d-md-block" style="top: 0; margin-top: 100px;">
            <h5 style="font-size: 75px; font-weight: bold; color: #ffce51">ORDER FOOD</h5>
            <p style="font-size: 50px; font-weight: bold; color: #ffce51">From Your Favorite Restaurant.</p>
            <div class="container" style="margin-top: 125px">
              <button type="button" class="btn btn-secondary btn-lg" style="background-color:#ffce51; border-radius: 50px;">
                <a style="color:#cd0909; font-weight: bold; font-size: 40px; text-decoration: none; margin:50px;" href="restoran.php?key=<?php echo $email; ?>">
                  ORDER NOW
                </a>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Image End -->
    <!-- Bawah Start -->
    <div style="height:150px"></div>
    <!-- Bawah End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>