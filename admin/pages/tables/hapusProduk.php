<?
  $idHapus = $data['id'];
  $qrySelectHapus = "SELECT *FROM toko where id = $idHapus";
  $eksekusiSelectHapus = mysqli_query($koneksi, $qrySelectHapus);
  $dataHapus = mysqli_fetch_array($eksekusiSelectHapus);
?>

<div class="modal fade" id="hapusProduk<?php echo $data['id'];?>" role="dialog">
    <div class="modal-dialog">
      <!--Modal Content-->
      <form method="GET" action="prosesHapusProduk.php">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class = "close" name="button" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Buku</h4>
        </div>
        <div class="modal-body">
          <div class="form-group" hidden>
              <label class="control-label " for="idproduk" >
                Kode Produk
              </label>
               <div class="input-group">
                 <div class="input-group-addon">

                  </div>
                    <input class="form-control" id="kdproduk" name="kdproduk" placeholder="Kode Produk" value="<? echo $dataHapus['id']; ?>" type="text">
                  </div>
          </div>
          <h3>Apakah anda yakin akan menghapus data <? $dataHapus['nama_produk']; ?> ?</h3>
        </div>
        <div class="modal-footer">

          <?php
            echo "
            <button type = 'submit' class='btn btn-danger' name='hapus'>
             Hapus
           </button>
            <button class='btn btn-success' data-dismiss='modal'>
             Batal
           </button>
            ";
          ?>


        </div>

      </div>
      </form>
    </div>

  </div>
