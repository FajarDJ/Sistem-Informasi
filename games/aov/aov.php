<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>NOXIDE Top Up Center</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../../img/icon.png" rel="icon">
  <link href="../../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="style.css" rel="stylesheet">
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!--<a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>-->
        <!-- Uncomment below if you prefer to use a text logo -->
        <h1><a href="../../index.php">NOXIDE</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#topup">Top Up</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Arena Of Valor</h1>
      <font color="white">Arena of Valor (AOV) sebelumnya dikenal juga sebagai Strike of Kings (Eropa), Honour of Kings (Tiongkok), Penta Storm (Korea Selatan), Legendary Showdown (Taiwan), Lien Quan (Vietnam), Mobile Arena (Indonesia), Realm of Valor (Thailand) yang mengusung nama berbeda disetiap wilayah pemasarannya dan kemudian menyesuaikan pasar global menjadi Arena of Valor, adalah permainan piranti bergerak daring berjenis arena pertarungan daring multipemain (MOBA) yang diterbitkan oleh Tencent Games. Pada bulan Juli 2017, dilaporkan bahwa permainan ini memiliki lebih dari 80 juta pemain aktif setiap harinya dan 100 juta pemain aktif yang telah memainkannya. Ini adalah permainan paling menguntungkan di dunia (terlaris) dan merupakan aplikasi unduhan gratis terpopuler.</font>
    </div>
  </section><!-- #hero -->

  <main id="main">
    <section id="topup">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Silahkan Isi Data Dibawah Ini</h3>
          <p class="section-description"></p>
        </div>
        <table align="Center">
          <form method="post" action="insertaov.php">
            <tr>
              <td><input type="hidden" class="form-control"  placeholder="ID In Game" name="idpemb" style="width:450px; height:50px; text-align:Center;" required></td>
            </tr>
            <tr>
              <td align="Center"><h5>ID IN GAME</h5></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control"  placeholder="ID In Game" name="id" style="width:450px; height:50px; text-align:Center;" required></td>
            </tr>
            <tr>
              <td align="Center"><h5>PILIH VOUCHER</h5></td>
            </tr>
            <tr>
              <td><select class="form-control" name="vcharga" style="width:450px; height:50px;" required>
              <?php
              include '../../koneksi.php';
                  $data = mysqli_query($koneksi , "select vcharga from aov");
                  while ($d = mysqli_fetch_array($data)) { ?>
                  <option style="text-align:Center;"><?= $d['vcharga'];?></option>
              <?php } ?>
              </select></td>
            </tr>
            <tr>
              <td align="Center"><h5>EMAIL</h5></td>
            </tr>
            <tr>
              <td><input type="text" class="form-control"  placeholder="Email" name="email" style="width:450px; height:50px; text-align:Center; " required></td>
            </tr>
            <tr><td></td></tr>
            <tr>
              <td align="Right"><button class="btn btn-primary" onclick="confirm('Apakah Data Anda Sudah Benar?')" >Selanjutnya</td>
            </tr>
          </form>
        </table>
      </div>
    </section>

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Fajar</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by FajarDJ
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../../lib/jquery/jquery.min.js"></script>
  <script src="../../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../lib/easing/easing.min.js"></script>
  <script src="../../lib/wow/wow.min.js"></script>
  <script src="../../lib/waypoints/waypoints.min.js"></script>
  <script src="../../lib/counterup/counterup.min.js"></script>
  <script src="../../lib/superfish/hoverIntent.js"></script>
  <script src="../../lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../../js/main.js"></script>

</body>
</html>
