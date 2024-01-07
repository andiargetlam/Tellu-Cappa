 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-shopping-bag"></i>
               </div>
               <div class="header-title">
                  <h1>Product Detail</h1>
                  <small>Product & Stock</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  
                 


                  <div class="col-sm-12">
                     <div class="panel lobidisable panel-bd">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Informasi Barang</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive">
                              <table class="table table-bordered table-hover">
                                 <thead>
                                    <tr class="info">
                                       <th>Kode Produk</th>
                                       <th>Nama Produk</th>
                                       <th>Ukuran</th>
                                       <th>Harga</th>
                                       <th>Stok</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 <?php
                                       include "configs.php"; 
                                       $query11 ="SELECT * FROM produk ";
                                       $no=1;
                                       $querytampil11=mysqli_query($db,$query11);
                                       while($data11=mysqli_fetch_array($querytampil11)){  
                                    ?>
                                 
                                    <tr>
                                       <td><?php echo $data11 ['kode_product'];?></td>
                                       <td><?php echo $data11 ['nama_produk'];?></td>
                                       <td> <?php echo $data11 ['ukuran'];?></td>
                                       <td><?php echo "Rp ".number_format($data11['Harga'], "0"," ", "."); ?></td>
                                       <td> <?php echo $data11 ['stok'];?></td>
                                       <td>
                                                    <a href="?page=edit_pro&id=<?php echo $data11['id_produk'];?>">
                                                   <button type="button" class="btn btn-add btn-sm" ><i class="fa fa-pencil"></i></button></a>
                                                    <a href="?page=hapus_pro&id=<?php echo $data11['id_produk'];?>">
                                                   <button type="button" class="btn btn-danger btn-sm" ><i class="fa fa-trash-o"></i> </button></a>
                                                </td>
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