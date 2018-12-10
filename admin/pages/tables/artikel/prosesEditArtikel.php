<?php
  include("koneksi.php");
  $idartikel = $_POST['id'];
  $judul = $_POST['judul'];
  $isi = addslashes($_POST['artikel']);
  $qryEdit = mysqli_query($koneksi, "update artikel set judul_artikel = '$judul', isi_artikel = '$isi' where id_artikel = '$idartikel'");
  header("location:../artikel.php");
 ?>
