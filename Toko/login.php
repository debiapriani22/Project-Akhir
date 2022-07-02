<?php
$login=0;
$invalid=0;


if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'koneksi2.php';
  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql="SELECT * FROM registration WHERE
  username='$username' and password='$password'";

  $result=mysqli_query($konek2,$sql);
  if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
      $login=1;
      session_start();
      $_SESSION['username']=$username;
      header('location:index.php');
    } else {
        $invalid=1;
    }
  }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login Page</title>
  </head>
  <body>

     <!-- Navbar Logo & Text -->
 <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <h3>
    <img src="Logofix.png" width="100" height="100" class="" alt=""> The Silk Joy
  <small class="text-muted">| Enjoy Your Silky Dessert</small>
</h3>  </a>
</nav>
  <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url(https://img.freepik.com/free-photo/colorful-festive-gingerbread-cookies-form-candies-covered-with-glaze-blue-background-copy-space_169016-13078.jpg?t=st=1656652649~exp=1656653249~hmac=b7fadb1b0f888d10da524ac65e83e1b432185677914c4e243d1441480597b11f&w=1060);
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 1920px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #000 !important;
      }
    </style>

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">

        <!-- Penambahan home button -->
            <a href="start.php" type="button" class="btn btn-grey fixed-bottom text-white mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
  <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
</svg> Home</button></a>
            <h1 class="text-center text-white mt-5"> Login Page</h1>
   <div class="container mt-5">

    <!-- menggunakan method POST -->
   <form action="login.php" method="post">
  <div class="form-group text-white">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" placeholder="Enter your username" name="username">
  </div>
  <div class="form-group text-white">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" placeholder="Enter your Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary w-100">Login</button>
</form>
<p></p>
<!-- Kondisi jika user yang dimasukkan sesuai maka berhasil masuk -->
<?php
if($login){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Yeay!</strong> You are successfully Logged in!
</div>';
}
?>
<!-- Kondisi jika user yang dimasukkan tidak sesuai maka tidak berhasil masuk -->

  <?php
if($invalid){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Ups!</strong> Invalid data!</div>';
}
?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

    
  </body>
</html>