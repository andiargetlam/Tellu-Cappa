  <?php
                                       include "configs.php"; 
                                       $resi = $_GET['resi'];
                                       $query = mysqli_query($db,"SELECT * FROM transaksi WHERE no_resi='$resi' ");
                                       $data = mysqli_fetch_array($query);
                                       $del = $data['status_kirim']; 
                                      
                                      $delivery = "SELECT * FROM delivery WHERE resi_no = '$data[no_resi]'";
                                       $aoquerydelivery=mysqli_query($db,$delivery);
                                       $deliv=mysqli_fetch_array($aoquerydelivery);

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
                                        $id = $data['id_trans'];
                                    ?>

 
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><center>PT. KARGO SANTOSA </center></h3>
                           <h4><i class="glyphicon glyphicon-home"></i> Warehouse </h4>
                           <h5>No SJ : SJ000<?php echo $deliv['id_delivery'];?></h5>
                           <h5>Tanggal SJ : <?php echo $deliv['tgl_delivery'];?></h5>
                           <h5>Supir : <?php echo $deliv['kurir'];?></h5>
                           <h5>No Polisi : <?php echo $deliv['no_polisi'];?></h5>
                          
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                <h4><i class="fa fa-truck m-r-5"></i> Delivery Detail <?php echo $data['no_so'];?></h4>
                           <h7>Nama Penerima : <?php echo $data['penerima'];?></h7><br>
                           <h7>Alamat :<?php echo $data['alamat_penerima'];?> - <?php echo $pro['nama_propinsi'];?> - <?php echo $kab['nama_kabupaten'];?></h7><br>
                           <h7>No Tlp : <?php echo $data['tlp_penerima'];?></h7><br><br>

                               <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                        <th>Tanggal </th>
                                       <th>No Resi</th>
                                       <th>Produk</th>
                                       <th>Qty</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                               
                                    <tr>
                                        <td><?php echo $data['tgl_kirim'];?></td>
                                       <td><?php echo $data['no_resi'];?></td>
                                       <td><?php echo $data['jenis_barang'];?></td>
                                       <td><?php echo $data['berat'];?></td>
                                    </tr>
                                
                                 </tbody>
                              </table>
                           </div>
                           <div >
                      <th >KURIR</th>
                       <br>
                       <br>
                       <br>
                       <br>
                       (<?php echo $deliv['kurir'];?>)
                           
                           </div>
                              </div>
                           </div>
                        </div>


                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
           
                       
                  <!-- /.modal-dialog -->
           
                       <script language=javascript>
      function prints() {
        bV = parseInt(navigator.appVersion);
        if (bV >= 4) window.print();}
        prints();
      </script>