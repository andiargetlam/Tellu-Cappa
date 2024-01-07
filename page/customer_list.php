 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Customer</h1>
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
                                 <h4>Add customer</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                              <div class="buttonexport" id="buttonlist"> 
                                 <a class="btn btn-add" href="?page=add_cuts"> <i class="fa fa-plus"></i> Add Customer
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
                                       <th>No</th>
                                       <th>Toko</th>
                                       <th>Kode Customer</th>
                                       <th>Cutomer</th>
                                       <th>Type Customer</th>
                                       <th>No Tlp</th>
                                       <th>Salesman</th>
                                       <th>pemilik</th>
                                       <th>No Hp Pemilik</th>
                                       <th>Status</th>
                                     <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       include "configs.php"; 
                                       $query ="SELECT * FROM customer";
                                       $no=1;
                                       $querytampil=mysqli_query($db,$query);
                                                while($data=mysqli_fetch_array($querytampil)){
                                       
                                    ?>
                                    <tr>
                                       <td><?php echo $no;?></td>
                                       <td><img src="<?php echo $data['foto_toko'];?>" class="img-circle" alt="User Image" width="50" height="50"> </td>
                                       <td><?php echo $data['kode_customer'];?></td>
                                       <td><?php echo $data['nama_toko'];?></td>
                                      <td><?php echo $data['type_customer'];?></td>
                                       <td><?php echo $data['no_tlp'];?></td>
                                       <td><?php echo $data['salesman'];?></td>
                                       <td><?php echo $data['pemilik'];?></td>
                                       <td><?php echo $data['no_hp'];?></td>
                                       <td><?php echo $data['Stat'];?></td>

                                       <td>
                                          <a href="?page=edit_cuts&id=<?php echo $data['id_customer'];?>"><button type="button" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button></a>
                                        
                                          <a href="?page=hapus_cuts&id=<?php echo $data['id_customer'];?>"><button type="button" class="btn btn-add btn-sm"><i class="fa fa-trash-o"></i></button></a>
                                       </td>
                                    </tr>
                                    <?php $no++;} ?>
                                  
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
                                             <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">NO</button>
                                             <button type="submit" class="btn btn-add btn-sm"><a href="?pag=hapus_cuts&id=<?php echo $data['id_customer'];?>">YES</a></button>
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