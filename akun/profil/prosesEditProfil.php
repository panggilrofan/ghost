<?php
  include("../koneksi.php");
  $id = $_POST['iduser'];
  $username = $_POST['username'];
  $nama = $_POST['namalengkap'];
  $email = $_POST['email'];
  $notelp = $_POST['notelp'];
  $qryEditProfil = mysqli_query($koneksi, "update user_login set username = '$username', nama_lengkap = '$nama', email = '$email', no_telp = '$notelp' where id_user = '$id'");
  header("location:editAkun.php");
 ?>
