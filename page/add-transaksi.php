<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
var htmlobjek;
$(document).ready(function()
{
  //apabila terjadi event onchange terhadap object <select id=propinsi>
  $("#propinsi").change(function(){
    var propinsi = $("#propinsi").val();
    $.ajax({
        url: "page/ambilkota.php",
        data: "propinsi="+propinsi,
        cache: false,
        success: function(msg){
            //jika data sukses diambil dari server kita tampilkan
            //di <select id=kota>
            $("#kota").html(msg);
        }
    });
  });
});

</script> 

<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-shopping-bag"></i>
               </div>
               <div class="header-title">
                  <h1>Tambah Transaksi</h1>
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
                              <a class="btn btn-add " href="?page=data_transaksi"> 
                              <i class="fa fa-list"></i> LIHAT TRANSAKSI </a>  
                           </div>
                        </div>
                        <div class="panel-body">
                           <form class="col-sm-6" method="POST" action=""  enctype="multipart/form-data">
                              <center><label><b>INFORMASI PENGIRIM<b></label></center>
                              <div class="form-group">
                                 <label>Nama Pengirim</label>
                                 <input type="text" name="nama" class="form-control" placeholder="Nama Pengirim" >
                              </div>
                              <div class="form-group">
                                 <label>Alamat Pengirim</label>
                                 <input type="text" name="alamat" class="form-control" placeholder="Alamat Pengirim" >
                              </div>
                               <div class="form-group">
                                 <label>No Tlp</label>
                                 <input type="number" name="tlp" class="form-control" placeholder="No Tlp" >
                              </div>

                              <center><label><b>INFORMASI BARANG<b></label></center>
                               <div class="form-group">
                                 <label>Jenis Barang</label>
                                 <input type="text" name="jenis" class="form-control" placeholder="Jenis Barang" >
                              </div>
                               <div class="form-group">
                                 <label>Layanan</label>
                                 <select class="form-control" name="layanan">
                                  <?php
                                     //mengambil data yang ada di database
                                     $query = mysqli_query($db,"SELECT * FROM layanan ");
                                     while($data=mysqli_fetch_array($query)){
                                    ?>
                                    <option value="<?php echo $data['biaya_paket']; ?>"><?php echo $data['layanan']; ?> - [ <?php echo "Rp ".number_format($data['biaya_paket'], "0"," ", "."); ?> ] - <?php echo $data['estimasi']; ?> </option>
                                  <?php $harga= $data['biaya_paket']; } ?>
                                 </select>
                              </div>

                              <div class="form-group">
                                 <label>Berat Barang</label>
                                 <input type="number" name="berat" class="form-control" placeholder="Berat Barang" >
                              </div>

                              
                              
                               <center><label><b>INFORMASI PENERIMA<b></label></center>
                              <div class="form-group">
                                 <label>Nama Penerima</label>
                                 <input type="text" name="penerima" class="form-control" placeholder="Nama Penerima" >
                              </div>
                               <div class="form-group">
                                 <label>Provinisi</label>
                                 <select class="form-control" name="propinsi" id="propinsi">
                                    <option value="propinsi">Provinisi</option>
                                    <?php
                                     //mengambil nama-nama propinsi yang ada di database
                                     $propinsi = mysqli_query($db,"SELECT * FROM propinsi ORDER BY nama_propinsi");
                                     while($p=mysqli_fetch_array($propinsi)){
                                      echo "<option value=\"$p[id_propinsi]\">$p[nama_propinsi]</option>\n";
                                    }
                                    ?>
                                 </select>
                              </div>
                               <div class="form-group">
                                 <label>Kota</label>
                                 <select class="form-control" name="kota" id="kota">
                                    <option value="kota">Kota</option>
                                   <?php
                                    //mengambil nama-nama propinsi yang ada di database
                                    $kota = mysqli_query($db,"SELECT * FROM kabupaten ORDER BY kabupaten");
                                      while($p=mysqli_fetch_array($propinsi)){
                                      echo "<option value=\"$p[id_kabupaten]\">$p[nama_kabupaten]</option>\n";
                                     }
                                      ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label>Alamat Lengkap Penerima</label>
                                 <input type="text" name="alamat_penerima" class="form-control" placeholder="Alamat Penerima" >
                              </div>
                               <div class="form-group">
                                 <label>No Tlp Penerima</label>
                                 <input type="text" name="tlp_penerima" class="form-control" placeholder="Tlp Penerima" >
                              </div>
                               <div class="form-group">
                                 <label>Catatan</label>
                                 <input type="text" name="catatan" class="form-control" placeholder="Catatan Pengiriman" >
                              </div>
                              <div class="form-group">
                                <?php
                                $pinjam            = date("Y-m-d");
                                $tujuh_hari        = mktime(0,0,0,date("n"),date("j")+2,date("Y"));
                                $kembali            = date("Y-m-d", $tujuh_hari);
                                ?>   
                                 <label>Tanggal Kirim</label>
                                 <input type="text" name="tgl" value="<?php echo "$kembali"; ?>" class="form-control" placeholder="Enter Price" disabled > 
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
      
     $tanggal = date('Y-m-d');
     $kode = "RESI012".$getinvoice;
      $nama_=$_POST['nama'];
      $alamat_=$_POST['alamat'];
      $tlp_=$_POST['tlp'];
      $jenis_=$_POST['jenis'];
      $layanan_=$_POST['layanan'];
      $berat_=$_POST['berat'];
      $penerima_=$_POST['penerima'];
      $prov_=$_POST['propinsi'];
      $kot_=$_POST['kota'];
      $alpener_=$_POST['alamat_penerima'];
      $tlp1_=$_POST['tlp_penerima'];
      $catat_=$_POST['catatan'];
                                $pinjam            = date("Y-m-d");
                                $tujuh_hari        = mktime(0,0,0,date("n"),date("j")+2,date("Y"));
                                $kembali            = date("Y-m-d", $tujuh_hari);
                                  
 
     
             $upload="INSERT INTO transaksi (tgl_input, no_resi, nama_pengirim, alamat_pengirim, no_tlp, jenis_barang, layanan_id, berat, penerima, provinsi, kota_kab, alamat_penerima, tlp_penerima, catatan, tgl_kirim, status_kirim) 
            VALUES('$tanggal','$kode', '$nama_','$alamat_','$tlp_','$jenis_','$layanan_','$berat_','$penerima_','$prov_','$kot_','$alpener_','$tlp1_','$catat_','$kembali','New')";
            $simpan=mysqli_query($db,$upload);
            if($simpan){
                echo "<script> document.location.href='?page=konfirmasi&status=Data Anda berhasil di simpan.'; </script>";
            }else{
               echo "<script> document.location.href='?page=add-transaksi&status=Data Anda gagal di simpan.'; </script>";
            }   
     
   }else{
         unset($_POST['simpan']);
   }
?>