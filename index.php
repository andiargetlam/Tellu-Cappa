<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
var htmlobjek;
$(document).ready(function()
{
  //apabila terjadi event onchange terhadap object <select id=propinsi>
  $("#propinsi").change(function(){
    var propinsi = $("#propinsi").val();
    $.ajax({
        url: "page/ambilkota.php",
        data: "propinsi="+propinsi,
        cache: false,
        success: function(msg){
            //jika data sukses diambil dari server kita tampilkan
            //di <select id=kota>
            $("#kota").html(msg);
        }
    });
  });
});

</script> 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PT.TELLU CAPPA LOGISTIC</title>

  <!-- Bootstrap core CSS -->
  <link rel="shortcut icon" href="img/logo2.png" type="image/x-icon">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Cek Tarif</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Produk</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <img src="img\logo2.png" alt="PT.TELLU CAPPA LOGISTIC" style="width: 600px; height: auto;">


        <!-- Cari -->
         <form class="col-sm-12" method="POST" action=""  enctype="multipart/form-data" >
           <h2 class="text-white-50 mx-auto mt-2 mb-5">LACAK PENGIRIMAN ? MASUKAN NO RESI :</h2>                            
           <input type="text" name="cari" class="form-control" value="" style="text-align:center"> <br>
           <?php
                include('configs.php');
                if (isset($_POST['proses'])){
                $email=$_POST['cari'];
                $login= "select * from delivery where resi_no='$email'";
                 $cek_lagi=mysqli_query($db, $login);
                $ketemu=mysqli_num_rows($cek_lagi);
                $data=mysqli_fetch_array($cek_lagi);
                if ($ketemu > 0){
                echo " <h2 class='text-white-50 mx-auto mt-2 mb-5'> INFORMASI PENGIRIMAN :</h2>
                <table class='table table-bordered table-hover' style='color: #ffffff'>
                                 <thead>
                                    <tr class='info'>
                                       <th>No Resi</th>
                                       <th>Kurir</th>
                                       <th>Tgl Terima</th>
                                       <th>Bukti Terima</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 
                                 
                                    <tr>
                                       <td>$data[resi_no]</td>
                                       <td>$data[kurir]</td>
                                       <td>$data[tgl_terima]</td>
                                       <td><img src='$data[bukti_terima]' width='100' height='100'></td>
                                       <td>$data[status_delivery]</td>
                                       
                                    </tr>
                                     <button> <a href='index.php'> Refresh </a> <br>
                                 </tbody>

                              </table>";

                } else {
                    //kalau username ataupun password tidak terdaftar di database
                    echo "Data tidak ada";
                }
                }
                ?>

                  <?php 
                           $aoquery3 = "SELECT * FROM propinsi WHERE id_propinsi = '$_POST[propinsi]'";
                                        $aoquerytampil3=mysqli_query($db,$aoquery3);
                                        $pro=mysqli_fetch_array($aoquerytampil3); 

                                        $aoquery4 = "SELECT * FROM kabupaten WHERE id_kabupaten = '$_POST[kota]'";
                                        $aoquerytampil4=mysqli_query($db,$aoquery4);
                                        $kab=mysqli_fetch_array($aoquerytampil4);
                                        ?>

                 <?php
                include('configs.php');
                if (isset($_POST['prosess'])){
                $id=$_POST['layanan'];
                $paket= "select * from layanan where id_layanan='$id'";
                 $cek_lagi1=mysqli_query($db, $paket);
                $ketemu1=mysqli_num_rows($cek_lagi1);
                $data1=mysqli_fetch_array($cek_lagi1);
                $ongkos=$kab['ongkos_kirim']; + $data1['biaya_paket'];
                if ($ketemu1 > 0){
                echo " <h2 class='text-white-50 mx-auto mt-2 mb-5'> INFORMASI TARIF HARGA :</h2>
                <table class='table table-bordered table-hover' style='color: #ffffff'>
                                 <thead>
                                    <tr class='info'>
                                       <th>Nama Layanan</th>
                                       <th>Tarif</th>
                                       <th>Estimasi Days</th>
                                       <th>Tujuan</th>
                                       <th>Kota</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 
                                 
                                    <tr>
                                       <td>$data1[layanan]</td>
                                       <td>$ongkos / KG</td>
                                       <td>$data1[estimasi]</td>
                                       <td>$pro[nama_propinsi]</td>
                                       <td>$kab[nama_kabupaten]</td>
                                       
                                    </tr>
                                     <button> <a href='index.php'> Refresh </a> <br>
                                 </tbody>

                              </table>";

                } else {
                    //kalau username ataupun password tidak terdaftar di database
                    echo "Data tidak ada";
                }
                }
                ?>
          <button class="btn btn-danger" type="submit" name="proses">Cari</button>
        </form>
        <!-- Ende Cari -->
      </div>
    </div>
  </header>

 

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light" style="padding-top: 0;">
    <div class="container">

      <<!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" style="max-width: 100%;
    height: 100%;" src="img/gambar1.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Tarif Murah</h4>
                <p class="mb-0 text-white-50">Tanaman yang terlihat solid ini pada bagian ujung atas memiliki kumpulan daun mengkilat yang berbentuk mahkota, daun lebar dengan panjang daun sekitar 4 inci. Varietas Lindenii dan Victoria mempunyai warna tepi daun hijau, tengah kuning.</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid"style="max-width: 150%;
    height: 150%;" src="img/gambar2.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Pengiriman</h4>
                <p class="mb-0 text-white-50">Ribbon Plant, daun berwarna hijau keabuan, tidak terlalu menyebar, ketinggian maksimum 2-3 kaki. VarietasBoriquensis mempunyai tepi daun warna hijau muda.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" style="max-width: 100%;
    height: 125%;" src="img/gambar3.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Keamanan Barang</h4>
                <p class="mb-0 text-white-50">Daun dewasa berwarna hijau gelap dengan garis melintang abu-abu muda dan biasanya berkisar antara 70–90 sentimeter (28-35 in) panjang dan lebar 5-6 sentimeter (2,0–2,4 in), meskipun dapat mencapai ketinggian di atas 2 m ( 6 ft) dalam kondisi optimal.</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid"style="max-width: 100%;
    height: 100%;"  src="img/gambar4.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Estimasi Waktu</h4>
                <p class="mb-0 text-white-50">Jenis ini dapat mencapai ketinggian hingga 10 kaki, daun berbentuk kecil, panjang.  Species dasar memiliki daun waarna hijau dengan tepi merah. Varietas Tricolor mempunyai 3 warna yaitu kuning, hijau dan merah sehingga menghasilkan efek hijau keemasan. Varietas Colorama mempunyai pita tepi warna merah yang dominan sehingga secara keseluruhan tampak kemerahan.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>
      <

    </div>
  </section>

 
  <section id="about" class="about-section text-center" style="padding-top: 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <br>
          <h3 class="text-white mb-4">CEK TARIF PENGIRIMAN</h3>
           <!-- Cari -->
         <form class="col-sm-12" method="POST" action=""  enctype="multipart/form-data" >


        
                                 <label>Provinisi</label>
                                 <select class="form-control" name="propinsi" id="propinsi">
                                    <option value="propinsi">Provinisi</option>
                                    <?php
                                     //mengambil nama-nama propinsi yang ada di database
                                     $propinsi = mysqli_query($db,"SELECT * FROM propinsi ORDER BY nama_propinsi");
                                     while($p=mysqli_fetch_array($propinsi)){
                                      echo "<option value=\"$p[id_propinsi]\">$p[nama_propinsi]</option>\n";
                                    }
                                    ?>
                                 </select>
                              
                               <div class="form-group">
                                 <label>Kota</label>
                                 <select class="form-control" name="kota" id="kota">
                                    <option value="kota">Kota</option>
                                   <?php
                                    //mengambil nama-nama propinsi yang ada di database
                                    $kota = mysqli_query($db,"SELECT * FROM kabupaten ORDER BY kabupaten");
                                      while($p=mysqli_fetch_array($propinsi)){
                                      echo "<option value=\"$p[id_kabupaten]\">$p[nama_kabupaten]</option>\n";
                                     }
                                      ?>
                                 </select>
                              </div>

                                 <label>Layanan</label>
                                 <select class="form-control" name="layanan" id="layanan">
                                    <option value="kota">Layanan</option>
                                   <?php
                                    //mengambil nama-nama propinsi yang ada di database
                                    $layanan = mysqli_query($db,"SELECT * FROM layanan");
                                      while($p=mysqli_fetch_array($layanan)){
                                      echo "<option value=\"$p[id_layanan]\">$p[layanan]</option>\n";
                                     }
                                      ?>
                                 </select>
                          <br>

                          <?php 
                           $aoquery3 = "SELECT * FROM propinsi WHERE id_propinsi = '$_POST[propinsi]'";
                                        $aoquerytampil3=mysqli_query($db,$aoquery3);
                                        $pro=mysqli_fetch_array($aoquerytampil3); 

                                        $aoquery4 = "SELECT * FROM kabupaten WHERE id_kabupaten = '$_POST[kota]'";
                                        $aoquerytampil4=mysqli_query($db,$aoquery4);
                                        $kab=mysqli_fetch_array($aoquerytampil4);
                                    
                                        ?>
         
          
          <button class="btn btn-danger" type="submit" name="prosess">Cari</button>

        </form>
        <!-- Ende Cari -->
<br>

        </div>
      </div>
     
    </div>
  </section>
  
  <!-- Contact Section -->
  <section id=#kontak class="contact-section bg-black" style="padding-top: 0;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Alamat</h4>
              <hr class="my-4">
              <div class="small text-black-50">Head Office : 
Jl. Urip Sumoharjo No 28, Makassar
<br>
Jakarta Branch Office :
Jl. Pengadengan Utara No.3
Cikoko Pancoran, Jakarta Selatan</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">tellucappa21@gmail.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fa fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">0823-4990-9905 / 0877 6167 5857</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fa fa-motorcycle"></i>
        </a>
        
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      PT. Tellu-Cappa Logistik
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
