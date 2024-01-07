<?php
include "../configs.php";
$propinsi = $_GET['propinsi'];
$kota = mysqli_query($db,"SELECT id_kabupaten,nama_kabupaten FROM kabupaten WHERE id_propinsi='$propinsi' order by nama_kabupaten");
echo "<option>-- Pilih Kabupaten/Kota --</option>";
while($k = mysqli_fetch_array($kota)){
    echo "<option value=\"".$k['id_kabupaten']."\">".$k['nama_kabupaten']."</option>\n";
}
?>
