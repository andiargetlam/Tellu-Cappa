<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add User</h1>
                  <small>User list</small>
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
                              <a class="btn btn-add " href="?page=user_list"> 
                              <i class="fa fa-list"></i>  User List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="POST" action=""  enctype="multipart/form-data">
                              <center><label><b>Silahkan Masukan Data User<b></label></center>
                              <div class="form-group">
                                 <label>Nama </label>
                                 <input type="text" name="nama" class="form-control" placeholder="Enter First Name" >
                              </div>
                              <div class="form-group">
                                 <label>Password</label>
                                 <input type="password" name="no" class="form-control" placeholder="Enter Password" >
                              </div>
                               <div class="form-group">
                                 <label>Email</label>
                                 <input type="email" name="email" class="form-control" placeholder="Enter Email" >
                              </div>
                               <div class="form-group">
                                 <label>Divisi</label>
                                 <select class="form-control" name="sales">
                                    <option value="Kurir">Kurir</option>
                                    <option value="Logistic">Logistic</option>
                                 </select>
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
     $kode = "13".$getinvoice;
      $no_=$_POST['no'];
       $email_=$_POST['email'];
      $sales_=$_POST['sales'];
     
             $upload="INSERT INTO user (Nama, Nip, Password, email, Status) 
            VALUES('$nama_','$kode', '$no_','$email_','$sales_')";
            $simpan=mysqli_query($db,$upload);
            if($simpan){
                echo "<script> document.location.href='?page=user_list&status=Data Anda berhasil di simpan.'; </script>";
            }else{
               echo "<script> document.location.href='?page=add_user&status=Data Anda gagal di simpan.'; </script>";
            }   
     
   }else{
         unset($_POST['simpan']);
   }
?>