<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<?php  $id= $_GET['id'];
include('configs.php');
      $query = mysqli_query($db,"SELECT * FROM produk where id_produk='$id' ");
      $data = mysqli_fetch_array($query);
   
   ?>
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
                              <center><label><b>Update Product<b></label></center>
                              <div class="form-group">
                                 <label>Nama </label>
                                 <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_produk']; ?>" >
                              </div>
                              <div class="form-group">
                                 <label>Ukuran</label>
                                 <input type="text" name="uk" class="form-control" value="<?php echo $data['ukuran']; ?>" >
                              </div>
                              
                               <div class="form-group">
                                 <label>Harga</label>
                                 <input type="text" name="harga" class="form-control" value="<?php echo $data['Harga']; ?>" >
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
     
      
     
  
      $nama_=$_POST['nama'];
       $uk_=$_POST['uk'];
      $harga_=$_POST['harga'];
     
             $query=mysqli_query ($db, "update produk set nama_produk='$nama_', ukuran='$uk_', Harga='$harga_' WHERE id_produk='$id'");
echo "<script>alert ('Ubah Data Sukses')</script>";
   echo "<meta http-equiv='refresh' content='0; url=?page=product_list'>";
}
            
?>