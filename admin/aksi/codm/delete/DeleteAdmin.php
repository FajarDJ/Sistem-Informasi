<!DOCTYPE html>
<html>
<head>
  <title>
  </title>
</head>
<body>
  <?php
include '../../koneksi.php';
$cp = $_GET ['cpharga'];

mysqli_query($koneksi , "DELETE FROM codm WHERE cpharga ='$cp'");
header("location:../admin.php");
?>
</body>
</html>
