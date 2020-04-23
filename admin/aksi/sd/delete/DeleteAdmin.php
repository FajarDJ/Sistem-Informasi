<!DOCTYPE html>
<html>
<head>
  <title>
  </title>
</head>
<body>
  <?php
include '../../koneksi.php';
$dm = $_GET ['dmharga'];

mysqli_query($koneksi , "DELETE FROM sd WHERE dmharga ='$dm'");
header("location:../admin.php");
?>
</body>
</html>
