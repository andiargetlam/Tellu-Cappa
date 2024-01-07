<br><br><br>
<?php
//cek apakah ada file yang dituju pada direktori app jika tidak ada tampilkan pesan error
if(file_exists('page/'.$page.'.php')){
	include ('page/'.$page.'.php');
}else{
	echo '<div class="well">Error : Aplikasi tidak menemukan adanya file <b>'.$page.'.php</b>pada direktori<b>page/..</b></div>';
}

?>