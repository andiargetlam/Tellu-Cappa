<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<?php  $id= $_GET['id'];
include('configs.php');
      $query = mysqli_query($db,"SELECT * FROM customer where id_customer='$id' ");
      $data = mysqli_fetch_array($query);
   
   ?>
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
                                 <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_toko']; ?>">
                              </div>
                              <div class="form-group">
                                 <label>Alamat Toko</label>
                                 <textarea name="alamat" class="form-control" rows="3" ><?php echo $data['alamat_toko']; ?></textarea>
                              </div>
                              <div class="form-group">
                                 <label>No Telpon</label>
                                 <input type="text" name="no" class="form-control" value="<?php echo $data['no_tlp']; ?>" >
                              </div>
                               <div class="form-group">
                                 <label>Salesman</label>
                                 <select class="form-control" name="sales">
                                    <option value="<?php echo $data['salesman']; ?>"><?php echo $data['salesman']; ?></option>
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
                                    <option value="<?php echo $data ['type_customer'];?>"><?php echo $data ['type_customer'];?></option>
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
                                 <input type="text" name="pemilik" class="form-control" value="<?php echo $data['pemilik']; ?>">
                              </div>
                             
                              <div class="form-group">
                                 <label>NIK</label>
                                 <input type="text" name="nik" class="form-control" value="<?php echo $data['nik']; ?>" >
                              </div>
                             
                              <div class="form-group">
                                 <label>Tanggal Lahir</label>
                                 <input id='minMaxExample' type="date" name="tgl"  class="form-control" value="<?php echo $data['tanggal_lahir']; ?>">
                              </div>
                              <div class="form-group">
                                 <label>Alamat</label>
                                 <textarea name="almt" class="form-control" rows="3" ><?php echo $data['alamat']; ?></textarea>
                              </div>
                               <div class="form-group">
                                 <label>No Telpon/Hp</label>
                                 <input type="text" name="tlp" class="form-control" value="<?php echo $data['no_hp']; ?>" >
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
include('conigs.php');
if (isset($_POST['simpan'])) {
   $nama_=$_POST['nama'];
      $alamat_=$_POST['alamat'];
      $no_=$_POST['no'];
      $sales_=$_POST['sales'];
      $tc_=$_POST['tc'];
      $pemilik_=$_POST['pemilik'];
      $nik_=$_POST['nik'];
      $tgl_=$_POST['tgl'];
      $almt_=$_POST['almt'];
      $tlp_=$_POST['tlp'];
   
   
$lokasi_file=$_FILES[fotodoc][tmp_name];
if(empty($lokasi_file))
{
$query=mysqli_query ($db, "update customer set nama_toko='$nama_', alamat_toko='$alamat_', no_tlp='$no_', salesman='$sales_', type_customer='$tc_', pemilik='$pemilik_', nik='$nik_', tanggal_lahir='$tgl_', alamat='$almt_', no_hp='$tlp_' WHERE id_customer='$id'");
echo "<script>alert ('Ubah Data Sukses')</script>";
   echo "<meta http-equiv='refresh' content='0; url=?page=customer_list'>";
                     
}
else{
$nama_file=$_FILES[fotodoc][name];
$lokasi_file=$_FILES[fotodoc][tmp_name];
$tipefile=$_FILES[fotodoc] [type];
$b=substr($tipefile,6);
         $a=".";
         
         $nama="$nama_file$a$b";

$sql = "select * from customer WHERE id_customer='$id'";  
    $result = mysqli_query($db, $sql);  
   if(mysqli_num_rows($result) > 0 ){  
        $data = mysqli_fetch_array($result);  
        //delete file   
   $myFile ="./page/gambar/".$gambar;
                  unlink($data['foto_toko']); 
                  
                  }
                  $uploaddir='./page/gambar/';
                  $alamatgambar=$uploaddir.$nama;
                  $alamatdatabase='./page/gambar/'.$nama;

move_uploaded_file($lokasi_file,$alamatgambar);
$query=mysqli_query ($db, "update customer set nama_toko='$nama_', alamat_toko='$alamat_', no_tlp='$no_', salesman='$sales_', type_customer='$tc_', foto_toko='$alamatdatabase', pemilik='$pemilik_', nik='$nik_', tanggal_lahir='$tgl_', alamat='$almt_', no_hp='$tlp_' WHERE id_customer='$id'");
 echo "<script>alert ('Ubah Data Sukses')</script>";
   echo "<meta http-equiv='refresh' content='0; url=?page=customer_list'>";
}}
?>