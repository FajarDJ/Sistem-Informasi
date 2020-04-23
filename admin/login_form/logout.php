<?php
session_start();
include '../aksi/koneksi.php';

$sess_admin = $_SESSION['id'];

if (isset($sess_admin)) {
  session_destroy();
  echo '<script>alert("anda telah berhasil Logout!");

  window.location.href="formlogin.php"</script>';
}
 ?>
