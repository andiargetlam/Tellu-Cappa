 <?php
include "configs.php"; 

$kelompokquery12 = "SELECT * FROM delivery WHERE sj_no='$_GET[sj_no]'";
$kelompokquerytampil12=mysqli_query($db,$kelompokquery12);
$data2=mysqli_fetch_array($kelompokquerytampil12);

$kelompokquery1 = "SELECT * FROM sales_order WHERE id_order = '$data2[id_so]'";
$kelompokquerytampil1=mysqli_query($db,$kelompokquery1);
$data=mysqli_fetch_array($kelompokquerytampil1);

$aoquery1 = "SELECT * FROM customer WHERE id_customer = '$data[customer_id]'";
$aoquerytampil1=mysqli_query($db,$aoquery1);
$cs=mysqli_fetch_array($aoquerytampil1);

$aoquery2 = "SELECT * FROM produk WHERE id_produk = '$data[produk]'";
$aoquerytampil2=mysqli_query($db,$aoquery2);
$prod=mysqli_fetch_array($aoquerytampil2);  
$total=$prod['Harga']*$data['qty'];

$aoquery21 = "SELECT * FROM user WHERE id_user = '$data[salesman]'";
$aoquerytampil21=mysqli_query($db,$aoquery21);
$us=mysqli_fetch_array($aoquerytampil21);
?>

 
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><center>CV. ASIA PRIMA</center></h3>
                           <h4><i class="glyphicon glyphicon-home"></i> Warehouse </h4>
                           <h5>No SJ : <?php echo $data2['sj_no'];?></h5>
                           <h5>Tanggal SJ : <?php echo $data2['tanggal_kirim'];?></h5>
                           <h5>Waktu : <?php echo $data2['waktu'];?></h5>
                           <h5>Supir : <?php echo $data2['supir'];?></h5>
                          
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                <h4><i class="fa fa-truck m-r-5"></i> Delivery Detail <?php echo $data['no_so'];?></h4>
                           <h7>Nama Toko : <?php echo $cs['nama_toko'];?></h7><br>
                           <h7>Alamat :<?php echo $cs['alamat_toko'];?></h7><br>
                           <h7>No Tlp : <?php echo $cs['no_tlp'];?></h7><br>
                               <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                        <th>Tanggal </th>
                                       <th>No So</th>
                                       <th>Produk</th>
                                       <th>Qty</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                        <td><?php echo $data['tgl_so'];?></td>
                                       <td><?php echo $data['no_so'];?></td>
                                       <td><?php echo $prod['nama_produk'];?></td>
                                       <td><?php echo $data['qty'];?></td>
                                       
                                      
                                    </tr>
                                    
                                 </tbody>
                              </table>
                           </div>
                              </div>
                           </div>
                        </div>
                       

                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
           
                       <script language=javascript>
      function prints() {
        bV = parseInt(navigator.appVersion);
        if (bV >= 4) window.print();}
        prints();
      </script>