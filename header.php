<header class="main-header" >
            <a href="home.php" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img style="width: 130px; height: 90px;" src="img/logo2.png" alt="">
               </span>
               <span class="logo-lg">
               <img style="width: 130px; height: 90px;" src="img/logo2.png" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               <!-- searchbar-->
               <a href="#search"><span class="pe-7s-search"></span></a>
               <div id="search">
                 <button type="button" class="close">×</button>
                 <form>
                   <input type="search" value="" placeholder="Search.." />
                   <button type="submit" class="btn btn-add">Search...</button>
                </form>
             </div>
             <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                       <?php 
        if ($_SESSION['status'] == "Admin")
        {
        ?>
               <?php
               include 'configs.php';
               $tampilpesan="SELECT * FROM sales_order,produk,customer WHERE sales_order.produk=produk.id_produk AND sales_order.customer_id=customer.id_customer AND sales_order.status='waiting approval' "; 
               $tampilpesanquery = mysqli_query($db,$tampilpesan);
               $numpesan=mysqli_num_rows($tampilpesanquery);
               ?>
                     <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown"> 
                        <i class="pe-7s-cart"></i>
                        <span class="label label-primary"><?php echo "$numpesan"; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <?php while ($data=mysqli_fetch_array($tampilpesanquery)){ ?>
                                 <li >
                                    
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="<?php echo $data['foto_toko'];?>" alt="User Image">
                                       </div>
                                       <h4><?php echo $data['nama_toko'];?></h4>
                                       <p><strong>Produk:</strong> <?php echo $data['nama_produk'];?>
                                       </p>
                                       <p><strong>Quantity:</strong> (<?php echo $data['qty'];?>)
                                       </p>
                                    </a>
                                 </li>
                                 <?php } ?>
                                 
                              </ul>

                           </li>
                        </ul>
                     </li>
                     <?php } elseif ($_SESSION['status'] == "Manager") { ?>
                    
                     <?php
               include 'configs.php';
               $tampilpesan1="SELECT * FROM sales_order,produk,customer WHERE sales_order.produk=produk.id_produk AND sales_order.customer_id=customer.id_customer AND sales_order.status='waiting approval' "; 
               $tampilpesanquery1 = mysqli_query($db,$tampilpesan1);
               $numpesan1=mysqli_num_rows($tampilpesanquery1);
               ?>
                     <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown"> 
                        <i class="pe-7s-cart"></i>
                        <span class="label label-primary"><?php echo "$numpesan1"; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <?php while ($data1=mysqli_fetch_array($tampilpesanquery1)){ ?>
                                 <li >
                                    
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="<?php echo $data1['foto_toko'];?>" alt="User Image">
                                       </div>
                                       <h4><?php echo $data1['nama_toko'];?></h4>
                                       <p><strong>Produk:</strong> <?php echo $data1['nama_produk'];?>
                                       </p>
                                       <p><strong>Quantity:</strong> (<?php echo $data1['qty'];?>)
                                       </p>
                                    </a>
                                 </li>
                                 <?php } ?>
                                  <center><a href="?page=aprv"><span class="label-warning label label-default">View All</span></a></center>
                              </ul>

                           </li>
                        </ul>
                     </li>
                     <?php } elseif ($_SESSION['status'] == "Logistic") { ?>
                     <?php
               include 'configs.php';
               $querytampil12 ="SELECT * FROM delivery,transaksi,propinsi,kabupaten WHERE delivery.resi_no=transaksi.no_resi AND transaksi.provinsi=propinsi.id_propinsi AND transaksi.kota_kab=kabupaten.id_kabupaten AND  delivery.kurir='$_SESSION[namapenjual]' AND delivery.status_delivery='New' "; 
               $tampilpesanquery12 = mysqli_query($db,$tampilpesan12);
               $numpesan12=mysqli_num_rows($tampilpesanquery12);
               ?>
                     <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle admin-notification" data-toggle="dropdown"> 
                        <i class="pe-7s-cart"></i>
                        <span class="label label-primary"><?php echo "$numpesan12"; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                           <li>
                              <ul class="menu">
                                 <?php while ($data12=mysqli_fetch_array($tampilpesanquery12)){ ?>
                                 <li >
                                    
                                    <a href="#" class="border-gray">
                                       <div class="pull-left">
                                          <img src="<?php echo $data12['foto_toko'];?>" alt="User Image">
                                       </div>
                                       <h4><?php echo $data12['nama_toko'];?></h4>
                                       <p><strong>No Resi:</strong> <?php echo $data12['resi_no'];?>
                                       </p>
                                       <p><strong>Tgl Kirim:</strong> (<?php echo $data12['tgl_kirim'];?>)
                                       </p>
                                    </a>
                                 </li>
                                 <?php } ?>
                                  <center><a href="?page=delivery"><span class="label-warning label label-default">View All</span></a></center>
                              </ul>

                           </li>
                        </ul>
                     </li>
                    
                  <?php } ?>
                     <li class="dropdown dropdown-help hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="pe-7s-settings"></i></a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="profile.html">
                              <i class="fa fa-line-chart"></i> Networking</a>
                           </li>
                           <li><a href="#"><i class="fa fa fa-bullhorn"></i> Lan settings</a></li>
                           <li><a href="#"><i class="fa fa-bar-chart"></i> Settings</a></li>
                           <li><a href="login.html">
                              <i class="fa fa-wifi"></i> wifi</a>
                           </li>
                        </ul>
                     </li>
                     <!-- user -->
                     <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/dist/img/avatar5.png" class="img-circle" width="45" height="45" alt="user"></a>
                        <ul class="dropdown-menu" >
                           <li>
                              <a href="profile.html">
                              <i class="fa fa-user"></i> User Profile</a>
                           </li>
                           <li><a href="#"><i class="fa fa-inbox"></i> Inbox</a></li>
                           <li><a href="logout.php">
                              <i class="fa fa-sign-out"></i> Signout</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>