<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); ?>
<?php
session_start();

isset ($_GET['page']) ? $page = $_GET['page'] : $page = 'dashboard';
 ?>

<?php  
    if (isset($_SESSION['id'])){

    
    $dataidmasuk = $_SESSION['id']; 
    include "configs.php"; 
    $query = mysqli_query($db,"SELECT * FROM user where id_user='$dataidmasuk' ");
    while ($data = mysqli_fetch_array($query))
{
    $namauser=$data['Nama'];
    $potouser=$data['Photo'];
    $username=$data['UserName'];
    $password=$data['Password'];
    $alamat=$data['Alamat'];
    $status=$data['Status'];
    $email=$data['Email'];
}
?>
<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from crm.thememinister.com/crmAdmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 06:45:54 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>PT.TELLU CAPPA LOGISTIC</title>
      <!-- Favicon and touch icons -->
      <link rel="shortcut icon" href="img/logo2.png?v=<?php echo time(); ?>" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start page Label Plugins 
         =====================================================================-->
      <!-- Emojionearea -->
      <link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
      <!-- Monthly css -->
      <link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
      <!-- End page Label Plugins 
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
   <body class="hold-transition sidebar-mini">
      <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
         <?php include "header.php"; ?>
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
       
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
        <?php include "sidebar.php"; ?>
        <?php include "page/isi.php"; ?>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <strong><a href="#">PT.TELLU CAPPA LOGISTIC</a></strong>
      </div>
      <!-- /.wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <?php include "script.php"; ?>
<!-- Mirrored from crm.thememinister.com/crmAdmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 06:51:15 GMT -->
</html>
<?php
}else{
    header('location:404.php');
}
?>

