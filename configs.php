<?php
// koneksi database -------------------------------------------->
$db = new mysqli ( "localhost" , "root" , "" , "db_db" );
echo $db->connect_errno?'Koneksi gagal : '.$db->connect_error:'';
//<--------------------------------------------------------------

?>