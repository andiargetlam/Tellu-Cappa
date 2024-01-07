 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-shopping-cart"></i>
               </div>
               <div class="header-title">
                  <h1>Data Order</h1>
                  <small>Data Sales Order</small>
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
                              <label>Status Order :</label>                         
                              <select class="form-control m-b" name="stat">
                                 <option value="waiting approval">Not Verified</option>
                                 <option value="approved">Approved</option>
                                 <option value="riject">Riject</option>
                              </select>
                           </div>
                          
                        </div>

                        <input type="submit" class="btn ink-reaction btn-raised btn-primary" value="tampilkan" name="tampilkan"/>
                     </form>
                     <a href="#">
                        <h4>Sales Order View</h4>
                     </a>
                  </div>
                  </div>
               </div>
                       
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                        
                           <div class="btn-group">

                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="?page=sales_order"> <i class="fa fa-plus"></i> Add Order
                                 </a>  
                              </div>
                              <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Table Data</button>
                              <ul class="dropdown-menu exp-drop" role="menu">
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false'});"> 
                                    <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});">
                                    <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON (ignoreColumn)</a>
                                 </li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'json',escape:'true'});">
                                    <img src="assets/dist/img/json.png" width="24" alt="logo"> JSON (with Escape)</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'xml',escape:'false'});">
                                    <img src="assets/dist/img/xml.png" width="24" alt="logo"> XML</a>
                                 </li>
                                 <li><a href="#" onclick="$('#dataTableExample1').tableExport({type:'sql'});"> 
                                    <img src="assets/dist/img/sql.png" width="24" alt="logo"> SQL</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'csv',escape:'false'});"> 
                                    <img src="assets/dist/img/csv.png" width="24" alt="logo"> CSV</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'txt',escape:'false'});"> 
                                    <img src="assets/dist/img/txt.png" width="24" alt="logo"> TXT</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'excel',escape:'false'});"> 
                                    <img src="assets/dist/img/xls.png" width="24" alt="logo"> XLS</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'doc',escape:'false'});">
                                    <img src="assets/dist/img/word.png" width="24" alt="logo"> Word</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'powerpoint',escape:'false'});"> 
                                    <img src="assets/dist/img/ppt.png" width="24" alt="logo"> PowerPoint</a>
                                 </li>
                                 <li class="divider"></li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'png',escape:'false'});"> 
                                    <img src="assets/dist/img/png.png" width="24" alt="logo"> PNG</a>
                                 </li>
                                 <li>
                                    <a href="#" onclick="$('#dataTableExample1').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> 
                                    <img src="assets/dist/img/pdf.png" width="24" alt="logo"> PDF</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                          <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>NO</th>
                                       <th>TANGGAL</th>
                                       <th>NO SO</th>
                                       <th>CUSTOMER</th>
                                       <th>PRODUK</th>
                                       <th>QTY</th>
                                       <th>HARGA</th>
                                       <th>TOTAL</th>
                                       <th>TOP</th>
                                       <th>SALESMAN</th>
                                       <th>STATUS</th>
                                       <th>Delivery</th>
                                       <th>ACTION</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       if(isset($_POST['tampilkan'])){
                                       include "configs.php"; 
                                       $query ="SELECT * FROM sales_order WHERE  tgl_so BETWEEN '$_POST[awal]' AND '$_POST[akhir]' AND status='$_POST[stat]' AND salesman='$_SESSION[id]' ";
                                       $no=1;
                                       $querytampil=mysqli_query($db,$query);
                                       while($data=mysqli_fetch_array($querytampil)){ 
                                       $del = $data['delivery_status']; 
                                      

                                       $aoquery1 = "SELECT * FROM customer WHERE id_customer = '$data[customer_id]'";
                                       $aoquerytampil1=mysqli_query($db,$aoquery1);
                                       $cs=mysqli_fetch_array($aoquerytampil1);

                                        $aoquery2 = "SELECT * FROM produk WHERE id_produk = '$data[produk]'";
                                        $aoquerytampil2=mysqli_query($db,$aoquery2);
                                        $prod=mysqli_fetch_array($aoquerytampil2);  
                                        $total=$prod['Harga']*$data['qty'];
                                    ?>
                                    <tr>
                                       <td><?php echo "$no";?></td>
                                       <td><?php echo $data['tgl_so'];?></td>
                                       <td><?php echo $data['no_so'];?></td>
                                       <td><?php echo $cs['nama_toko'];?></td>
                                       <td><?php echo $prod['nama_produk'];?></td>
                                       <td><?php echo $data['qty'];?></td>
                                       <td><?php echo "Rp ".number_format($prod['Harga'], "0"," ", "."); ?></td>
                                       <td><?php echo "Rp ".number_format($total, "0"," ", "."); ?></td>
                                       <td><?php echo $data['top'];?></td>
                                       <td><?php echo $_SESSION['namapenjual'];?></td>
                                       <td><?php echo $data['status'];?></td>
                                       <?php if ($del == 'outstanding') { ?>
                                       <td><span class="label-warning label label-default"><?php echo $del;?></span>
                                       <?php }elseif ($del == 'delivered') { ?>
                                       <td><span class="label-custom label label-default"><?php echo $del;?></span>
                                       <?php }elseif ($del == 'cancel') {?>
                                       <td><span class="label-danger label label-default"><?php echo $del;?></span>
                                       <?php } ?>
                                       <?php if ($del == 'delivered') { ?>
                                       <td>
                                          <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-pencil"></i></button>
                                         
                                       </td>
                                    <?php }else{ ?>
                                       <td>
                                           <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                         
                                       </td>
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
               <!-- customer Modal1 -->
               <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Customer Name:</label>
                                          <input type="text" placeholder="Customer Name" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Email:</label>
                                          <input type="email" placeholder="Email" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-4 form-group">
                                          <label class="control-label">Mobile</label>
                                          <input type="number" placeholder="Mobile" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Address</label><br>
                                          <textarea name="address" rows="3"></textarea>
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">type</label>
                                          <input type="text" placeholder="type" class="form-control">
                                       </div>
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
                <!-- customer Modal1 -->
               <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <CENTER><h4>
                                    MOHON MAAF<BR>DATA SUDAH TERKIRIM</h4><BR>
                                    <H5>Silahkan Hubungi pihak logistik atau admin untuk informasi lebih lanjut</H5>
                              </div></CENTER>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
               <!-- Modal -->    
               <!-- Customer Modal2 -->
               <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Delete Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <div class="col-md-12 form-group user-form-group">
                                          <label class="control-label">Delete Customer</label>
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">NO</button>
                                             <button type="submit" class="btn btn-add btn-sm">YES</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>