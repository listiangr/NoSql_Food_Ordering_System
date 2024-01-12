<?php 
session_start();
require 'config.php';
$var = $_GET['key'];
$coll = $db->user;
$akun = $coll->findOne(['Email' => $var]);

if (isset($_POST['submit'])) {
    $coll->updateOne(
        ['Email' => $var],
        ['$set' => ['Username' => $_POST['Username'], 'Phone' => $_POST['Phone'],]]
    );
    $_SESSION['success'] = "Data berhasil diubah";
    header("Location: profile.php?key=$var");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Foodiest | Edit Profile</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-image:linear-gradient(rgba(238,214,212,255),rgba(238,214,212,255)); margin:8%;" class="bg-light">
    <div class="container my-5 pt-4 pb-5 px-5 rounded bg-white" style="max-width:1000px">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="profile.php?key=<?php echo $var ?>">
                    <iconify-icon icon="material-symbols:arrow-back-rounded" width="40" height="40" color="#000000"></iconify-icon>
                </a>
                <ul class="nav justify-content-end" style="font-size: 25px; font-weight: bold;">
                    <li class="nav-item">
                        Edit Profile
                    </li>
                </ul>
            </div>
        </nav>
        <hr>
        <!-- Content -->
        <div class="container-sm my-5 px-5">
            <form method="POST">
                <!-- Row 1 -->
                <div class="row align-items-center">
                    <div class="col">
                        <div class="mb-3">
                            <label for="Username" class="form-label">Name</label>
                            <input type="text" value="<?php echo "$akun->Username"; ?>" name="Username" id="name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                </div>
                <!-- Row 2 -->
                <div class="row align-items-center">
                    <div class="col">
                        <div class="mb-3">
                            <label for="Phone" class="form-label">Phone Number</label>
                            <input type="text" value="<?php echo "$akun->Phone"; ?>" name="Phone" id="Phone" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                </div>
                <!-- Row 3 -->
                <div class="row align-items-center">
                    <div class="col">
                        <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" value="<?php echo "$akun->Email"; ?>" name="Email" id="Email" class="form-control" placeholder="Email" disabled>
                        </div>
                    </div>
                </div>
                <center>
                    <button type="submit" name="submit" class="btn btn-secondary btn-lg" style="background-color:#eed6d4; border-radius: 50px;">
                        <a href="profile.php?key=<?php echo $var; ?>" style="color:#000000; font-weight: bold; font-size: 20px; text-decoration: none; margin:50px">
                            Submit
                        </a>
                    </button>
                </center>
            </form>
        </div>
        <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>

</html>