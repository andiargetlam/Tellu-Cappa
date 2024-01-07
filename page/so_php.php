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
                           <form>
                              <div class="form-group">
                                 <label>Customer</label>
                               
                                 <select class="form-control" name="cm">
                                      <?php
                                       include "configs.php"; 
                                       $query ="SELECT * FROM customer ";
                                       $no=1;
                                       $querytampil=mysqli_query($db,$query);
                                       while($data=mysqli_fetch_array($querytampil)){  
                                    ?>
                                    <option value="<?php echo $data['nama_toko'];?>">[PTSC00<?php echo $data ['id_customer'];?>] - <?php echo $data ['nama_toko'];?></option>
                                    <?php } ?>
                                 </select>
                                 
                              </div>
                              <div class="form-group">
                                 <label>Kirim Tanggal</label>
                                 <div class=" input-group date form_date">
                                    <input id='minMaxExample' type="text" class="form-control years"><span class="input-group-addon"><a href="#"><i class="fa fa-calendar"></i></a></span>
                                 </div>
                              </div>
                               <div class="form-group">
                                 <label>produk</label>
                               
                                 <select class="form-control" name="produk[]">
                                      <?php
                                       include "configs.php"; 
                                       $query1 ="SELECT * FROM produk ";
                                       $no=1;
                                       $querytampil1=mysqli_query($db,$query1);
                                       while($data1=mysqli_fetch_array($querytampil1)){  
                                    ?>
                                    <option value="<?php echo $data1['id_produk'];?>"><b><span>[PTSC00<?php echo $data1 ['id_produk'];?>]</span></b> - <?php echo $data1 ['nama_produk'];?> - (<?php echo "Rp ".number_format($data1['Harga'], "0"," ", "."); ?>)</option>
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
                                 <select class="form-control" name="sales">
                                    <option value="Cash">Cash</option>
                                    <option value="Cbd">Cbd</option>
                                    <option value="7 Hari">7 Hari</option>
                                    <option value="14 Hari">14 Hari</option>
                                    <option value="21 Hari">21 Hari</option>
                                    <option value="30 Hari">30 Hari</option>
                                    
                                 </select>
                              </div>
                              
                              <div class="form-group">
                                 <button type="submit" class="btn btn-add"><i class="fa fa-check"></i> Submit
                                 </button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
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
                                       <td>PTSC00<?php echo $data11 ['id_produk'];?></td>
                                       <td><?php echo $data11 ['nama_produk'];?></td>
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
              <?php
                                       include "configs.php"; 
                                       $query12 ="SELECT * FROM produk ";
                                       $no=1;
                                       $querytampil12=mysqli_query($db,$query12);
                                       while($data12=mysqli_fetch_array($querytampil12)){  
                                    ?>
            +' <div class="form-group">'+'<select class="form-control" name="produk[]">'+' <option value="<?php echo $data12['id_produk'];?>">'+'[PTSC00<?php echo $data12['id_produk'];?>]'+' - <?php echo $data12 ['nama_produk'];?> '+'- (<?php echo "Rp ".number_format($data12['Harga'], "0"," ", "."); ?>)</option>'+'</select>'+'</div>'
            +'<input type="number" name="qty[]" class="form-control" placeholder="Qty" required>'+'</div>'
            <?php } ?>
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
