<?php
    session_start();

    unset($_SESSION['namapenjual']);
	unset($_SESSION['id']);
    header('Location: indexx.php');
     exit();
?> 