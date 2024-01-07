 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="header-icon">
         <i class="fa fa-file-o"></i>
      </div>
      <div class="header-title">
         <h1>Expense Report</h1>
         <small>List of Expense Report</small>
      </div>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-sm-12">
            <div class="panel panel-bd lobidrag">
               <div class="panel-heading">
                  <div class="btn-group" id="buttonexport" style="width: 100%;">
                        <div class="col-md-12">
                     <form method="post" id="postForm">
                        <div class="row">
                           <div class="col-md-4">
                              <label> Tanggal Awal :</label>                            
                              <input type="date" name="awal" class="form-control" value="<?php echo $_POST['awal'] ?>"/>

                              </div>
                              <div class="col-md-4">
                              <label> Tanggal Akhir :</label>                              
                              <input type="date" name="akhir" class="form-control" value="<?php echo $_POST['akhir'] ?>"/>
                           </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                           <div class="col-md-4">
                              <label>Status Trans :</label>                         
                              <select class="form-control m-b" name="stat">
                                 <option value="">--Pilih Status--</option>
                                 <option value="Dalam Perjalanan">Dalam Perjalanan</option>
                                 <option value="Telah Diterima">Telah Diterima</option>
                              </select>
                           </div>
                           
                        </div>

                        <input type="submit" class="btn ink-reaction btn-raised btn-primary" value="Tampilkan" name="tampilkan"/>
                     </form>
                     <a href="#">
                        
                     </a>
                  </div>
                  </div>
               </div>


               <div class="panel-body">
                  <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                  <div class="btn-group">
                     <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                     <ul class="dropdown-menu exp-drop" role="menu">
                        
                                    <li class="divider"></li>
                                    <li>
                                       <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});"> 
                                          <img src="assets/dist/img/xls.png" width="24" alt="logo"> EXCEL</a>
                                       </li>
                                       
                                               <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'doc',escape:'false'});">
                                    <img src="assets/dist/img/word.png" width="24" alt="logo"> Word</a>
                                 </li>
                                                </ul>
                                             </div>
                                             <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                             <div class="table-responsive">
                                                <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                                   <thead>
                                                      <tr class="info">
                                                        <td style="border: 1px solid black;" colspan="18"><CENTER><b><H3>TRANSACTION & DELIVERY REPORT DETAIL</H3></CENTER></td>
                                                      </tr>
                                                      <tr class="info">
                                                          <td style="border: 1px solid black;" colspan="18"> <b>Trans Date : <?php echo $_POST['awal']; ?> s/d <?php echo $_POST['akhir']; ?> <br> <b> Status Trans : <?php echo $_POST['stat']; ?> <br> 

                                                      </tr>
                                                       <tr class="info">
                                                      <th style="border: 1px solid black;">NO</th>
                                                      <th style="border: 1px solid black;">TANGGAL TRANS</th>
                                                      <th style="border: 1px solid black;">DELIVERY DATE</th>
                                                      <th style="border: 1px solid black;">NO RESI</th>
                                                      <th style="border: 1px solid black;">NAMA PENGIRIM</th>
                                                      <th style="border: 1px solid black;">NO TLP</th>
                                                      <th style="border: 1px solid black;">JENIS BARANG</th>
                                                      <th style="border: 1px solid black;">BERAT</th>
                                                      <th style="border: 1px solid black;">LAYANAN</th>
                                                      <th style="border: 1px solid black;">BIAYA</th>
                                                      <th style="border: 1px solid black;">TOTAL BIAYA</th>
                                                      <th style="border: 1px solid black;">TUJUAN KIRIM</th>
                                                      <th style="border: 1px solid black;">NAMA PENERIMA</th>
                                                      <th style="border: 1px solid black;">NO TLP</th>
                                                      <th style="border: 1px solid black;">TGL TERIMA</th>
                                                      <th style="border: 1px solid black;">KURIR</th>
                                                      <th style="border: 1px solid black;">DELIVERY</th>
                                                   </tr>
                                                   </thead>
                                                   <tbody>
                                                       <?php
                                       if(isset($_POST['tampilkan'])){
                                   
                                       include "configs.php"; 
                                       $query11 ="SELECT * FROM delivery,transaksi,propinsi,kabupaten,user,layanan WHERE transaksi.tgl_input BETWEEN '$_POST[awal]' AND '$_POST[akhir]' AND transaksi.status_kirim='$_POST[stat]' AND  delivery.resi_no=transaksi.no_resi AND transaksi.provinsi=propinsi.id_propinsi AND transaksi.kota_kab=kabupaten.id_kabupaten AND  delivery.kurir=user.Nama AND transaksi.layanan_id=layanan.biaya_paket ";
                                       $no=1;
                                       $querytampil11=mysqli_query($db,$query11);
                                       while($data=mysqli_fetch_array($querytampil11)){  
                                       $jml=$data['berat']*$data['biaya_paket'];
                                       $del=$data['status_kirim'];
                                        
                                    ?>
                                       <tr>

                                       <td style="border: 1px solid black;"><?php echo "$no";?></td> 
                                       <td style="border: 1px solid black;"><?php echo $data['tgl_input'];?></td>
                                       <td style="border: 1px solid black;"><?php echo $data['tgl_delivery'];?></td>
                                       <td style="border: 1px solid black;"><?php echo $data['no_resi'];?></td>
                                       <td style="border: 1px solid black;"><?php echo $data['nama_pengirim'];?></td>
                                       <td style="border: 1px solid black;"><?php echo $data['no_tlp'];?></td>
                                       <td style="border: 1px solid black;"><?php echo $data['jenis_barang'];?></td>
                                       <td style="border: 1px solid black;"><?php echo $data['berat'];?></td>
                                       <td style="border: 1px solid black;"><?php echo $data['layanan'];?></td>
                                       <td style="border: 1px solid black;"><?php echo "Rp ".number_format($data['biaya_paket'], "0"," ", "."); ?></td>
                                       <td style="border: 1px solid black;"><?php echo "Rp ".number_format($jml, "0"," ", "."); ?></td>
                                       <td style="border: 1px solid black;"><?php echo $data['nama_propinsi'];?></td>
                                       <td style="border: 1px solid black;"><?php echo $data['penerima'];?></td>
                                       <td style="border: 1px solid black;"><?php echo $data['tlp_penerima'];?></td>
                                       <td style="border: 1px solid black;"><?php echo $data['tgl_terima'];?></td>
                                       <td style="border: 1px solid black;"><?php echo $data['Nama'];?></td>
                                       <?php if ($del == 'Dalam Perjalanan') { ?>
                                       <td style="border: 1px solid black;"><span class="label-warning label label-default"><?php echo $del;?></span>
                                       <?php }elseif ($del == 'Telah Diterima') { ?>
                                       <td style="border: 1px solid black;"><span class="label-custom label label-default"><?php echo $del;?></span>
                                       <?php }elseif ($del == 'cancel') {?>
                                       <td style="border: 1px solid black;"><span class="label-danger label label-default"><?php echo $del;?></span>
                                       <?php } ?>
                                      
                                    </tr>
                                                     <?php $no++; } } ?>
                                                   </tbody>
                                                </table>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                 </div>
                                 <!--end row-->
                                 <!-- update Modal1 -->

                                 <!-- /.modal -->
                                 <!-- Modal -->    
                                 <!-- delete Modal2 -->

                                 <!-- /.modal -->
                              </section>
                              <!-- /.content -->
                           </div>
