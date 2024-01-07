
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-truck"></i>
               </div>
               <div class="header-title">
                  <h1>Delivery Order</h1>
                  <small>Customer List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>Sales Order View</h4>
                              </a>
                           </div>
                        </div>
                       
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                         <div class="col-md-2 hidden-print">

</div>
                          <div><h3>REQUEST DELIVERY ORDER</h3></div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                  <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>NO</th>
                                       <th>TANGGAL</th>
                                       <th>NO RESI</th>
                                       <th>NAMA PENGIRIM</th>
                                       <th>JENIS BARANG</th>
                                       <th>LAYANAN</th>
                                       <th>BERAT BARANG</th>
                                       <th>JUMLAH BIAYA</th>
                                       <th>TUJUAN KIRIM</th>
                                       <th>STATUS PENGIRIMAN</th>
                                       <th>ACTION</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       
                                       include "configs.php"; 
                                       $query ="SELECT * FROM transaksi WHERE status_kirim='Sedang Di Proses'    ";
                                       $no=1;
                                       $querytampil=mysqli_query($db,$query);
                                       while($data=mysqli_fetch_array($querytampil)){ 
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
                                    <tr>
                                       <td><?php echo "$no";?></td>
                                       <td><?php echo $data['tgl_kirim'];?></td>
                                       <td><?php echo $data['no_resi'];?></td>
                                       <td><?php echo $data['nama_pengirim'];?></td>
                                       <td><?php echo $data['jenis_barang'];?></td>
                                       <td><?php echo $cs['layanan'];?></td>
                                       <td><?php echo $data['berat'];?></td>
                                       <td><?php echo "Rp ".number_format($total, "0"," ", "."); ?></td>
                                       <td><?php echo $pro['nama_propinsi'];?> - <?php echo $kab['nama_kabupaten'];?></td>
                                       <td><?php echo $data['status_kirim'];?></td>
                                       
                                       <td>
                                           <a href="?page=modal_delivery&id=<?php echo $data['id_trans'];?>&resi=<?php echo $data['no_resi'];?>" type="button"  class="btn btn-add btn-sm" ><i class="fa fa-truck"></i>
                                       
                                         
                                       </td>
                              
                                       
                                   
                                    </tr>
                                    <?php $no++; }  ?>
                                  
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- customer Modal1 -->
               

               <!-- /.modal -->
               <!-- Modal -->    
               <!-- Customer Modal2 -->
               
               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>

       
