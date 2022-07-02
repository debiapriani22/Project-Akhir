<?php
session_start();
//mengakhir session
//ketika menutup jendela atau tab browser, sesi akan selesai.
session_destroy();
header('location:start.php');
?>