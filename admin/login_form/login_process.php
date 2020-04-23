<?php
include '../aksi/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$check = mysqli_query($koneksi , "SELECT * FROM admin WHERE username='$username' and password='$password'") or die(mysqli_error());

if (mysqli_num_rows($check) >= 1) {
  while($row = mysqli_fetch_array($check)) {
    session_start();

    $_SESSION['name'] = $row ['nama'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['ket'] = $row['ket'];
    $_SESSION['foto'] = $row['foto'];
    ?>
    <script>alert("Selamat Datang <?= $row['nama']; ?> Kamu Telah Berhasil Login!!!");

    window.location.href="../index.php"</script>
    <?php
  }

}else {
  echo '<script>alert("Masukkan Username dan Password Dengan Benar!!!");

  window.location.href="formlogin.php"</script>';
}
 ?>
