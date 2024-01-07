<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add Customer</h1>
                  <small>Customer list</small>
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
                              <a class="btn btn-add " href="?page=customer_list"> 
                              <i class="fa fa-list"></i>  Customer List </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="POST" action=""  enctype="multipart/form-data">
                              <center><label>Masukan Nama Toko / Pelanggan</label></center>
                              <div class="form-group">
                                 <label>Nama Toko / Pelanggan</label>
                                 <input type="text" name="nama" class="form-control" placeholder="Enter Name" >
                              </div>
                              <div class="form-group">
                                 <label>Alamat Toko</label>
                                 <textarea name="alamat" class="form-control" rows="3" ></textarea>
                              </div>
                              <div class="form-group">
                                 <label>No Telpon</label>
                                 <input type="text" name="no" class="form-control" placeholder="Enter Telepon" >
                              </div>
                               <div class="form-group">
                                 <label>Salesman</label>
                                 <select class="form-control" name="sales">
                                      <?php
                                       include "configs.php"; 
                                       $queryy ="SELECT * FROM user WHERE Status='Salesman' ";
                                       $no=1;
                                       $querytampily=mysqli_query($db,$queryy);
                                       while($datay=mysqli_fetch_array($querytampily)){  
                                    ?>
                                    <option value="<?php echo $datay['Nama'];?>">[<?php echo $datay ['Nip'];?>] - <?php echo $datay ['Nama'];?></option>
                                    <?php } ?>
                                 </select>
                              </div>
                               <div class="form-group">
                                 <label>Type Customer</label>
                                 <select class="form-control" name="tc">
                                    <option value="Outlet">Outlet</option>
                                    <option value="Distributor">Distributor</option>
                                    <option value="Warehouse">Warehouse</option>
                                    <option value="Industry">Industry</option>
                                    <option value="Personal">Personal</option>
                                    <option value="project">project</option>
                                 </select>
                              </div>
                               <div class="form-group">
                                 <label>Unggah Foto Toko</label>
                                 <input type="file" name="fotodoc">
                                 
                              </div>
                              <BR>
                              <center><label>Infromasi Pemilik Toko</label></center>

                              <div class="form-group">
                                 <label>Nama </label>
                                 <input type="text" name="pemilik" class="form-control" placeholder="Enter Name" >
                              </div>
                             
                              <div class="form-group">
                                 <label>NIK</label>
                                 <input type="text" name="nik" class="form-control" placeholder="Enter NIK" >
                              </div>
                             
                              <div class="form-group">
                                 <label>Tanggal Lahir</label>
                                 <input id='minMaxExample' name="tgl"  class="form-control" placeholder="Enter Date">
                              </div>
                              <div class="form-group">
                                 <label>Alamat</label>
                                 <textarea name="almt" class="form-control" rows="3" ></textarea>
                              </div>
                               <div class="form-group">
                                 <label>No Telpon/Hp</label>
                                 <input type="text" name="tlp" class="form-control" placeholder="Enter Telepon" >
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
      $getinvoice = randinvoice(5);
      $kode = "19".$getinvoice;
      $nama_=$_POST['nama'];
      $alamat_=$_POST['alamat'];
      $no_=$_POST['no'];
      $sales_=$_POST['sales'];
      $tc_=$_POST['tc'];
      $fotodoc=$_FILES['fotodoc']['name'];
      $type=$_FILES['fotodoc']['type'];
      $pemilik_=$_POST['pemilik'];
      $nik_=$_POST['nik'];
      $tgl_=$_POST['tgl'];
      $almt_=$_POST['almt'];
      $tlp_=$_POST['tlp'];
         
      if ($nama_=="" || $nama_=="" || $alamat_==""  || $no_=="" || $sales_=="" || $tc_=="" || $pemilik_=="" || $nik_=="" || $tgl_=="" || $almt_=="" || $tlp_==""){
         print '<script>alert ("pastikan semua data telah diisi"); </script>';
         print '<meta http-equiv="refresh" content="0;url=?page=add_cuts" />';
      }else{ 
         $uploaddir='./page/gambar/';
         $alamatgambar=$uploaddir.$_FILES['fotodoc']['name'];
         $alamatdatabase='./page/gambar/'.$_FILES['fotodoc']['name'];

         if (move_uploaded_file($_FILES['fotodoc']['tmp_name'],$alamatgambar)){
            $upload="INSERT INTO customer (kode_customer, nama_toko, alamat_toko, no_tlp, salesman, type_customer, foto_toko, pemilik, nik, tanggal_lahir, alamat, no_hp, Stat) 
            VALUES('$kode','$nama_','$alamat_', '$no_', '$sales_','$tc_','$alamatdatabase','$pemilik_','$nik_','$tgl_','$almt_','$tlp_','Active' )";
            $simpan=mysqli_query($db,$upload);
            if($simpan){
               echo "<script> document.location.href='?page=customer_list&status=Data Anda berhasil di simpan.'; </script>";
            }else{
               echo "<script> document.location.href='?page=add_cuts&status=Data Anda gagal di simpan.'; </script>";
            }
         }else{
             $upload="INSERT INTO customer (kode_customer,nama_toko, alamat_toko, no_tlp, salesman, type_customer, pemilik, nik, tanggal_lahir, alamat, no_hp, status) 
            VALUES('$kode','$nama_','$alamat_', '$no_', '$sales_','$tc_','$pemilik_','$nik_','$tgl_','$almt_','$tlp_','Active' )";
            $simpan=mysqli_query($db,$upload);
            if($simpan){
                echo "<script> document.location.href='?page=customer_list&status=Data Anda berhasil di simpan.'; </script>";
            }else{
               echo "<script> document.location.href='?page=add_cuts&status=Data Anda gagal di simpan.'; </script>";
            }  
         }
      }  
   }else{
         unset($_POST['simpan']);
   }
?>