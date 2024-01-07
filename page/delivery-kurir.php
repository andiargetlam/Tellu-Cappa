 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-shopping-basket"></i>
               </div>
               <div class="header-title">
                  <h1>Kurir Konfirmasi</h1>
                  <small>Kurir dan Transaksi Detail</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="panel lobidisable panel-bd">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Konfirmasi Pengiriman</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <form method="post"   enctype="multipart/form-data">
                              <div class="form-group">
                                 <label>Pilih No Resi</label>
                               
                                 <select class="form-control" name="resi">
                                    <option value="">--Pilih No Resi-- </option>
                                      <?php
                                       include "configs.php"; 
                                       $query ="SELECT * FROM delivery WHERE kurir='$_SESSION[namapenjual]' AND status_delivery='New' ";
                                       $no=1;
                                       $querytampil=mysqli_query($db,$query);
                                       while($data=mysqli_fetch_array($querytampil)){  
                                    ?>

                                    <option value="<?php echo $data['resi_no'];?>">[<?php echo $data ['resi_no'];?>] </option>
                                    <?php } ?>
                                 </select>
                                 
                              </div>
                               <div class="form-group">
                                 <label>Upload Bukti</label>
                                 <div class=" input-group date form_date">
                                    <input name="fotodoc"  type="file" class="form-control years"><span class="input-group-addon"><a href="#"><i class="fa fa-calendar"></i></a></span>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label>Tanggal Terima</label>
                                 <div class=" input-group date form_date">
                                    <input name="date"  type="date" min="<?php echo date("Y-m-d"); ?>" class="form-control years"><span class="input-group-addon"><a href="#"><i class="fa fa-calendar"></i></a></span>
                                 </div>
                              </div>
                              
                               <div class="form-group">
                                 <label>Catatan Terima</label>
                                 <input type="text" name="catat" class="form-control" placeholder="Catatan Penerima" >
                              </div>
                           
                             
                              <?php if ($_SESSION['status']=='Kurir') { ?>
                                 <div class="form-group">
                                 <button type="submit" name="simpan" class="btn btn-add"><i class="fa fa-check"></i> Submit
                                 </button>
                              </div>
                            <?php  }else{ ?>
                              <div class="form-group">
                                 <button type="hidden"  class="btn btn-add"><i class="fa fa-close"></i> No Access!
                                 </button>
                              </div>
                           <?php } ?>
                           </form>
                            
                        </div>
                     </div>
                  </div>

                 


<?php

   
   include "configs.php";
   if (isset($_POST['simpan'])){
       $fotodoc=$_FILES['fotodoc']['name'];
         $type=$_FILES['fotodoc']['type'];
      $tgl_=$_POST['date'];
       $catat_=$_POST['catat'];
        

         $uploaddir='page/gambar/';
            $alamatgambar=$uploaddir.$_FILES['fotodoc']['name'];
            $alamatdatabase='page/gambar/'.$_FILES['fotodoc']['name'];

if (move_uploaded_file($_FILES['fotodoc']['tmp_name'],$alamatgambar))//periksa jika proses upload berjalan sukses
            {  
$query=mysqli_query ($db, "update delivery set bukti_terima='$alamatdatabase', tgl_terima='$tgl_', catatan_terima='$catat_', status_delivery='Telah Diterima' WHERE resi_no='$_POST[resi]'");
$query2=mysqli_query ($db, "update transaksi set  status_kirim='Telah Diterima' WHERE no_resi='$_POST[resi]'");
echo "<script>alert ('Ubah Data Sukses')</script>";
   echo "<meta http-equiv='refresh' content='0; url=?page=delivery-kurir'>";
}
  }      
?>

                  <div class="col-sm-6">
                     <div class="panel lobidisable panel-bd">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Delivery List Pending</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive">
                              <table class="table table-bordered table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>No Resi</th>
                                       <th>Tujuan Kirim</th>
                                       <th>Estimasi Kirim</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                       include "configs.php"; 
                                       $query11 ="SELECT * FROM delivery,transaksi,propinsi,kabupaten WHERE delivery.resi_no=transaksi.no_resi AND transaksi.provinsi=propinsi.id_propinsi AND transaksi.kota_kab=kabupaten.id_kabupaten AND  delivery.kurir='$_SESSION[namapenjual]' AND delivery.status_delivery='New' ";
                                       $no=1;
                                       $querytampil11=mysqli_query($db,$query11);
                                       while($data11=mysqli_fetch_array($querytampil11)){  

                                      
                                    ?>
                                 
                                    <tr>
                                       <td><?php echo $data11 ['resi_no'];?></td>
                                       <td> <?php echo $data11 ['nama_propinsi'];?> - <?php echo $data11 ['nama_kabupaten'];?></td>
                                       <td> <?php echo $data11 ['tgl_kirim'];?></td>
                                       <td> <?php echo $data11 ['status_delivery'];?></td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
       