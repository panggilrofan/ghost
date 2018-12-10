<?php
  include("../../koneksi.php");
  session_start();
  $id = $_SESSION['id_user'];

  $baru = md5($_POST['password_baru']);
  $konfirmasi = md5($_POST['konfirmasi_password']);

  if ($konfirmasi != $baru) {
    header("location:editPassword.php?pesan=salah");
  }else {
    $qryEditPassword = mysqli_query($koneksi, "update user_login set password = '$baru' where id_user = '$id'");
    header("location:editPassword.php?pesan=berhasil");
  }
 ?>
