 <?php
include "configs.php"; 
$id = $_GET['id'];
$del = $_GET['del'];
$kelompokquery1 = "SELECT * FROM sales_order WHERE id_order = '$id'";
$kelompokquerytampil1=mysqli_query($db,$kelompokquery1);
$data=mysqli_fetch_array($kelompokquerytampil1);

$aoquery1 = "SELECT * FROM customer WHERE id_customer = '$data[customer_id]'";
$aoquerytampil1=mysqli_query($db,$aoquery1);
$cs=mysqli_fetch_array($aoquerytampil1);

$aoquery2 = "SELECT * FROM produk WHERE id_produk = '$data[produk]'";
$aoquerytampil2=mysqli_query($db,$aoquery2);
$prod=mysqli_fetch_array($aoquerytampil2);
 $hitung=mysqli_num_rows($aoquerytampil2);
                      $stokbr=$prod['stok']+$data['qty']; 
                      
$total=$prod['Harga']*$data['qty'];



$aoquery21 = "SELECT * FROM user WHERE id_user = '$data[salesman]'";
$aoquerytampil21=mysqli_query($db,$aoquery21);
$us=mysqli_fetch_array($aoquerytampil21);

$aoquery214 = "SELECT * FROM delivery WHERE id_delivery = '$del'";
$aoquerytampil214=mysqli_query($db,$aoquery214);
$us4=mysqli_fetch_array($aoquerytampil214);
?>

 
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Delivery Detail <?php echo $data['no_so'];?></h3>
                           <h4>Nama Toko : <?php echo $cs['nama_toko'];?></h4>
                           <h4>Alamat :<?php echo $cs['alamat_toko'];?></h4>
                           <h4>Produk : <?php echo $prod['nama_produk'];?></h4>
                           <h4>Qty : <?php echo $data['qty'];?> </h4>
                           <h4>delivery Date : <?php echo $us4['tanggal_kirim'];?> </h4>
                           <h4> Status Delivery : <span class="label-warning label label-default"><?php echo $data['delivery_status'];?></h4>

                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" method="submit"   enctype="multipart/form-data">
                                    <fieldset>
                                      
                                       
                                       <div class="col-md-6 form-group">
                                       <label>Driver</label>
                                     
                                       <select class="form-control"  disabled>
                                        <option value="<?php echo $us4['supir'];?>" ><?php echo $us4['supir'];?></option>
                                         <option value="Asep">Asep</option>
                                         <option value="Ibro">Ibro</option>
                                         <option value="Idang">Idang</option>
                                         
                                       </select>
                                       
                                    </div>
                                    <div class="col-md-4 form-group">
                                          <label class="control-label">QTY DELIVERY:</label>
                                          <input type="text"  placeholder="<?php echo $us4['delivery_qty'];?>" class="form-control" disabled>
                                       </div>
                                       <!-- Text input-->
                                      
                                       
                                       
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                           
                           <button type="submit" name="simpan" class="btn btn-danger btn-sm">Cancel Delivery</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <a href="?page=delivery_view" type="button" class="btn btn-danger pull-left" >Close</a>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
           
                 <?php
include "configs.php"; 
if (['simpan']) {

$up1=mysqli_query($db,"UPDATE produk SET stok='$stokbr' WHERE id_produk='$prod[id_produk]' "); 
$up2=mysqli_query ($db, "update sales_order set delivery_status='outstanding' WHERE no_so='$_GET[id]'");
$delet=mysqli_query($db, "delete from delivery where sj_no='$del'") ;

  
  echo "<script>alert ('Cancel Delivery Sukses')</script>";
   echo "<meta http-equiv='refresh' content='0; url=?page=delivery_view'>";

} 

?>       

