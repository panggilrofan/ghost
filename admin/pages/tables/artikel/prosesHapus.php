<?php
  include("koneksi.php");
  $idartikel = $_GET['idartikel'];
  $qryHapusArtikel = mysqli_query($koneksi, "delete from artikel where id_artikel = '$idartikel'");
  header("location:../artikel.php");
 ?>
