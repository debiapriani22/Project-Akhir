<?php
include 'koneksi.php';
//Memanggil query dari ikon delete
//menggunakan metode $_GET karena tidak menampilkan data-data penting
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
$sql="DELETE FROM customer WHERE id=$id";
$result=mysqli_query($konek, $sql);
if($result){
    //echo "Data berhasil Dihapus!";
    header('location:index.php');
}else {
    echo die(mysqli_error($konek));
}

}