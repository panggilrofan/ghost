<?php
  $host       = "localhost";
  $username   = "root";
  $pass       = "";
  $db         = "peternakan";

  $koneksi    = mysqli_connect($host, $username, $pass, $db) or die("Database tidak terhubung : ".mysqli_connect_error());
 ?>
