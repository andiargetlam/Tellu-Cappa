<?php
include "configs.php";
$q_kabupaten= "select * from kabupaten where id_propinsi='$_POST[id_propinsi]'";
$kabupaten = mysqli_query($q_kabupaten);
$num_results = mysqli_num_rows($kabupaten);
if( $num_results > 0){ 
while( $datak=mysqli_fetch_array($kabupaten)){
echo "<option value=".$datak['id_kabupaten'].">".$datak['id_kabupaten']."</option>";
}
echo "</select>";
}else{
echo "Data Kosong";
}
?>