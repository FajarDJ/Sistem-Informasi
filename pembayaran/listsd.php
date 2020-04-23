<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>NOXIDE Top Up Center</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="../img/icon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
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
        <h1><a href="../index.php">NOXIDE</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#topup">Metode Pembayaran</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>METODE PEMBAYARAN</h1>
    </div>
  </section><!-- #hero -->

  <main id="main">
    <!--==========================
      Top up Section
    ============================-->
    <section id="topup">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2 class="section-title">NOMOR ID PEMBAYARAN ANDA</h2>
          <?php
          include '../koneksi.php';
          $data = mysqli_query($koneksi,"SELECT * from usersd order by idpemb desc limit 1 ");
      		while ($d = mysqli_fetch_array($data)) {
           ?>
           <center><h2><?php echo $d['idpemb']; ?></h2>
             <p><b>PERINGATAN!</b> Ingat ID Pembayaran Anda Sebagai Bukti Saat Mengirimkan Hasil Screenshot Pembayaran!</p>
           </center>
         <?php } ?>
          <h3 class="section-title">Silahkan Pilih Metode Pembayaran Dibawah Ini!</h3>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <td align="Center"><b>Metode Pembayaran</td>
              <td align="Center"><b>Alur Top Up</td>
              <td align="Center"><b>Aksi</td>
            </tr>
          </thead>
          <tr>
            <td align="Center">GOPAY</td>
            <td align="Center">Transfer ke +62895385214244 --> Screenshot bukti Berhasil Transfer --> Klik "Kirim Bukti" dan akan masuk ke whatsapp --> Kirim ke akun Whatsapp tersebut dan akan di kirim dalam beberapa waktu. Terima Kasih</td>
            <td align="Center"><a href="https://wa.me/62895385214244"><button class="btn btn-primary">Kirim Gambar</button></a></td>
          </tr>
          <tr>
            <td align="Center">OVO</td>
            <td align="Center">Transfer ke +62895385214244 --> Screenshot bukti Berhasil Transfer --> Klik "Kirim Bukti" dan akan masuk ke whatsapp --> Kirim ke akun Whatsapp tersebut dan akan di kirim dalam beberapa waktu. Terima Kasih</td>
            <td align="Center"><a href="https://wa.me/62895385214244"><button class="btn btn-primary">Kirim Gambar</button></a></td>
          </tr>
        </table>
      </div>
    </section><!-- #topup -->
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
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
