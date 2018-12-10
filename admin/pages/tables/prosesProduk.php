<?php
	include('koneksi.php');

	$idproduk = $_POST['kdproduk'];

	$namafile = $_FILES['gambarproduk']['name'];
	$tipefile = $_FILES['gambarproduk']['type'];
	$tmpfile = fopen($_FILES['gambarproduk']['tmp_name'], 'rb');
	$filedata = fread($tmpfile, filesize($_FILES['gambarproduk']['tmp_name']));
	$file_tmp = $_FILES['gambarproduk']['tmp_name'];
	move_uploaded_file($file_tmp, 'gambarproduk/'.$namafile);
	$data = addslashes($filedata);

	$nmproduk = $_POST['nama_produk'];
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];
	$tgl = date('Y-m-d');

	$querySimpan = "insert into toko (id, nama_file,  mime, gambar, nama_produk, deskripsi, harga, tgl) values ('$idproduk', '$namafile', '$tipefile', '$data', '$nmproduk', '$deskripsi', '$harga', '$tgl')";
	$eksekusi = mysqli_query($koneksi, $querySimpan);
	header("location:produk.php");
?>
