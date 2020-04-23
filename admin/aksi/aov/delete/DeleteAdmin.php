<!DOCTYPE html>
<html>
<head>
  <title>
  </title>
</head>
<body>
  <?php
include '../../koneksi.php';
$vc = $_GET ['vcharga'];

mysqli_query($koneksi , "DELETE FROM aov WHERE vcharga ='$vc'");
header("location:../admin.php");
?>
</body>
</html>
