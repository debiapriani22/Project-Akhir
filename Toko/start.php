<?php
include 'koneksi2.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Start Page</title>
  </head>
  <body>
     <!-- Image and text -->
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
        background-image: url(https://img.freepik.com/free-photo/colorful-festive-gingerbread-cookies-different-shapes-covered-with-glaze_169016-13080.jpg?t=st=1656652639~exp=1656653239~hmac=af2d1210cbbebea7aa407aabdd673228bd73e4f63ada395f28d9a25f734f0b94&w=1060);
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
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
            <h1 class="text-center text-white" >Hello, Please Choose One!</h1>
            <p></p>
    <a href='sign.php'><button type="button" class="btn btn-primary btn-lg btn-block">Sign Up</button>
    <p></p>
    <a href='login.php'><button type="button" class="btn btn-info btn-lg btn-block">Login</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

    <!-- Copyright -->
    <footer>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2022 Copyright:
      <a class="text-dark" href="https://www.instagram.com/thesilk.joy/">The Silk Joy.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</div>

</div>
  </body>
</html>