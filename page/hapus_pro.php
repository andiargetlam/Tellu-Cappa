<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<?php
session_start();
include('configs.php');
 
        //delete data di database  
$query=mysqli_query($db, "delete from produk where id_produk='$_GET[id]'") ;
	echo "<meta http-equiv='refresh' content='0; url=home.php?page=product_list'>";
	
?>