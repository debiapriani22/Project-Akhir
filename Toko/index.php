<!doctype html>

<?php
include 'koneksi.php';
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>The Silk Joy</title>
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
        background-image: url(https://img.freepik.com/free-photo/colorful-gingerbread-cookies-form-candies-glaze_169016-12689.jpg?t=st=1656656194~exp=1656656794~hmac=530ea01c2b7099e1402da8d200c1a28e8299df7478f404b4d1408a4ec80efc4c&w=1060);
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
        <figure class="text-center mt-3">
    <blockquote class="blockqoute">
    <h1 class="text-center text-white mt-5">Daftar List Customer</h1>
</figure>

<a href="logout.php" type="button" class="btn btn-light fixed-bottom"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-door-open-fill" viewBox="0 0 16 16">
  <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
</svg>Logout</a>
<a href="form-cust.php" type="button" class="btn btn-primary mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
  </svg> Tambah </button></a>


  <!-- Tabel Tampilan List Customer -->

<table class="table table-warning table-hover table-bordered align-middle text-black">
    
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  <?php
$query = "SELECT * FROM customer";
$sql = mysqli_query($konek, $query);
$no=1;
while($data = mysqli_fetch_array($sql)){
?>
    <tr>
      <th scope="row"><?php echo $no; ?></th>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['alamat']; ?></td>
      <td><?php echo $data['mobile']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><a href="form-update.php?updateid=<?php echo $data['id'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
      <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
  </svg></a>
  <!-- ikon delete -->
  <a href="form-delete.php?deleteid=<?php echo $data['id'];?>"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="red" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg></a>
</td>
    </tr>
    <?php
    $no++;
    } ?>

  </tbody>
</table>

        </div>
      </div>
    </div>

  </body>
</html>