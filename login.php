<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<?php
include('configs.php');
 
//tangkap data dari form login
$username = $_POST['nip'];
$password = $_POST['password'];
$penjual = $_POST['penjual'];
 

$login= "select * from user where Nip='$username'&&Password='$password'&&Status='$penjual'";
 $cek_lagi=mysqli_query($db, $login);
$ketemu=mysqli_num_rows($cek_lagi);
$data=mysqli_fetch_array($cek_lagi);
if ($ketemu > 0){
    session_start();
  $_SESSION['status'] = $data['Status'];
  $_SESSION['id'] = $data['id_user']; 
  $_SESSION['namapenjual'] = $data['Nama']; 
   header('location:home.php');
} else {
    //kalau username ataupun password tidak terdaftar di database
    header('location:indexx.php?error=4');
}
?>