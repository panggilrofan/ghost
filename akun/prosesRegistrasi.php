<?php
include("../koneksi.php");
$user = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);


$qryRegistrasi = "INSERT INTO user_login (username, email, password) VALUES ('$user', '$email', '$password')";
$eksRegistrasi = mysqli_query($koneksi, $qryRegistrasi);

if ($eksRegistrasi == true) {
    header("location:../index.php");
}
 ?>
