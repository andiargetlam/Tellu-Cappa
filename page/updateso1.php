<?php
	include 'configs.php';
	$qubah="UPDATE sales_order SET status='riject' WHERE id_order='$_GET[id]'";
	$ubah=mysqli_query($db, $qubah);
	if($ubah){
		$_SESSION['sukses']="Data Berhasil Ditampilkan !";
		echo "<meta http-equiv='refresh' content='0;url=home.php?page=aprv'>";
	}else{
		$_SESSION['error']="Data Gagal Ditampilkan  !";
		echo "<meta http-equiv='refresh' content='0;url=home.php?page=aprv'>";
	}
?>