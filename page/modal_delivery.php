
 <?php
 include "configs.php"; 
$id = $_GET['id'];
                                     
                                       $query = mysqli_query($db,"SELECT * FROM transaksi WHERE id_trans='$id' ");
                                       $data = mysqli_fetch_array($query);
                                       $del = $data['status_kirim']; 
                                      

                                       $aoquery1 = "SELECT * FROM layanan WHERE biaya_paket = '$data[layanan_id]'";
                                       $aoquerytampil1=mysqli_query($db,$aoquery1);
                                       $cs=mysqli_fetch_array($aoquerytampil1);

                                        

                                        $aoquery3 = "SELECT * FROM propinsi WHERE id_propinsi = '$data[provinsi]'";
                                        $aoquerytampil3=mysqli_query($db,$aoquery3);
                                        $pro=mysqli_fetch_array($aoquerytampil3); 

                                        $aoquery4 = "SELECT * FROM kabupaten WHERE id_kabupaten = '$data[kota_kab]'";
                                        $aoquerytampil4=mysqli_query($db,$aoquery4);
                                        $kab=mysqli_fetch_array($aoquerytampil4); 

                                        $total=$cs['biaya_paket']*$data['berat'];
                                        
                                    ?>
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Delivery Detail </h3>

                          <h4>No Resi :<?php echo $data['no_resi'];?></h4>
                           <h4>Nama Pengirim : <?php echo $data['nama_pengirim'];?> </h4>
                           <h4>Tlp Pengirim : <?php echo $data['no_tlp'];?> </h4>
                           <h4>Nama Penerima : <?php echo $data['penerima'];?> </h4>
                           <h4>Tlp Penerima : <?php echo $data['tlp_penerima'];?> </h4>
                           <h4>Tujuan : <?php echo $pro['nama_propinsi'];?> - <?php echo $kab['nama_kabupaten'];?></h4>
                           <h4>Jenis Barang : <?php echo $data['jenis_barang'];?></h4>
                           <h4>Berat : <?php echo $data['berat'];?> KG</h4>
                           <h4>Layanan : <?php echo $cs['layanan'];?> - <?php echo $cs['estimasi'];?> </h4>
                           
                           
                         

                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal" method="post"   enctype="multipart/form-data">
                                    <fieldset>
                                       <div class="col-md-6 form-group">
                                       <label>Kurir</label>
                                     
                                       <select class="form-control" name="driver">
                                         <option value="">-Pilih Kurir-</option>
                                        <?php
                                       include "configs.php"; 
                                       $queryy ="SELECT * FROM user WHERE Status='Kurir'";
                                       $no=1;
                                       $querytampill=mysqli_query($db,$queryy);
                                                while($dataa=mysqli_fetch_array($querytampill)){
                                       
                                        ?>
                                       
                                         <option value="<?php echo $dataa['Nama'];?>"><?php echo $dataa['Nama'];?></option>
                                        <?php } ?>
                                         
                                       </select>

                                       
                                    </div>
                                        <div class="col-md-4 form-group">
                                 <label>No Polisi</label>
                                 <input type="text" name="nopolis" class="form-control" placeholder="No POLISI" >
                              </div>
                                     
                                    </div>
                                    <div class="col-md-4 form-group">
                                          
                                          <input type="hidden" name="status" placeholder="qty" value="<?php echo $data['id_trans'];?>" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                      
                                       
                                       
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                     
                           <a href="?page=add-transaksi" type="button" class="btn btn-danger btn-sm" >Cancel</a>
                           <button type="submit" name="simpan" class="btn btn-add btn-sm">Submit</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <a href="?page=add-transaksi" type="button" class="btn btn-danger pull-left" >Close</a>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
      

<?php
   
   include "configs.php";
   if (isset($_POST['simpan'])){
    $tanggal = date('Y-m-d');
     $nama_=$data['no_resi'];
     $drive_=$_POST['driver'];
      $no_=$_POST['nopolis'];
      
            $q=mysqli_query ($db, "update transaksi set status_kirim='Dalam Perjalanan' WHERE no_resi='$nama_'");
             $upload="INSERT INTO delivery (tgl_delivery, resi_no, kurir, no_polisi, bukti_terima, tgl_terima, catatan_terima, status_delivery) 
            VALUES('$tanggal','$nama_','$drive_', '$no_','Belum Ada','Belum Ada','Belum Ada','New')";
            $simpan=mysqli_query($db,$upload);
            if($simpan){
               
  echo "<script>alert ('Delivery Sukses')</script>";
   echo "<meta http-equiv='refresh' content='0; url=?page=cetak_sj&resi=$nama_'>";
            }else{
               echo "<script>alert ('Gagal')</script>";
   echo "<meta http-equiv='refresh' content='0; url=?page=delivery'>";
            }   
     
   }else{
         unset($_POST['simpan']);
   }
?>    