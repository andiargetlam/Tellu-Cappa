<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-shopping-bag"></i>
               </div>
               <div class="header-title">
                  <h1>Add Product</h1>
                  <small></small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="?page=product_list"> 
                              <i class="fa fa-list"></i> Product List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="POST" action=""  enctype="multipart/form-data">
                              <center><label><b>Silahkan Masukan Data Produk<b></label></center>
                              <div class="form-group">
                                 <label>Nama </label>
                                 <input type="text" name="nama" class="form-control" placeholder="Enter Product Name" >
                              </div>
                              <div class="form-group">
                                 <label>Ukuran</label>
                                 <input type="text" name="uk" class="form-control" placeholder="Enter Password" >
                              </div>
                               <div class="form-group">
                                 <label>Stok</label>
                                 <input type="number" name="stok" class="form-control" placeholder="Enter Stok" >
                              </div>
                               <div class="form-group">
                                 <label>Harga</label>
                                 <input type="text" name="harga" class="form-control" placeholder="Enter Price" >
                              </div>
                             
                              <div class="reset-button">
                                 <a href="?page=add_product" class="btn btn-warning">Reset</a>
                                 <button class="btn btn-primary" type="submit" name="simpan">Save changes</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>


<?php

   
   include "configs.php";
   if (isset($_POST['simpan'])){
      function randinvoice($length) {
      $pool = array_merge(range(0,2));
      $key='';
      for($i=0; $i < $length; $i++) {
         $key .= $pool[mt_rand(0, count($pool) - 1)];
      }
      return $key;
   }
      $getinvoice = randinvoice(4);
      
     
     $kode = "PROD13".$getinvoice;
      $nama_=$_POST['nama'];
       $uk_=$_POST['uk'];
      $stok_=$_POST['stok'];
      $harga_=$_POST['harga'];
     
             $upload="INSERT INTO produk (kode_product, nama_produk, ukuran, stok, Harga) 
            VALUES('$kode', '$nama_','$uk_','$stok_','$harga_')";
            $simpan=mysqli_query($db,$upload);
            if($simpan){
                echo "<script> document.location.href='?page=product_list&status=Data Anda berhasil di simpan.'; </script>";
            }else{
               echo "<script> document.location.href='?page=add_product&status=Data Anda gagal di simpan.'; </script>";
            }   
     
   }else{
         unset($_POST['simpan']);
   }
?>