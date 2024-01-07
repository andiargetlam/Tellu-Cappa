
 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-shopping-bag"></i>
               </div>
               <div class="header-title">
                  <h1>Approval Order</h1>
                  <small>Approval Order List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>Sales Order Review (Verifikasi)</h4>
                              </a>
                           </div>
                        </div>
                       <?php
                       include "configs.php"; 
$query="SELECT * FROM sales_order,produk,customer,user WHERE sales_order.produk=produk.id_produk AND sales_order.salesman=user.id_user AND sales_order.customer_id=customer.id_customer AND sales_order.status='waiting approval' ORDER BY no_so";
$proses=mysqli_query($db,$query);
$i=0; 
  $no=1;
while($data=mysqli_fetch_assoc($proses)){
  $row[$i]=$data;
  $i++;
  $no++; 
  $totall=$data['Harga']*$data['qty'];
}
foreach($row as $cell){
  if(isset($total[$cell['no_so']]['jml'])) { 
    $total[$cell['no_so']]['jml']++; 
  }else{
    $total[$cell['no_so']]['jml']=1; 
  } 
}
echo "<table border=\"1\"> 
      <table id=\"dataTableExample1\" class=\"table table-bordered table-striped table-hover\">
        <tr> 
                                       
                                       <th>NO SO</th>
                                       <th>TANGGAL</th>
                                       <th>CUSTOMER</th>
                                       <th>PRODUK</th>
                                       <th>QTY</th>
                                       <th>HARGA</th>
                                       <th>TOTAL</th>
                                       <th>TOP</th>
                                       <th>SALESMAN</th>
                                       <th>STATUS</th>  
                                       <th>APPROVED</th>
                                       <th>RIJECT</th>
        </tr>";

$n=count($row);
$cekno_so="";
for($i=0;$i<$n;$i++){
  $cell=$row[$i];
  echo '<tr>';
  if($cekno_so!=$cell['no_so']){
    echo '<td' .($total[$cell['no_so']]['jml']>1?' rowspan="' .($total[$cell['no_so']]['jml']).'">':'>') .$cell['no_so'].'</td>';
    $cekno_so=$cell['no_so'];
  }

  echo "<td>$cell[tgl_so]</td><td>$cell[nama_toko]</td><td>$cell[nama_produk]</td><td>$cell[qty]</td><td>$cell[Harga]</td><td>$totall</td><td>$cell[top]</td><td>$cell[Nama]</td><td>$cell[status]</td>";


  echo"<td><button><a href=home.php?page=updateso&no_so=$cell[no_so]>Approve</a></button></td>";


   echo"<td><button><a href=home.php?page=updateso1&id=$cell[id_order]>Riject</a></button></td>";
  echo "</tr>";

}
echo "</table>";
?>
                       
                        </div>
                     </div>
                  </div>
               </div>