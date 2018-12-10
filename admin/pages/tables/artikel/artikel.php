<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include("koneksi.php");
      // membuat pagination
      $halaman = 2;
      $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
      $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
      $result = mysqli_query($koneksi,"SELECT * FROM artikel");
      $total = mysqli_num_rows($result);
      $pages = ceil($total/$halaman);
      $query = mysqli_query($koneksi,"select * from artikel LIMIT $mulai, $halaman")or die(mysqli_error);
      $no =$mulai+1;

      // tampil data
      while ($data = mysqli_fetch_assoc($query)) {
        echo "<h2>".$data['judul_artikel']."</h2>";
        $pecah = explode("<!--more-->", $data['isi_artikel']);
        $excerpt = $pecah[0];
        echo $excerpt;
        echo ".....<br>[ <a href=tampilArtikel.php?id=".$data['id_artikel'].">selengkapnya</a> ]<hr>";

      }
      ?>
    <?php for ($i=1; $i<=$pages ; $i++){ ?>
      <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

    <?php } ?>
    
  </body>
</html>
