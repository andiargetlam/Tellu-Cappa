<?php 
$aoquery1 = "SELECT * FROM produk WHERE id_produk = '$_GET[id]'";
$aoquerytampil1=mysqli_query($db,$aoquery1);
$cs=mysqli_fetch_array($aoquerytampil1);
?>
<div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Kode Produk <?php echo $cs['kode_product'];?></h3>
                           <h4>Nama produk : <?php echo $cs['nama_produk'];?></h4>
                           <h4>Ukuran :<?php echo $cs['ukuran'];?></h4>
                           <h4>Stok Awal : <?php echo $cs['stok'];?></h4>
                          
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" method="post"   enctype="multipart/form-data">
                                    <fieldset>
                                      
                                       
                                      
                                    <div class="col-md-4 form-group">
                                          <label class="control-label">QTY STOK IN:</label>
                                          <input type="number" name="qty" placeholder="qty" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                      
                                       
                                       
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                           <a href="?page=delivery" type="button" class="btn btn-danger btn-sm" >Cancel</a>
                           <button type="submit" name="simpan" class="btn btn-add btn-sm">Send</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <a href="?page=delivery" type="button" class="btn btn-danger pull-left" >Close</a>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                   <?php
include('conigs.php');
if (isset($_POST['simpan'])) {
  $qty = $_POST['qty']+$cs['stok'];
  
$query=mysqli_query ($db, "update produk set stok='$qty' WHERE id_produk='$_GET[id]'");
if ($query){

   echo "<script>alert ('update stok  sukses')</script>";
   echo "<meta http-equiv='refresh' content='0; url=home.php?page=stok_up'>";

} else {
    //kalau username ataupun password tidak terdaftar di database
    echo "<script>alert ('Maaf Username dan Password Salah')</script>";
   echo "<meta http-equiv='refresh' content='0; url=home.php?page=update_stok'>";

}
}
?>
