<?php
	include("koneksi.php");
	$idProduk = $_POST['kdproduk'];
	$nmProduk = $_POST['nama_produk'];
	$deskripsi = $_POST['deskripsi'];
	$hrg = $_POST['harga'];

	$qryEdit = "UPDATE toko SET nama_produk = '$nmProduk', deskripsi = '$deskripsi', harga = '$hrg' where id = '$idProduk'";
	$eksekusiEdit = mysqli_query($koneksi, $qryEdit);
	header("location:produk.php");

 ?>
