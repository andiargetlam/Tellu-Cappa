 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <?php
                  include('configs.php');
                  $login= "select * from user where id_user='$dataidmasuk'";
                     $cek_lagi=mysqli_query($db, $login);
                     $data=mysqli_fetch_array($cek_lagi); ?>
                  <h1> Hello <?php echo $data['Status'];?></h1>
                  <small>Selamat Berkerja.</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <?php 
               include 'configs.php';
               $tampilmember="SELECT * FROM user WHERE Status='Salesman' "; 
               $tampilmemberquery = mysqli_query($db,$tampilmember);
               $nummember=mysqli_num_rows($tampilmemberquery);
               ?>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <div id="cardbox1">
                        <div class="statistic-box">
                           <i class="fa fa-user-plus fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo "$nummember"; ?> </span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Active Sales</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <?php 
               include 'configs.php';
               $tampilmember1="SELECT * FROM customer WHERE Stat='Active' "; 
               $tampilmemberquery1 = mysqli_query($db,$tampilmember1);
               $nummember1=mysqli_num_rows($tampilmemberquery1);
               ?>
                     <div id="cardbox2">
                        <div class="statistic-box">
                           <i class="fa fa-user-secret fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo "$nummember1"; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Active Customer</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <?php 
               include 'configs.php';
               $tampilmember12="SELECT * FROM sales_order WHERE  delivery_status='outstanding' "; 
               $tampilmemberquery12 = mysqli_query($db,$tampilmember12);
               $nummember12=mysqli_num_rows($tampilmemberquery12);
               ?>
                     <div id="cardbox3">
                        <div class="statistic-box">
                           <i class="fa fa-shopping-cart fa-3x"></i>
                           <div class="counter-number pull-right">
                              <i class="ti ti-money"></i><span class="count-number"><?php echo "$nummember12"; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3>  Sales Order Outstanding</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                     <?php 
               include 'configs.php';
               $tampilmember123="SELECT * FROM sales_order WHERE status='approved' AND delivery_status='delivered' "; 
               $tampilmemberquery123 = mysqli_query($db,$tampilmember123);
               $nummember123=mysqli_num_rows($tampilmemberquery123);
               ?>
                     <div id="cardbox4">
                        <div class="statistic-box">
                           <i class="fa fa-shopping-cart fa-3x"></i>
                           <div class="counter-number pull-right">
                              <span class="count-number"><?php echo "$nummember123"; ?></span> 
                              <span class="slight"><i class="fa fa-play fa-rotate-270"> </i>
                              </span>
                           </div>
                           <h3> Sales Order Delivered</h3>
                        </div>
                     </div>
                  </div>
               </div>
              
              
               <div class="row">
                  <!-- Barchart -->
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <div class="panel panel-bd lobidisable">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Sales Performance By Order(Bar chart)</h4>
                           </div>
                        </div>
                        <div style="width: 800px;margin: 0px auto;">
                        <canvas id="myChart"></canvas>
                     </div>
                     </div>
                  </div>
                  <!-- bar chart -->
                  
               </div>
               <!-- /.row -->
               <div class="row">
                  <div class="col-xs-12 col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="panel-title">
                              <h4>Google Map</h4>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="google-maps">
                              <iframe src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=15+Springfield+Way,+Hythe,+CT21+5SH&amp;aq=t&amp;sll=52.8382,-2.327815&amp;sspn=8.047465,13.666992&amp;ie=UTF8&amp;hq=&amp;hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&amp;t=m&amp;z=14&amp;ll=51.077429,1.121722&amp;output=embed"></iframe>
                           </div>
                        </div>
                     </div>
                  </div>
                 
               </div>
            </section>
            <!-- /.content -->
         </div>
