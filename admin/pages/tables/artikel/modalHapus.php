<?php
  $id = $artikel['id_artikel'];
  $qryTampilHapus = mysqli_query($koneksi, "select *from artikel where id_artikel = '$id'");
  $row = mysqli_fetch_array($qryTampilHapus);
 ?>

 <div class="modal fade" id="modalHapus<?php echo $artikel['id_artikel']; ?>" role="dialog">
   <div class="modal-dialog">
     <!--Modal Content-->
     <form action="artikel/prosesHapus.php"method="GET">
     <div class="modal-content">

       <div class="modal-header">
         <input type="text" name="idartikel" value="<?php echo $row['id_artikel']; ?>" hidden>
         <button type="button" class = "close" name="button" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Hapus Artikel</h4>
       </div>
       <div class="modal-body">
         <h3>Apakah anda yakin akan menghapus artikel <b> <?php echo $row['judul_artikel']; ?> </b>ini ?</h3>
       </div>
       <div class="modal-footer">

         <?php
           echo "
           <button type='submit' name='hapus' class='btn btn-danger'>Hapus</button>
           <button type='submit' class='btn btn-success' data-dismiss='modal'>
            Batal
          </a>
           ";
         ?>

       </div>

     </div>
     </form>
   </div>

 </div>
