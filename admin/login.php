<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Hello Farm</title>
  	<!-- Bootstrap 3.3.7 -->
  	<link rel="stylesheet" href="style/css/main-login.css">
</head>
<body>
	<div class="login">
		<h1>Admin Login</h1>
	    <form method="post">
	    	<input type="text" name="u" placeholder="Username" required="required" />
	        <input type="password" name="p" placeholder="Password" required="required" />
					<!--
					username : admin
					password : admin123 -->
	        <button type="submit" name="login" class="btn btn-primary btn-block btn-large">Login</button>
<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo "<div class='alert alert-danger'>
										<strong>Password</strong> atau <strong>Username</strong> anda <strong>Salah</strong></a>
									</div>";
    } elseif ($_GET['pesan'] == "logout") {
        echo "<div class='alert alert-info'>
										Anda berhasil <strong>Logout</strong>
									</div>";
    } elseif ($_GET['pesan'] == "belum_login") {
        echo "<div class='alert alert-warning'>
										<strong>Perhatian!</strong> Anda harus <strong>login dulu</strong>
									</div>";
    }
}
?>
	    </form>
	</div>

	<?php
include "../koneksi.php";
session_start();
if (isset($_POST['login'])) {
    $user = $_POST['u'];
    $pas = md5($_POST['p']);

    $qryAdmin = "SELECT * FROM admin_login WHERE username = '$user' AND password = '$pas'";
    $eksAdmin = mysqli_query($koneksi, $qryAdmin);
    $cekData = mysqli_num_rows($eksAdmin);

    if ($cekData > 0) {
        $_SESSION['pengguna'] = $user;
        $_SESSION['cek'] = "login";
        header("location:index.php");
    } else {
        header("location:login.php?pesan=gagal");
    }
}
?>
</body>
</html>
