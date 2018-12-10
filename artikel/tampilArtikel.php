<?php
  include("koneksi.php");
  $id = abs(intval($_GET['id']));
  $sql = "SELECT * FROM artikel WHERE id_artikel='$id' LIMIT 1";
  $tampilkan = mysqli_query($koneksi, $sql);
  $baris = mysqli_fetch_array($tampilkan);
  echo "<h2>".$baris['judul_artikel']."</h2>";
  echo $baris['isi_artikel'];
 ?>
