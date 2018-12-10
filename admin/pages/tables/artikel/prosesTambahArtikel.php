<?php
  include("koneksi.php");
    $judul = $_POST['judul'];
    $konten = addslashes($_POST['artikel']);
    $tgl_posting = date('Y-m-d');

    if (!empty($judul) && !empty($konten)) {
      $qrySimpan = "INSERT INTO artikel (judul_artikel, isi_artikel, tgl_posting) VALUES('$judul', '$konten', '$tgl_posting')";
      $simpan = mysqli_query($koneksi, $qrySimpan);
      header("location:index.php");
    }else {
      $pesanError = '<b class="text-danger text-center>Data Tidak Boleh Kosong</b>';
    }
 ?>
