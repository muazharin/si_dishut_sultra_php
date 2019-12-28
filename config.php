<?php
//File PHP berikut berfungsi untuk mengkoneksikan halaman web dengan database mysql
  $host="localhost"; //Nama host. Secara default kita tulis saja "localhost" (karena pakai XAMPP)
  $user="root"; //Username. Secara default kita tulis saja "root" (karena pakai XAMPP)
  $password=""; //Password. Secara default kita tulis saja dengan nilai kosong
  $database="dishut_sultra"; //Nama database yang akan kita gunakan
  $con=mysqli_connect($host,$user,$password,$database);
?>