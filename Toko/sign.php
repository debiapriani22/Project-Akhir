<?php
$success=0;
$user=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'koneksi2.php';
  $username=$_POST['username'];
  $password=$_POST['password'];

  //$sql="INSERT INTO registration (username,password)
  //values ('$username','$password')";
  //$result=mysqli_query($konek,$sql);
  //if($result){
  //  echo "Data berhasil ditambahkan";
  //}else{
  //  die(mysqli_error($konek));
  //}

  $sql="SELECT * FROM registration WHERE 
  username='$username'";

  $result=mysqli_query($konek2,$sql);
  if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
      //echo "Username already exist!";
      $user=1;
    }else {

      $sql="INSERT INTO registration (username,password)
      values ('$username','$password')";
      $result=mysqli_query($konek2,$sql);
        if($result){
         //echo "Sign Up berhasil!";
         $success=1;
         //session = metode menyimpan data tentang pengguna saat ini (menggunakan variabel)
         // sehingga dapat mengakses ke semua halaman web
         session_start();
         $_SESSION['username']=$username;
         header('location:index.php');
         }else{
        die(mysqli_error($konek2));
        }
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

    <title>Sign up Page</title>
  </head>
  <body>
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
        background-image: url(https://img.freepik.com/free-photo/colorful-gingerbread-cookies-form-candies-glaze_169016-13087.jpg?w=1060&t=st=1656655587~exp=1656656187~hmac=00c2cc7a9b0e4b355a5ba8ec30eccb8ab61082964b048e02ad68e16177e0f522);
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
    <h1 class="text-center text-white mt-5"> Sign Up Page</h1>
   <div class="container mt-5">

    <!-- menggunakan method POST -->
   <form action="sign.php" method="post">
  <div class="form-group text-white">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" placeholder="Enter your username" name="username">
  </div>
  <div class="form-group text-white">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" placeholder="Enter your Password" name="password">
  </div>
  <button type="submit" class="btn btn-primary w-100">Sign Up</button>
<p></p>

<!-- Kondisi jika user yang dimasukkan tidak sesuai maka muncul alert -->
  <?php
if($user){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Ups!</strong> Username already exist!
</div>';
}
?>
<!-- Kondisi jika user yang dimasukkan sesuai maka berhasil -->

<?php
if($success){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Yeay!</strong> You are successfully Signed up!
</div>';
}
?>
</form>

            </div>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>