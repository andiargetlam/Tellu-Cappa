<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Layanan</h1>
                  <small>Layanan list</small>
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
                              <a class="btn btn-add " href="?page=data_layanan"> 
                              <i class="fa fa-list"></i>  Layanan List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="POST" action=""  enctype="multipart/form-data">
                              <center><label><b>Silahkan Masukan Data User<b></label></center>
                              <div class="form-group">
                                 <label>Layanan </label>
                                 <input type="text" name="nama" class="form-control" placeholder="Nama Layanan" >
                              </div>
                              <div class="form-group">
                                 <label>Biaya Paket</label>
                                 <input type="number" name="biaya" class="form-control" placeholder="Enter Rp." >
                              </div>
                               <div class="form-group">
                                 <label>Estimasi</label>
                                 <input type="text" name="estimasi" class="form-control" placeholder="Estimasi ( 1-2 hari)" >
                              </div>
                               
                              
                             
                              <div class="reset-button">
                                 <a href="#" class="btn btn-warning">Reset</a>
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
      $getinvoice = randinvoice(7);
      
     $nama_=$_POST['nama'];
      $biaya_=$_POST['biaya'];
       $estimasi_=$_POST['estimasi'];
     
             $upload="INSERT INTO layanan (layanan, biaya_paket, estimasi) 
            VALUES('$nama_','$biaya_', '$estimasi_')";
            $simpan=mysqli_query($db,$upload);
            if($simpan){
                echo "<script> document.location.href='?page=data_layanan&status=Data Anda berhasil di simpan.'; </script>";
            }else{
               echo "<script> document.location.href='?page=add_layanan&status=Data Anda gagal di simpan.'; </script>";
            }   
     
   }else{
         unset($_POST['simpan']);
   }
?>