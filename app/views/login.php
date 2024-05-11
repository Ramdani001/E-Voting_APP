<?php
@session_start();
include 'inc/config.php';

if(!isset($_SESSION['log'])){
  
} else {
  header('location:index.php');
};

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="login/css/style.css">

    <title>Halaman Masuk E-Voting</title>
  </head>
  <body>
  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Selamat Datang di Website E-Voting</h3>
              <p class="mb-4">Silahkan masukan akun anda.</p>
            </div>
            <form method="post">
              <?php
                if (@$_POST['masuk'])
                {
                  include 'inc/cek_login.php';
                }
              ?>
              <div class="form-group first">
                <label for="username">Nama Pengguna</label>
                <input type="text" class="form-control" name="email">
              </div>
              <div class="form-group last mb-4">
                <label for="password">Kata Sandi</label>
                <input type="password" class="form-control" name="password">  
              </div>
              <input type="submit" value="Masuk" name="masuk" class="btn btn-block btn-primary">
            </form>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>

  
    <script src="login/js/jquery-3.3.1.min.js"></script>
    <script src="login/js/popper.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>
  </body>
</html>