<?php
include 'koneksi.php';
//Mengambil data dari yang sudah dimasukkan kedalam database
if(isset($_POST['submit'])){
  $name=$_POST['nama'];
  $alamat=$_POST['alamat'];
  $mobile=$_POST['mobile'];
  $email=$_POST['email'];

  //maka yang ditampilkan dari table customer yang sudah diisi sebelumnya
  $sql="INSERT INTO customer (nama, alamat, mobile, email)
  values ('$name', '$alamat', '$mobile', '$email')";
  $result=mysqli_query($konek, $sql);
  if($result){
    //data berhasil ditambahkan
  header('location:index.php');
  }else{
    die(mysqli_error($konek));
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

    <title>Form Customer</title>
  </head>
  <body>
    <div class="container">
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
        background-image: url(https://img.freepik.com/free-photo/flat-lay-bright-glazed-gingerbread-cookies-blue-background-copy-space_169016-13079.jpg?t=st=1656652649~exp=1656653249~hmac=3e58e2a55d8914734ce0ca73ee66968cece30d0b63fee42e1fbb25f867768c60&w=1060);
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
        <figure class="text-center text-white">
    <blockquote class="blockqoute">
    <h1 class="text-white"> Tambah Data Customer</h1>
    </figure>
     <!-- tombol home -->
<a href="index.php" type="button" class="btn btn-light mb-5"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="Pink" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z"/>
  <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z"/>
</svg> Home</button></a>
  <!-- Tabel Tampilan Tambah Customer -->
    <!-- menggunakan method POST -->
<form method="post">
<table class="align-middle">

  <div class="form-row text-white">
    <div class="col-md-4 mb-3">
      <label for="validationCustom01">Nama</label>
      <input type="text" class="form-control" id="validationCustom01" 
      placeholder="Nama Lengkap" name="nama" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
  <div class="form-group col-md 15 text-white">
      <label for="validationCustom03">Mobile</label>
      <input type="text" class="form-control" 
      placeholder="08123..." name="mobile" required>
      <div class="invalid-feedback">
      Harap berikan Nomor Telepon yang aktif.
      </div>
    </div>
    <div class="form-group col-md 5 text-white">
      <label for="validationCustom04">Email</label>
      <input type="text" class="form-control" 
      placeholder="anggrek123@gmail.com" name="email" required>
      <div class="invalid-feedback">
      Harap berikan Email yang valid.
        </div>
      </div>
    </div>
    <div class="form-group row-md-2 text-white">
      <label for="validationCustom05">Alamat</label>
      <input type="text" class="form-control" 
      placeholder="Jl. Anggrek ..." name="alamat" required>
      <div class="invalid-feedback">
      Harap berikan Alamat yang valid.
      </div>
    </div>
    <div class="mb-3 row">
    <button type="submit" class="btn btn-success" 
    name="submit">Submit & Save</button>
    </div>
    </form>
  </div>
</div>
        </div>
      </div>
    </div>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>