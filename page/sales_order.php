 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-shopping-basket"></i>
               </div>
               <div class="header-title">
                  <h1>Sales Order</h1>
                  <small>Sales & Detail Order</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="panel lobidisable panel-bd">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Add Order</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <form method="post"   enctype="multipart/form-data">
                              <div class="form-group">
                                 <label>Customer</label>
                               
                                 <select class="form-control" name="cm">
                                      <?php
                                       include "configs.php"; 
                                       $query ="SELECT * FROM customer WHERE salesman='$_SESSION[namapenjual]' ";
                                       $no=1;
                                       $querytampil=mysqli_query($db,$query);
                                       while($data=mysqli_fetch_array($querytampil)){  
                                    ?>
                                    <option value="<?php echo $data['id_customer'];?>">[<?php echo $data ['kode_customer'];?>] - <?php echo $data ['nama_toko'];?></option>
                                    <?php } ?>
                                 </select>
                                 
                              </div>
                              
                              <div class="form-group">
                                 <label>Kirim Tanggal</label>
                                 <div class=" input-group date form_date">
                                    <input name="date"  type="date" min="<?php echo date("Y-m-d"); ?>" class="form-control years"><span class="input-group-addon"><a href="#"><i class="fa fa-calendar"></i></a></span>
                                 </div>
                              </div>
                               <div class="form-group">
                                 <label>produk</label>
                               
                                 <select class="form-control" name="produk[]">
                                  <?php
                                       include "configs.php"; 
                                       $query4 ="SELECT * FROM produk ";
                                       $no=1;
                                       $querytampil4=mysqli_query($db,$query4);
                                       while($data4=mysqli_fetch_array($querytampil4)){  
                                    ?>
                                   <option value="<?php echo $data4 ['id_produk'];?>"><?php echo $data4 ['kode_product'];?> - <?php echo $data4 ['nama_produk'];?> - (<?php echo "Rp ".number_format($data4['Harga'], "0"," ", "."); ?>)</option>
                                  <?php } ?>
                                 </select>
                                  <input type="number" name="qty[]" class="form-control" placeholder="Qty" required>
                              </div>
                              <div id="sizestoki">
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-12">
                                    <a class="btn btn-primary" id="add">Add</a>
                                    <a class="btn btn-primary" id="delete">Delete</a>
                                 </div>
                               </div>
                              
                              <br>
                                <div class="form-group">
                                 <label>TOP</label>
                                 <select class="form-control" name="top">
                                    <option value="0">Cash</option>
                                    <option value="0">Cbd</option>
                                    <option value="7">7 Hari</option>
                                    <option value="14">14 Hari</option>
                                    <option value="21">21 Hari</option>
                                    <option value="30">30 Hari</option>
                                    
                                 </select>
                              </div>
                              <?php if ($_SESSION['status']=='Salesman') { ?>
                                 <div class="form-group">
                                 <button type="submit" name="simpan" class="btn btn-add"><i class="fa fa-check"></i> Submit
                                 </button>
                              </div>
                            <?php  }else{ ?>
                              <div class="form-group">
                                 <button type="hidden"  class="btn btn-add"><i class="fa fa-close"></i> No Access!
                                 </button>
                              </div>
                           <?php } ?>
                           </form>
                            
                        </div>
                     </div>
                  </div>

                 


<?php
include "configs.php";
if (isset($_POST['simpan'])){
   function randinvoice($length) {
      $pool = array_merge(range(0,9));
      $key='';
      for($i=0; $i < $length; $i++) {
         $key .= $pool[mt_rand(0, count($pool) - 1)];
      }
      return $key;
   }
   date_default_timezone_set("Asia/Bangkok");
   $tanggal = date('Y-m-d');
   $getinvoice = randinvoice(8);
   $kode = "SO".$getinvoice;
   $cuts=$_POST['cm'];
   $kirim=$_POST['date'];
   $prod=$_POST['produk'];
   $qty=$_POST['qty'];
   $top=$_POST['top'];


         if ( $kode==""|| $cuts=="" ||  $kirim=="" ||  $prod=="" ||  $qty=="" ||  $top=="")//periksa jika data yang dimasukan belum lengkap
         {
            print '<script>alert ("pastikan semua data telah diisi"); </script>';
            print '<meta http-equiv="refresh" content="0;url=?page=sales_order" />';
         }
         else
         {
            
            foreach ($prod as $q => $nama) {
               $upload=mysqli_query($db,"INSERT INTO sales_order (no_so, customer_id, tgl_so, tgl_kirim, produk, qty, top, salesman, status, delivery_status) 
                  VALUES ('$kode','$cuts','$tanggal','$kirim','$nama','$qty[$q]','$top','$_SESSION[id]','waiting approval','outstanding')");  
               $simpan=mysqli_query($db,$upload);
               if($simpan){
                  echo "<script> document.location.href='?page=customer_list'; </script>";
               }else{
                  echo "<script> document.location.href='?page=sales_order'; </script>";
               }  
            }
         }  
      }else{
         unset($_POST['simpan']);
      }
      ?>

                  <div class="col-sm-6">
                     <div class="panel lobidisable panel-bd">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Informatisi Barang</h4>
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
                                       <th>Stok</th>
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
                                       <td>PROD1321<?php echo $data11 ['id_produk'];?></td>
                                       <td> <?php echo $data11 ['nama_produk'];?></td>
                                       <td> <?php echo $data11 ['ukuran'];?></td>
                                       <td> <?php echo $data11 ['stok'];?></td>
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
       
         <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
      var i = 1;
      $("#add").click(function(){
         if(i>5){
            alert("Maksimal 5 Input");
            return false;
         }
         var div = $(document.createElement('div'))
         .attr("id",'div' + i);
         div.after()
         .html('<div class="form-group">'
            +' <div class="form-group">'+'<select class="form-control" name="produk[]">'
            +'<option value="1">PROD132117 - Dracaena Fragrans - (Rp 75.000)</option>'
            +'<option value="2">PROD132118 - Dracaena Samderiana - (Rp 55.000)</option>'
            +'<option value="3">PROD132119 - Sansevieria Trifasciata Laurenti - (Rp 85.000)</option>'
            +'<option value="5">PROD132120 - Epic Hoppless - (Rp 98.000)</option>'
            +'</select>'+'</div>'
            +'<input type="number" name="qty[]" class="form-control" placeholder="Qty" required>'
            +'</div>');  

         div.appendTo("#sizestoki");
         i++;

      });
      $("#delete").click(function(){
         if(i==1){
            alert("input tidak bisa dihapus lagi");
            return false;
         }
         i--;
         $("#div"+ i).remove();
      });
   });
</script>
