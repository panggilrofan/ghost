<?php
  #mengaktifkan session php
    session_start();

  #menghubungkan ke database dari file $koneksi
    include('koneksi.php');

  #mengangkap data yang di kirim dari form
  if (isset($_POST['masuk'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

  #membuat query menyeleksi data admin/user dengan username dan password yang sesuai
    $qryLogin = "SELECT * FROM user_login WHERE email = '$email' AND password = '$password'";

    $login = mysqli_query($koneksi, $qryLogin);
    #menyimpan data ke dalam array
    $data = mysqli_fetch_array($login);
    #menghitung jumlah data yang di temukan

    $cekData = mysqli_num_rows($login);

    if ($cekData > 0) {
      $_SESSION['id_user'] = $data['id_user'];
      $_SESSION['username'] = $data['username'];


      $_SESSION['status'] = "login";
      header("location:index.php");
    }else {
      header("location:index.php?pesan=gagal");
    }
  }

 ?>
