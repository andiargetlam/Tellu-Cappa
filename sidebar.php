  
  <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="?page=dashboard"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                   <?php 
        if ($_SESSION['status'] == "Admin")
        {
        ?>
                 
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-bag"></i><span>Transaksi</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="?page=add-transaksi">Add Transaksi</a></li>
                        <li><a href="?page=data_transaksi">List</a></li>
                       
                     </ul>
                  </li>
                   <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-bag"></i><span>Layanan</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="?page=add-layanan">Add Layanan</a></li>
                        <li><a href="?page=data_layanan">List</a></li>
                       
                     </ul>
                  </li>
                   <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>User</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="?page=add_user">Add User</a></li>
                        <li><a href="?page=user_list">List</a></li>
                       
                     </ul>
                  </li>
                   <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-cart"></i><span>Kurir</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                      <ul class="treeview-menu">
                        <li><a href="?page=delivery-kurir">Delivery Kurir</a></li>
                        <li><a href="?page=delivery_list">View</a></li>
                        
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-truck"></i><span>Logistik</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="?page=delivery_view">Delivery View</a></li>
                        
                     </ul>
                  </li>
                   <li class="treeview">
                     <a href="#">
                     <i class="fa fa-file-text"></i><span>Report</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="?page=rpt_order">Kurir Delivery Report</a></li>
                        
                        
                     </ul>
                  </li>
               <?php } elseif ($_SESSION['status'] == "Manager") { ?>
                   <li class="treeview">
                     <a href="#">
                     <i class="fa fa-users"></i><span>User</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="?page=add_user">Add User</a></li>
                        <li><a href="?page=user_list">List</a></li>
                       
                     </ul>
                  </li>
                   <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-cart"></i><span>Kurir</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                      <ul class="treeview-menu">
                        <li><a href="?page=delivery-kurir">Delivery Kurir</a></li>
                        <li><a href="?page=delivery_list">View</a></li>
                        
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-truck"></i><span>Logistik</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="?page=delivery_view">Delivery View</a></li>
                        
                     </ul>
                  </li>
                   <li class="treeview">
                     <a href="#">
                     <i class="fa fa-file-text"></i><span>Report</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="?page=rpt_order">Kurir Delivery Report</a></li>
                        
                        
                     </ul>
                  </li>
               <?php } elseif ($_SESSION['status'] == "Logistic") { ?>
                   <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-basket"></i><span>Logistik</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        
                        <li><a href="?page=delivery">Delivery</a></li>
                        <li><a href="?page=delivery_view">Delivery View</a></li>
                        
                     </ul>
                  </li>
               <?php } elseif ($_SESSION['status'] == "Kurir") { ?>
                 
                    <li class="treeview">
                     <a href="#">
                     <i class="fa fa-shopping-cart"></i><span>Delivery</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="?page=delivery-kurir">Delivery Kurir</a></li>
                        <li><a href="?page=delivery_list">View</a></li>
                        
                     </ul>
                  </li>
               <?php } ?>
               
               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>