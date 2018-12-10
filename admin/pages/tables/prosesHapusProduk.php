<?
	include("koneksi.php");
	$idDelete = $_GET['kdproduk'];
	$qryDelete = "delete from toko where id = $idDelete";
	$eksekusiDelete = mysqli_query($koneksi, $qryDelete);
	header("location:produk.php");
?>
